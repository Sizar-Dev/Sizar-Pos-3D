# Bundled MariaDB (PHP / web system)

This folder ships a **portable MariaDB server** with the POS25 web system so
users **without their own MySQL / MariaDB install** can click
*"Use the built-in database"* on the setup screen and have everything just
work.

The PHP side lives at [`../src/BundledMaria.php`](../src/BundledMaria.php). It
is the web analogue of the Flutter port's `bundled_maria_service.dart`: it
spawns a private `mariadbd.exe` on a loopback port (13306–13316), initialises
the datadir on first run, and re-spawns the daemon on later requests if it
died (e.g. after a reboot) via `ensureRunningIfConfigured()`, which `index.php`
calls on every request (cheap — a single short TCP probe when not in use).

The setup-screen button stays disabled (showing a friendly "not bundled in this
build" hint) until **`bin/mariadbd.exe`** exists here.

---

## What to drop here (Windows release)

1. Download the MariaDB **"Windows, ZIP file (without installer)"** build from
   <https://mariadb.org/download/>. Pick a recent 10.11.x or 11.x LTS — anything
   that ships `mariadbd.exe`.
2. Unzip it somewhere temporary.
3. Copy the following into this folder, preserving structure:

   ```text
   bundled_maria/
     bin/
       mariadbd.exe
       mariadb-install-db.exe    (first-launch datadir init)
       mariadb-admin.exe         (clean shutdown)
       mariadb-dump.exe          (or mysqldump.exe — used for backups)
       mariadb.exe               (or mysql.exe — used for restores)
       *.dll                     (whatever sits next to the .exe files)
     share/
       english/errmsg.sys
       charsets/                 (full directory)
   ```

   You can keep the full `bin/` and `share/` directories unchanged — the
   `.gitignore` keeps them out of git either way. The minimum for first launch
   is `mariadbd.exe` + `mariadb-install-db.exe` + their DLLs +
   `share/english/errmsg.sys` + `share/charsets/`. The `*-dump` and client
   binaries are needed for the **Backup / Restore** feature to work in bundled
   mode (BackupController auto-detects them here).

4. Smoke-test: with the binaries in place, delete `config/database.php` and the
   `runtime/` folder here, then load the app. The setup screen should show a
   live **"Use the built-in database"** button; one click should create the
   `pos25` database and land you on the admin-creation step.

---

## What the app writes (runtime, gitignored)

```text
backend/bundled_maria/runtime/
  data/        the MariaDB datadir (created on first launch)
  my.cnf       generated config — basedir + datadir + port + log-error
  port.txt     the picked port (re-read on later requests)
  server.err   mariadbd's error log
  spawn.lock   advisory lock so two requests don't double-spawn
```

Removing `runtime/` is a hard reset — the next "Use the built-in database"
click runs `mariadb-install-db` again to recreate the datadir.

---

## How it connects

When you click the button, `config/database.php` is written with:

```php
'host' => '127.0.0.1', 'port' => <picked>, 'database' => 'pos25',
'username' => 'root', 'password' => '', 'use_bundled' => true,
```

Everything downstream (controllers, schema, backups) uses MariaDB exactly like
any other MySQL/MariaDB server — no special-casing beyond binary resolution.

---

## Licensing note

MariaDB Server is GPLv2. We **bundle** the unmodified binaries and launch them
as a child process — we don't statically link or modify the source. Ship the
MariaDB license texts (`COPYING`, `THIRD-PARTY.txt`) inside this folder so the
GPL terms travel with the binaries.

---

## Troubleshooting

- **"Built-in database is not bundled in this build"** — the probe didn't find
  `bin/mariadbd.exe`. Check the folder layout above.
- **"…did not become ready within 25 seconds"** — open `runtime/server.err`.
  Most common causes are antivirus blocking `mariadbd.exe` (allow-list it) or a
  missing DLL (re-extract the full `bin/` directory).
- **Daemon doesn't survive after the request** — Apache may be running under a
  restricted account. Confirm the Apache service account can launch processes
  and write to `runtime/`.
- **Resetting everything** — delete `runtime/` (data) + `config/database.php`
  (so the setup wizard reappears). Next load starts fresh.
