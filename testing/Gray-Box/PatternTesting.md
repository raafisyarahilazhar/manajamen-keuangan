# ✅ Test Case Aplikasi Manajemen Keuangan

---

## ✅ 1. Login

### 🔹 Fungsional Dasar

| Test Case                     | Input                            | Expected Result                        |
|------------------------------|----------------------------------|----------------------------------------|
| Login valid                  | Email dan password valid         | Berhasil masuk ke dashboard            |
| Login gagal (password salah) | Email valid, password salah      | Menampilkan pesan error                |
| Login gagal (email tidak terdaftar) | Email tidak ada, password sembarang | Menampilkan pesan error            |

### 🔸 Skenario Tidak Terduga

| Test Case                | Input                    | Expected Result                                |
|-------------------------|--------------------------|------------------------------------------------|
| SQL Injection           | `' OR '1'='1`            | Login gagal atau sistem mencegah query         |
| Field kosong            | Email dan password kosong | Validasi error muncul                         |
| Email tidak sesuai format | `useratexample.com`     | Validasi email tidak valid                     |
| Password terlalu panjang | 256 karakter random      | Validasi gagal atau pesan error                |

---

## ✅ 2. Register

### 🔹 Fungsional Dasar

| Test Case            | Input                            | Expected Result                    |
|---------------------|----------------------------------|------------------------------------|
| Register valid       | Nama, email valid, password kuat | Berhasil registrasi                |
| Email sudah terdaftar | Email yang sudah digunakan       | Menampilkan error                  |

### 🔸 Skenario Tidak Terduga

| Test Case             | Input                          | Expected Result                     |
|----------------------|--------------------------------|-------------------------------------|
| Email tanpa domain    | `user@`                        | Validasi email tidak valid          |
| Password lemah        | "123"                          | Validasi gagal                      |
| Field kosong          | Semua field kosong             | Menampilkan pesan validasi         |
| Input dengan script   | `<script>alert(1)</script>`    | Mencegah XSS                       |

---

## ✅ 3. Input Barang

### 🔹 Fungsional Dasar

| Test Case       | Input                             | Expected Result               |
|----------------|-----------------------------------|-------------------------------|
| Input valid     | Nama barang, jumlah, harga        | Barang tersimpan              |
| Input kosong    | Semua field kosong                | Validasi error                |

### 🔸 Skenario Tidak Terduga

| Test Case                  | Input                     | Expected Result                                   |
|---------------------------|---------------------------|---------------------------------------------------|
| Jumlah negatif            | -10                       | Validasi gagal                                    |
| Harga string              | "sepuluh ribu"            | Validasi gagal                                    |
| Nama barang karakter aneh | `Barang@@@###`            | Tervalidasi atau disimpan (tergantung kebijakan)  |
| Input spam                | 100x submit cepat         | Sistem stabil atau throttle request               |

---

## ✅ 4. Input Laporan Penjualan

### 🔹 Fungsional Dasar

| Test Case                  | Input                                     | Expected Result              |
|---------------------------|-------------------------------------------|------------------------------|
| Input valid               | Nama barang, jumlah terjual, tanggal      | Data tersimpan               |
| Jumlah > stok             | Barang stok 10, input 15                  | Validasi gagal               |

### 🔸 Skenario Tidak Terduga

| Test Case             | Input          | Expected Result         |
|----------------------|----------------|-------------------------|
| Tanggal di masa depan | `2099-01-01`   | Validasi gagal          |
| Tanggal kosong        | `""`           | Validasi gagal          |
| Jumlah terjual negatif | `-5`          | Validasi gagal          |
