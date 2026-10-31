# Sizar POS Pro — Hardware Intelligence & Performance Auto-Calibration Guide
**Script Target:** `Calibrate_Server_Hardware_Performance.bat`  
**Platform:** Native Windows 10 / Windows 11 (64-bit)  
**Author:** SizarDev | Oran, Algeria  
**Publication Date:** October 2026  

---

## 1. Overview & Execution Philosophy

The **Hardware Intelligence & Performance Auto-Calibrator** (`Calibrate_Server_Hardware_Performance.bat`) is an autonomous engine designed to probe the client PC's hardware specifications (RAM, CPU cores, SSD vs. HDD storage) and automatically tune the database and web server parameters for **maximum throughput without human guesswork**.

### Zero-Prerequisite Architecture:
- **NO Python Required:** Fresh Windows client PCs do not have Python installed. Relying on Python causes 100% failure on client machines.
- **NO Pre-Installed PHP Required:** The script executes natively even before PHP is registered in the system `PATH`.
- **100% Native Windows PowerShell 5.1+:** Embedded directly inside a single `.bat` wrapper. Windows 10 and 11 ship with PowerShell pre-installed, providing instant access to native WMI/CIM hardware APIs.

---

## 2. Hardware Probing & Metrics Collected

The engine queries the Windows Management Instrumentation (WMI/CIM) layer in under 2 seconds:

| Hardware Metric | Native WMI / CIM Query | Purpose |
| :--- | :--- | :--- |
| **Total Physical RAM** | `(Get-CimInstance Win32_ComputerSystem).TotalPhysicalMemory` | Calculates the exact memory budget for MySQL and PHP while reserving a safe buffer (2.5GB - 3.5GB) for Windows OS. |
| **Storage Media Type** | `(Get-CimInstance root\Microsoft\Windows\Storage -ClassName MSFT_PhysicalDisk).MediaType` | Detects **SSD (`MediaType=4`)** vs. **Mechanical HDD (`MediaType=3`)**, plus NVMe (`BusType=17`) vs. SATA (`BusType=11`). |
| **CPU Cores & Threads** | `(Get-CimInstance Win32_Processor).NumberOfCores` & `NumberOfLogicalProcessors` | Tunes concurrency tickets, buffer pool instances, and Apache worker threads. |

---

## 3. Mathematical Allocation Formulas (Continuous & Granular)

Instead of rigid, coarse presets, the engine calculates allocations dynamically based on exact installed hardware:

### A. MySQL InnoDB Buffer Pool (`innodb_buffer_pool_size`)
*The most vital performance directive in Sizar POS Pro. Keeps tables, indexes, and active transactions directly in RAM.*

$$\text{Allocation Ratio} = \begin{cases} 
25\% & \text{if Total RAM} \le 4.5\text{ GB (allocates } 1\text{GB, leaves } 3\text{GB for OS)} \\
45\% & \text{if } 4.5\text{ GB} < \text{Total RAM} \le 8.5\text{ GB (e.g. } 8\text{GB RAM} \rightarrow 3.5\text{G}-4\text{G)} \\
50\% & \text{if } 8.5\text{ GB} < \text{Total RAM} \le 16.5\text{ GB (e.g. } 16\text{GB RAM} \rightarrow 7\text{G}-8\text{G)} \\
60\% & \text{if Total RAM} > 16.5\text{ GB (e.g. } 32\text{GB RAM} \rightarrow 19\text{G}, 64\text{GB} \rightarrow 40\text{G)}
\end{cases}$$

### B. Buffer Pool Instances (`innodb_buffer_pool_instances`)
*Splits memory into independent regions to eliminate mutex lock contention under multi-terminal POS traffic.*
- If Buffer Pool $< 1\text{ GB}$: `1` instance.
- If Buffer Pool $\ge 1\text{ GB}$: $\min(\text{CPU Cores}, \max(1, \text{Pool Size in GB}))$, capped at `16`.

### C. Redo Log Capacity (`innodb_redo_log_capacity`)
*Accommodates intensive write bursts during end-of-day sales reconciliations and bulk stock imports.*
- Equal to approximately $20\%$ to $25\%$ of the buffer pool:
  - $1\text{GB Buffer Pool} \rightarrow \mathbf{256M}$
  - $3\text{G}-4\text{G Buffer Pool} \rightarrow \mathbf{1G}$
  - $7\text{G}-8\text{G Buffer Pool} \rightarrow \mathbf{2G}$
  - $\ge 16\text{G Buffer Pool} \rightarrow \mathbf{4G}$

### D. Storage I/O Directives & The Disk Head Synchronization Rule
*Prevents flash cell wear on SSDs and magnetic head thrashing on mechanical HDDs.*

| Storage Type | `innodb_io_capacity` | `innodb_io_capacity_max` | `innodb_flush_neighbors` | Technical Justification |
| :--- | :---: | :---: | :---: | :--- |
| **SSD / NVMe** | `2000` | `4000` | **`0` (Disabled)** | SSDs have zero seek penalty. Disabling neighbor flushing prevents unnecessary flash cell write wear. |
| **Mechanical HDD** | `200` | `400` | **`1` (Enabled)** | HDDs have physical spinning platters and moving heads. Enabling neighbor flushing groups dirty pages into contiguous physical sectors, preventing the OS from freezing. |

### E. PHP Memory Limit (`memory_limit`)
*Allocates generous headroom for complex accounting balance sheets and PDF barcode generation.*
- $\le 4.5\text{ GB RAM} \rightarrow \mathbf{512M}$
- $4.5\text{ GB to } 16.5\text{ GB RAM} \rightarrow \mathbf{1024M}$
- $> 16.5\text{ GB RAM} \rightarrow \mathbf{2048M}$

### F. Apache Concurrency (`ThreadsPerChild`)
*Number of simultaneous worker threads dedicated to cashier terminals and background sync.*
- $\ge 6\text{ CPU Cores} \rightarrow \mathbf{150}$ threads.
- $< 6\text{ CPU Cores} \rightarrow \mathbf{100}$ threads.

---

## 4. Strict Air-Gap Isolation: Performance vs. Security

> [!IMPORTANT]
> **The Inviolable Security Invariant:**
> The Auto-Calibrator is strictly restricted to modifying performance throughput parameters. It is **permanently prohibited from touching, altering, or weakening any security hardening directive**.

```
┌────────────────────────────────────────────────────────────────────────────────────────┐
│                      STRICT AIR-GAP DIRECTIVE SEPARATION MATRIX                        │
├──────────────────────────────────────────┬─────────────────────────────────────────────┤
│ ALLOWED MODIFICATIONS (PERFORMANCE ONLY) │ STRICTLY FORBIDDEN / LOCKED (SECURITY ONLY) │
├──────────────────────────────────────────┼─────────────────────────────────────────────┤
│ ✔ innodb_buffer_pool_size                │ ⛔ disable_functions                        │
│ ✔ innodb_buffer_pool_instances           │ ⛔ expose_php = Off                         │
│ ✔ innodb_redo_log_capacity               │ ⛔ allow_url_fopen = Off                    │
│ ✔ innodb_io_capacity                     │ ⛔ session.* cookie flags (HttpOnly/Lax)    │
│ ✔ innodb_io_capacity_max                 │ ⛔ session.upload_progress.enabled = Off    │
│ ✔ innodb_flush_neighbors                 │ ⛔ fatal_error_backtraces = Off             │
│ ✔ PHP memory_limit                       │ ⛔ post_max_size / upload_max_filesize     │
│ ✔ Apache ThreadsPerChild                 │ ⛔ local_infile = 0                         │
│                                          │ ⛔ ServerTokens Prod / ServerSignature Off  │
└──────────────────────────────────────────┴─────────────────────────────────────────────┘
```

---

## 5. Interactive Operation Modes & Enterprise Menu Control

Rather than modifying live system files blindly, the Calibrator features a full interactive CLI menu that gives the administrator total control over every step:

```
┌──────────────────────────────────────────────────────────────────────┐
│ SELECT AN ACTION:                                                    │
├──────────────────────────────────────────────────────────────────────┤
│ [1] Auto-Calibrate Config Files ONLY (Workspace Template Mode)       │
│     - Updates extra\server-configs\ files based on detected hardware. │
│     - ZERO impact on live active services or system directories.     │
│                                                                      │
│ [2] Manual / Custom Parameter Tuning (Review & Override)             │
│     - Manually set InnoDB pool size, PHP memory, Apache threads.     │
│     - Choose whether to save to workspace files or inject to system. │
│                                                                      │
│ [3] Full Live System Injection & Service Sync (Requires Admin)       │
│     - Injects BOM-Free tuned directives into MySQL, PHP, and Apache. │
│     - Automatically creates backups and restarts active services.    │
│                                                                      │
│ [4] Rollback to Previous Configuration Backups                       │
│     - Restores original .bak / .backup_tuning configuration files.   │
│                                                                      │
│ [5] Quick Live Services Health & Port Check                          │
│                                                                      │
│ [6] Exit (Do Nothing)                                                │
└──────────────────────────────────────────────────────────────────────┘
```

### Detailed Breakdown of Options:
1. **Option [1] — Auto-Calibrate Config Files ONLY:**
   Applies detected hardware math directly to `extra\server-configs\` templates. Ideal for preparing portable deployments without touching the local Windows host.
2. **Option [2] — Custom Parameter Tuning:**
   Allows the engineer to manually override each parameter (`innodb_buffer_pool_size`, `memory_limit`, etc.) with interactive validation, and choose whether to write to repository templates or inject to live services.
3. **Option [3] — Full Enterprise System Injection:**
   Creates `.backup_tuning` safety snapshots of live files, writes the parameters with guaranteed BOM-free UTF-8 encoding into `C:\ProgramData\MySQL\...`, `C:\php\php.ini`, and `C:\Apache24\conf\httpd.conf`, and safely restarts/verifies Windows services (`MySQL97` and `Apache2.4`).
4. **Option [4] — Rollback Safety Net:**
   Instantly restores original backups and reverts services if any issues arise.
5. **Option [5] — Live Services Health Check:**
   Audits service states and verifies TCP listening ports (`3306` for MySQL, `80` for Apache).

---

## 6. Target File Locations Processed by the Script

1. **MySQL / MariaDB Configuration:**
   - Server Template: `../server-configs/my.ini`
   - Active System: `C:\ProgramData\MySQL\MySQL Server 9.7\my.ini` (or 8.4 / 8.0)
2. **PHP Configuration:**
   - Server Template: `../server-configs/php.ini`
   - Active System: `C:\php\php.ini` and `C:\ProgramData\PosEngine\php\php.ini`
3. **Apache Configuration:**
   - Server Template: `../server-configs/httpd.conf`
   - Active System: `C:\Apache24\conf\httpd.conf` and `C:\ProgramData\PosEngine\server\conf\httpd.conf`

---

## 7. How to Run the Calibrator

1. Launch **`Calibrate_Server_Hardware_Performance.bat`** (located in `extra/performance-calibration/` or via root `fix_services.bat`).
2. Accept the Windows UAC elevation prompt if you plan to inject live changes (Option 3).
3. The engine probes hardware in < 2 seconds and displays your machine's hardware intelligence report.
4. Select the desired option (1 to 6) from the interactive menu.

---
*Certified for Sizar POS Pro Architecture · SizarDev Engineering.*
