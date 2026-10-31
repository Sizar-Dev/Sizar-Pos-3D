# Sizar POS Pro - Enterprise Cryptographic Licensing Suite
**Architecture:** Asymmetric RSA-2048 Digital Signatures + SHA-256 + Hardware Machine Fingerprinting  
**Author & Architect:** SizarDev | Oran, Algeria  

---

## 1. Overview

Sizar POS Pro features an offline cryptographic license verification system. Licenses are hardware-bound using immutable machine fingerprinting (CPU, motherboard UUID, and drive serials normalized into a deterministic `Machine ID`), signed with an offline RSA-2048 Private Key, and verified in-memory by `LicenseService.php` using the embedded Public Key.

---

## 2. Quick 1-Click License Activation (For Evaluators & Judges)

You can activate and license the POS system on your current workstation in **under 2 seconds**:

### Option A: The One-Click Interactive Wizard (Windows)
1. Double-click `generate_license.bat`.
2. Select **[1] Generate New Client License** (or press Enter for automatic detection).
3. The utility automatically:
   - Queries your hardware and detects your `Machine ID`.
   - Generates an authentic cryptographic payload.
   - Signs it with the RSA-2048 evaluation private key.
   - Verifies the signature mathematically.
   - Installs `license.json` directly into `../../SizarDev-Pos/config/license.json`.
4. Refresh or launch Sizar POS — the system is immediately unlocked and operational!

### Option B: Command Line (CLI Auto-Detect)
Run the following from this directory:
```bash
php generate_license.php --auto
```
This instantly generates and installs a valid perpetual evaluation license for the host machine.

---

## 3. Advanced CLI Syntax

```bash
# Generate for a specific hardware Machine ID
php generate_license.php --machine-id="SizarDev-POS-XXXX-XXXX-XXXX-XXXX" --client="Store Name" --plan=perpetual

# Generate a time-limited subscription license
php generate_license.php --machine-id="SizarDev-POS-XXXX-XXXX-XXXX-XXXX" --client="Store Name" --plan=subscription --expires=2026-12-31

# Verify an existing license file
php generate_license.php --verify --file="../../SizarDev-Pos/config/license.json"
```

---

## 4. Key Pair Mathematical Self-Test

To mathematically verify that `developer_private_key.pem` and the embedded `PUBLIC_KEY` in `LicenseService.php` are synchronized:
```bash
php generate_license.php --test-keys
```
*Outputs: `[SUCCESS] Cryptographic keypair is mathematically synchronized.`*
