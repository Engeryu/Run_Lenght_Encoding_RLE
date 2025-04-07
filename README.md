# 🧵 PHP_RLE - Run-Length Encoding for BMP Images

Welcome to the `PHP_RLE` project — an educational and practical implementation of **Run-Length Encoding (RLE)** in PHP, applied to bitmap image compression.

---

## 📦 What is RLE?

**Run-Length Encoding (RLE)** is a simple, lossless data compression technique that replaces consecutive identical elements (runs) with a single value and a count. It is particularly effective for images or files with long runs of repeating data.

### 📘 Example:

```
Original: AAAABBBCCDAA
RLE: 4A3B2C1D2A
```

---

## 🎯 Project Objective

The goal of this project is to demonstrate:

- 📚 The **theory** behind RLE (base and advanced versions)
- 🧪 Practical application of RLE using **BMP image compression**
- 🔍 Comparison between base and advanced implementations
- 🧵 Decoding and reconstitution of compressed data

## 🗂️ Project Structure

```bash
PHP_RLE/
├── advanced_rle/               # Advanced version of the RLE algorithm
│   ├── rle.php                 # Entry script
│   └── src/
│       ├── decode_advanced_rle.php
│       ├── encode_advanced_rle.php
│       └── Image.bmp          # Sample image used for encoding
├── rle_base/                   # Base version of the RLE algorithm
│   ├── rle.php
│   └── src/
│       ├── decode_rle.php
│       └── encode_rle.php
├── README.md                   # You're here
├── LICENSE                     # MIT License
├── CODE_OF_CONDUCT.md
└── SECURITY.md
```

---

## 🛠️ How it works

### 🧵 Base RLE

- Reads a string or binary sequence
- Compresses repeating patterns using basic `count+value` formatting
- Simple, fast, and easy to decode

### 🔧 Advanced RLE

- Improved handling of special cases (short bursts, binary content, etc.)
- Better suited for **bitmap images** or file data
- Works directly on `Image.bmp` for demonstration

### 🖼️ BMP Compression Use Case

Using `Image.bmp`, this project:

1. Reads the raw pixel data from the image
2. Applies **Advanced RLE** compression
3. Stores or transmits the compact version
4. Allows **reconstruction** of the original bitmap using the decoder

This mimics how certain old-school image formats (PCX-like) handled compression.

---

## 🚀 Getting Started

Make sure you have PHP installed:

```bash
php rle_base/rle.php
php advanced_rle/rle.php
```

You can edit the source scripts to test with custom strings or other `.bmp` images.

---

## 📄 License

This project is licensed under the **MIT License** --- see LICENSE.

---

## 🙌 Contributions

Feel free to fork, open issues or submit pull requests. Feedback and improvements are welcome!
