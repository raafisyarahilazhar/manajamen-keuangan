# 📊 Boundary Value Analysis – Aplikasi Manajemen Keuangan

---

## 🔹 1. Input Jumlah Uang

**Ketentuan:**
- Minimal: Rp 1.000  
- Maksimal: Rp 100.000.000

### 📌 Boundary Value Analysis:

| Nilai Input (Rp) | Keterangan                  | Hasil yang Diharapkan             |
|------------------|-----------------------------|-----------------------------------|
| 999              | Di bawah batas bawah        | ❌ Error: jumlah terlalu kecil    |
| 1.000            | Batas bawah (valid)         | ✅ Valid                           |
| 1.001            | Sedikit di atas batas bawah | ✅ Valid                           |
| 99.999.999       | Sedikit di bawah batas atas | ✅ Valid                           |
| 100.000.000      | Batas atas (valid)          | ✅ Valid                           |
| 100.000.001      | Di atas batas atas          | ❌ Error: jumlah terlalu besar    |

---

## 🔹 2. Tanggal Transaksi

**Ketentuan:**
- Tidak boleh sebelum 01-01-2020  
- Tidak boleh melebihi tanggal hari ini (contoh: 31-05-2025)

### 📌 Boundary Value Analysis:

| Tanggal         | Keterangan                  | Hasil yang Diharapkan               |
|-----------------|-----------------------------|-------------------------------------|
| 31-12-2019      | Sebelum batas bawah         | ❌ Error: tanggal tidak valid       |
| 01-01-2020      | Batas bawah (valid)         | ✅ Valid                             |
| 02-01-2020      | Sedikit di atas batas bawah | ✅ Valid                             |
| 30-05-2025      | Sedikit sebelum batas atas  | ✅ Valid                             |
| 31-05-2025      | Batas atas (hari ini)       | ✅ Valid                             |
| 01-06-2025      | Di atas hari ini (future)   | ❌ Error: tidak boleh di masa depan |

---

## 🔹 3. Deskripsi Transaksi

**Ketentuan:**
- Minimal 5 karakter  
- Maksimal 100 karakter

### 📌 Boundary Value Analysis:

| Panjang Karakter | Input Contoh     | Hasil yang Diharapkan              |
|------------------|------------------|------------------------------------|
| 4                | "Beli"           | ❌ Error: terlalu pendek            |
| 5                | "Beli M"         | ✅ Valid                            |
| 6                | "Beli Mi"        | ✅ Valid                            |
| 99               | 99 huruf         | ✅ Valid                            |
| 100              | 100 huruf        | ✅ Valid                            |
| 101              | 101 huruf        | ❌ Error: terlalu panjang           |

---

## 🔹 4. Saldo Akun

**Ketentuan:**
- Minimum: Rp 0  
- Maksimum: Rp 1.000.000.000

### 📌 Boundary Value Analysis:

| Nilai Saldo (Rp) | Keterangan                  | Hasil yang Diharapkan             |
|------------------|-----------------------------|-----------------------------------|
| -1               | Di bawah minimum            | ❌ Error: saldo tidak valid       |
| 0                | Minimum saldo (valid)       | ✅ Valid                           |
| 1                | Sedikit di atas minimum     | ✅ Valid                           |
| 999.999.999      | Sedikit di bawah maksimum   | ✅ Valid                           |
| 1.000.000.000    | Maksimum saldo (valid)      | ✅ Valid                           |
| 1.000.000.001    | Melebihi maksimum           | ❌ Error: saldo terlalu besar     |

---

## 🔹 5. Kategori Pengeluaran

**Ketentuan:**
- Maksimum 10 kategori per pengguna

### 📌 Boundary Value Analysis:

| Jumlah Kategori | Keterangan                  | Hasil yang Diharapkan             |
|-----------------|-----------------------------|-----------------------------------|
| 9               | Di bawah batas maksimum     | ✅ Valid                           |
| 10              | Batas maksimum (valid)      | ✅ Valid                           |
| 11              | Melebihi batas maksimum     | ❌ Error: terlalu banyak kategori |

