# Atbash-Cipher-Decoder
A lightning-fast PHP utility to instantly decode Atbash mirror ciphers during CTF challenges written by Maloy Roy Orko.

# 🐘 Atbash Cipher Toolkit

[![Language](https://shields.io)](https://php.net)
[![License: MIT](https://shields.io)](https://opensource.org)
[![Tool Type](https://shields.io)]()

A lightweight, zero-dependency PHP cryptographic toolkit designed to decode strings encrypted with the classic Atbash mirror cipher. This repository features separate dedicated scripts optimized for both static automated flag parsing and interactive command-line environments.

---

## 📁 Repository Structure

* 💻 `atbash-cli.php` — Direct script using pre-defined cipher strings for fast, automated execution.
* 🎨 `atbash-gui.php` — Interactive script processing terminal inputs dynamically via secure streams.

---

## ✨ Features

* **⚡ Pure PHP Math Optimization** — Uses high-performance ASCII value mirroring via `ord()` and `chr()` formulas without heavy lookups.
* **🛡️ Integrity Preservation** — Automatically preserves spaces, punctuation, underscores (`_`), numbers, and brackets (`{}`) while accurately swapping alphabet text.
* **📦 Zero Dependencies** — Works immediately without any extra installations or configurations on standard PHP 7.x or 8.x setups.

---

## 🚀 Usage Instructions

### Prerequisites
* PHP CLI installed on your local machine (`php -v`).

### Running the Standard Script
To run the static version with your preconfigured cipher variable, execute:
```bash
php atbash-cli.php
```

### Running the Interactive Script
To run the version that dynamically captures text entered in the console loop, execute:
```bash
php atbash-gui.php
```

---

## 🔍 How It Works

The toolkit operates using a bitwise-complement style arithmetic approach for maximum system performance:

* **Uppercase Mirror Calculation:** $65 (\text{A}) + 90 (\text{Z}) = 155$
* **Lowercase Mirror Calculation:** $97 (\text{a}) + 122 (\text{z}) = 219$

```php
$base = ctype_upper($char) ? 155 : 219;
$atbash = chr($base - ord($char));
```

---

## 📄 License

Distributed under the MIT License. See `LICENSE` for more information.

