# 📋 Hasil Pengujian Fitur Aplikasi Keuangan

---

## 📌 A. Login Pengguna

| No | Fitur  | Test Case Description              | Input                        | Expected Result               | Status |
|----|--------|------------------------------------|------------------------------|-------------------------------|--------|
| 1  | Login  | Login berhasil                     | Email dan password valid     | Berhasil masuk dashboard      | ✅     |
| 2  | Login  | Login gagal - password salah       | Email benar, password salah | Error: Password salah         | ✅     |
| 3  | Login  | Login gagal - field kosong         | Email kosong, password isi  | Error: Email wajib diisi      | ✅     |

---

## 📌 B. Input Transaksi Keuangan

| No | Fitur             | Test Case Description       | Input                                | Expected Result                              | Status |
|----|-------------------|-----------------------------|---------------------------------------|-----------------------------------------------|--------|
| 4  | Tambah Transaksi  | Input pengeluaran valid     | Rp 50.000, kategori: Makanan          | Transaksi ditambahkan, saldo berkurang       | ✅     |
| 5  | Tambah Transaksi  | Input nol atau negatif      | Rp -10.000, kategori: Belanja         | Error: Jumlah harus positif                   | ✅     |
| 6  | Tambah Transaksi  | Field wajib kosong          | Rp 25.000, kategori kosong            | Error: Kategori wajib diisi                   | ✅     |

---

## 📌 C. Laporan Bulanan

| No | Fitur    | Test Case Description                   | Input               | Expected Result                            | Status |
|----|----------|------------------------------------------|----------------------|---------------------------------------------|--------|
| 7  | Laporan  | Tampilkan laporan bulan aktif           | Bulan: Mei 2025      | Tabel transaksi dan total bulan Mei         | ✅     |
| 8  | Laporan  | Tidak ada transaksi di bulan tersebut   | Bulan: Februari 2024 | Tampil pesan: "Tidak ada transaksi"         | ✅     |

---

## 📌 D. Validasi Form Input

| No | Fitur          | Test Case Description                  | Input                     | Expected Result                         | Status |
|----|----------------|------------------------------------------|----------------------------|------------------------------------------|--------|
| 9  | Validasi Form  | Panjang deskripsi melebihi batas        | Deskripsi 101 karakter     | Error: Maksimum 100 karakter             | ✅     |
| 10 | Validasi Form  | Input uang dalam huruf                  | Jumlah: "lima ribu"        | Error: Harus diisi angka                 | ✅     |

---

## 📌 E. Manajemen Kategori

| No | Fitur            | Test Case Description         | Input                     | Expected Result                        | Status |
|----|------------------|-------------------------------|----------------------------|----------------------------------------|--------|
| 11 | Tambah Kategori  | Tambah kategori baru valid    | Nama: Transportasi         | Kategori berhasil ditambahkan          | ✅     |
| 12 | Tambah Kategori  | Tambah kategori kosong        | Nama: [kosong]             | Error: Nama wajib diisi                | ✅     |
| 13 | Tambah Kategori  | Tambah kategori duplikat      | Nama: Makanan              | Error: Kategori sudah ada              | ✅     |
