# Robustness Testing – Validasi Ketahanan Input Form Transaksi

---

## Tabel Test Case Robustness

| Test Case | Field yang Diuji | Input                        | Jenis Uji               | Ekspektasi                                 |
|-----------|------------------|------------------------------|--------------------------|---------------------------------------------|
| TC1       | Jumlah Uang      | "" (kosong)                  | Input kosong             | Validasi gagal, aplikasi stabil             |
| TC2       | Jumlah Uang      | "abc123"                     | Tipe data salah          | Validasi gagal, tidak crash                 |
| TC3       | Jumlah Uang      | 9999999999999999999          | Nilai ekstrem            | Validasi gagal atau overflow ditangani      |
| TC4       | Deskripsi        | "#@!$%^&*()"                 | Karakter spesial         | Diterima jika tidak dibatasi                |
| TC5       | Deskripsi        | (10.000 karakter)            | Input sangat panjang     | Validasi atau limit muncul                  |
| TC6       | Tanggal          | 31-02-2024                   | Tanggal tidak valid      | Validasi gagal, tidak crash                 |
| TC7       | Semua field      | `' OR 1=1 --`                | SQL Injection            | Ditolak, aman dari injeksi                  |
| TC8       | Kategori         | Input tidak sesuai opsi      | Input out-of-option      | Validasi gagal atau diabaikan               |
| TC9       | Jumlah Uang      | -5000                        | Angka negatif            | Ditolak oleh validasi                       |
| TC10      | Semua field      | Kosong semua                 | Validasi wajib semua     | Validasi lengkap muncul, tidak crash        |

---

## Tabel Eksekusi Pengujian Robustness

| Test Case | Input                    | Ekspektasi                         | Hasil Aktual | Status |
|-----------|--------------------------|------------------------------------|--------------|--------|
| TC1       | Jumlah uang kosong       | Validasi muncul                    | ✅            | Pass   |
| TC2       | Jumlah uang "abc123"     | Validasi muncul                    | ✅            | Pass   |
| TC3       | Jumlah uang sangat besar | Aplikasi tetap stabil              | ✅            | Pass   |
| TC4       | Deskripsi karakter spesial| Tersimpan / ditolak sesuai aturan | ✅            | Pass   |
| TC5       | Deskripsi 10.000 karakter| Aplikasi tetap stabil              | ✅            | Pass   |
| TC6       | Tanggal tidak valid      | Validasi muncul                    | ✅            | Pass   |
| TC7       | SQL Injection input      | Tidak dieksekusi sebagai query     | ✅            | Pass   |
| TC8       | Kategori tidak valid     | Validasi muncul atau abaikan       | ✅            | Pass   |
| TC9       | Jumlah negatif           | Validasi gagal                     | ✅            | Pass   |
| TC10      | Semua kosong             | Validasi lengkap muncul            | ✅            | Pass   |
