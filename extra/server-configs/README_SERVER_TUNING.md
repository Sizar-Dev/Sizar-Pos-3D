# Sizar POS Pro - Enterprise Server Hardening & Performance Architecture
**Author & Software Architect:** SizarDev | Oran, Algeria  
**Target Environment:** Apache 2.4.x Lounge Win64 · PHP 8.5.x (Thread Safe ZTS) · MariaDB 11.x / MySQL 9.x/8.x (Windows 64-bit)  
**Classification:** Official Server Configuration, Security Hardening & Performance Tuning Specification  

---

## 1. Executive Summary: Why These 3 Configuration Files Are Provided

In high-concurrency retail environments and multi-business enterprise operations, an application is only as resilient and fast as the web server, runtime interpreter, and database engine backing it. 

Standard out-of-the-box installations of Apache, PHP, and MySQL are notoriously unsuited for commercial POS and ERP workloads:
* Standard PHP defaults limit file uploads to 2 MB and script timeouts to 30 seconds, causing silent crashes during large inventory imports, multi-gigabyte database backup archives, and automated report rendering.
* Default database configurations allocate negligible memory buffers (e.g. 128 MB buffer pool), forcing high-frequency disk thrashing on modern multi-core NVMe workstations.
* Unhardened runtime banners broadcast exact software versions, exposing store kiosks and servers to automated vulnerability scanning.

To guarantee turnkey, zero-friction deployment with maximum security and maximum hardware throughput, Sizar POS Pro provides three production-hardened configuration blueprints:
1. **`httpd.conf`** — Hardened Apache 2.4 web server configuration.
2. **`my.ini`** — High-throughput, NVMe-optimized MariaDB / MySQL database configuration.
3. **`php.ini`** — Enterprise-hardened, memory-calibrated PHP 8.x runtime engine.

---

## 2. Security Hardening vs. Performance Tuning: Dual-Pillar Breakdown

The configurations enforce a strict architectural decoupling between **Performance Scaling** and **Defensive Security Directives**. Security controls remain permanently locked and non-negotiable regardless of machine hardware size.

```
┌────────────────────────────────────────────────────────────────────────────────────────┐
│                        DUAL-PILLAR ARCHITECTURAL MATRIX                                │
├────────────────────────────────────────────┬───────────────────────────────────────────┤
│ Pillar I: Dynamic Performance Scaling      │ Pillar II: Static Cyber-Defense Hardening │
├────────────────────────────────────────────┼───────────────────────────────────────────┤
│ • Dynamic RAM Buffer Allocation (InnoDB)   │ • Core Vulnerability Defense (CVE Mitigations)│
│ • NVMe SSD Wear Protection (I/O neighbors) │ • Information Disclosure & Fingerprint Masking│
│ • Worker Concurrency & KeepAlive Pipelines │ • Dangerous Function Execution Blacklists │
│ • High-Capacity Backup Upload Streams      │ • Strict Session Transport & CSRF Immunity│
└────────────────────────────────────────────┴───────────────────────────────────────────┘
```

---

## 3. Deep Security Hardening & Vulnerability Mitigations

### 3.1 PHP Runtime Hardening (`php.ini`) & Recent CVE Defenses

Recent advisories identified critical memory corruption and execution vectors in PHP's C-runtime:
* **`CVE-2026-109618` & `CVE-2026-109619` ("PHP2Shell", CVSS 4.0: 9.2):** Critical buffer vulnerabilities triggered via serialized session upload progress tracking and specific memory allocations during multipart request processing.
* **`CVE-2026-115560`:** Secondary buffer handling issue in unconstrained multipart request parsing.

#### Defensive Directives Applied in `php.ini`:
1. **`session.upload_progress.enabled = Off`**: Permanently disables upload progress tracking within `$_SESSION`. This severs the primary execution pathway exploited by CVE-2026-109619 and CVE-2026-115560.
2. **`fatal_error_backtraces = Off`**: Disables verbose internal stack memory backtraces upon fatal exceptions, closing error-driven memory disclosure vectors on PHP 8.5.
3. **`max_multipart_body_parts = 1500`**: Replaces the unbounded `-1` default with a strict ceiling of 1,500 parts, defending against resource exhaustion and multipart memory fragmentation.
4. **`disable_functions = passthru, system, proc_open, popen, pcntl_exec, show_source, phpinfo`**: Blacklists dangerous low-level execution routines while preserving native administrative backup capabilities.
5. **`expose_php = Off`**: Suppresses the `X-Powered-By: PHP/x.x.x` HTTP response header, eliminating reconnaissance vectors.
6. **`user_ini.filename =`**: Disables directory-level `.user.ini` file scanning, preventing attackers from overriding hardened security directives via uploaded files.
7. **`mysqli.allow_local_infile = Off`**: Prevents arbitrary local file exfiltration through malicious `LOAD DATA LOCAL INFILE` queries.
8. **`ffi.enable = "false"`**: Completely shuts down the Foreign Function Interface (FFI), preventing arbitrary C library invocation.
9. **`sqlite3.defensive = 1`**: Enables SQLite defense mode, preventing SQL-level mutation of internal schema tables.
10. **`phar.readonly = On` & `phar.require_hash = On`**: Mitigates PHAR deserialization attacks by mandating cryptographic signature verification on archive executions.
11. **Session Hardening Suite**:
    * `session.use_strict_mode = 1`: Rejects uninitialized session IDs (Session Fixation immunity).
    * `session.cookie_httponly = 1`: Blocks JavaScript document.cookie access (XSS token theft immunity).
    * `session.cookie_samesite = "Lax"`: Protects session cookies against cross-site request forgery.

> [!IMPORTANT]
> **Sovereign Best-Practice Recommendation:**
> While these `php.ini` configuration directives provide essential defense-in-depth and eliminate known exploit pathways, **the gold-standard recommendation is deploying PHP version 8.5.12 (or 8.4.27 / 8.3.36) or higher**. The official patches in PHP 8.5.12 resolve the underlying C-runtime vulnerability at the binary level.

---

### 3.2 Database Engine Hardening (`my.ini`)
* **`local_infile = 0`**: Enforced on the database daemon to reject client-side file reading requests.
* **Dedicated Data Isolation**: Binds MariaDB/MySQL strictly to localhost (`127.0.0.1`), eliminating exposure to unauthorized external networks unless explicitly proxied.

---

### 3.3 Apache Web Server Hardening (`httpd.conf`)
* **`ServerTokens Prod` & `ServerSignature Off`**: Completely conceals Apache version, operating system details, and installed module listings from HTTP response headers and error pages.
* **Directory Indexing Suppression (`Options -Indexes`)**: Prevents automated directory browsing across all application asset paths.
* **Hidden File Shielding**: Strict denial rules blocking public HTTP access to `.git`, `.env`, `.htaccess`, and internal configuration files.

---

## 4. Hardware Performance Scaling & Storage Ergonomics

### 4.1 RAM Capacity Scaling Matrix
Buffer allocations must never starve the operating system. Sizar POS adheres to the mathematical safety rule: **allocate 45%–60% of total RAM to the database engine, reserving at least 3–4 GB for Windows OS, Apache, and background worker threads.**

| Hardware Profile | Total RAM | `innodb_buffer_pool_size` | `innodb_buffer_pool_instances` | `innodb_redo_log_capacity` | PHP `memory_limit` |
| :--- | :--- | :--- | :--- | :--- | :--- |
| **Terminal / Kiosk** | 4 GB | `1G` | `1` | `256M` | `512M` |
| **Small Store** | 8 GB | `3G` | `4` | `1G` | `1024M` |
| **Recommended Server** | **16 GB** | **`7G` – `8G`** | **`8`** | **`2G`** | **`1024M` – `2048M`** |
| **Enterprise Multi-Store**| 32 GB+ | `18G` – `20G` | `16` | `4G` | `2048M` |

---

### 4.2 Storage Drive Architecture: NVMe SSD vs. Mechanical HDD
* **Solid State Drives (NVMe / SATA SSD):**
  * `innodb_io_capacity = 2000` & `innodb_io_capacity_max = 4000`
  * `innodb_flush_neighbors = 0`: **Critical for SSD longevity.** Because solid-state storage has near-zero seek latency, grouping adjacent blocks provides no benefit and prematurely degrades NAND flash write endurance.
* **Mechanical Hard Drives (HDD - 7200 RPM):**
  * `innodb_io_capacity = 200` & `innodb_io_capacity_max = 400`
  * `innodb_flush_neighbors = 1`: Mandatory for rotational platters to group adjacent dirty pages into sequential head sweeps, preventing severe OS disk thrashing.

---

## 5. Automated Calibration & Turnkey Deployment

### 5.1 How the Hardware Performance Auto-Calibrator Operates
The companion tool located in `../performance-calibration/Calibrate_Server_Hardware_Performance.bat`:
1. Evaluates live system metrics (CPU cores, physical RAM, NVMe vs HDD).
2. Calculates exact buffer formulas for this machine.
3. Dynamically updates the directives inside `extra/server-configs/` (and live system paths if installed).
4. Synchronizes and restarts active Windows services (`Apache2.4` and `MySQL97` / `MariaDB`) with zero manual editing.

### 5.2 One-Click Manual Installer (`apply_configurations.bat`)
For clean deployments on new Windows servers:
1. Right-click **`apply_configurations.bat`** and select **"Run as administrator"**.
2. Automatically copies configurations to `C:\php\php.ini`, `C:\Apache24\conf\httpd.conf`, and `C:\ProgramData\MySQL\...\my.ini`.
3. Restarts web and database services cleanly in seconds.
