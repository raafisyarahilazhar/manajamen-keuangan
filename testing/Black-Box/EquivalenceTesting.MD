# ✅ EQUIVALENCE TESTING

## 🎯 Fitur: Tambah Transaksi  
**Field yang diuji:** Jumlah Uang (input angka)

### 📋 Spesifikasi:
- Input hanya boleh berupa **angka positif** (minimal Rp1).
- **Maksimal nilai** adalah **Rp10.000.000**.
- Tidak boleh kosong, huruf, atau karakter non-numerik lainnya.

---

## 1. 📐 Equivalence Class

| Equivalence Class              | Contoh Input     | Valid / Invalid | Keterangan                           |
|--------------------------------|------------------|------------------|---------------------------------------|
| Angka valid                    | 1 – 10.000.000   | ✅ Valid         | Harus diterima                        |
| Angka di bawah batas bawah     | 0                | ❌ Invalid       | Harus ditolak (tidak boleh 0)        |
| Angka di atas batas atas       | 10.000.001       | ❌ Invalid       | Harus ditolak                         |
| Input negatif                  | -500             | ❌ Invalid       | Harus ditolak                         |
| Input non-numerik              | "lima ratus"     | ❌ Invalid       | Harus ditolak                         |
| Input kosong                   | ""               | ❌ Invalid       | Harus ditolak                         |

---

## 2. 🧪 Tabel Test Case Equivalence Testing

| Test Case | Input Jumlah Uang | Kelas Ekuivalen         | Diharapkan | Catatan               |
|-----------|--------------------|--------------------------|-------------|------------------------|
| TC1       | 5.000              | Valid (dalam rentang)    | Diterima    | Nominal umum           |
| TC2       | 0                  | Invalid (bawah minimum)  | Ditolak     | Nilai nol tidak sah    |
| TC3       | 10.000.001         | Invalid (melebihi batas) | Ditolak     | Di atas batas maksimum |
| TC4       | -500               | Invalid (angka negatif)  | Ditolak     | Tidak boleh negatif    |
| TC5       | "lima ratus"       | Invalid (non-numerik)    | Ditolak     | Input huruf            |
| TC6       | ""                 | Invalid (kosong)         | Ditolak     | Harus diisi            |

---

## 3. ▶️ Eksekusi Pengujian

Langkah pengujian untuk setiap test case:
1. Buka form **"Tambah Transaksi"**.
2. Isi kolom **"Jumlah Uang"** dengan nilai dari test case.
3. Klik tombol **Simpan** atau **Tambah**.
4. Amati hasil:
   - Apakah validasi muncul?
   - Apakah data berhasil disimpan?
   - Apakah aplikasi crash atau error?

---

## 🧾 Tabel Hasil Pengujian

| Test Case | Input     | Kelas   | Diharapkan | Aktual     | Status |
|-----------|-----------|---------|------------|------------|--------|
| TC1       | 5000      | Valid   | Diterima   | Diterima   | ✅ Pass |
| TC2       | 0         | Invalid | Ditolak    | Ditolak    | ✅ Pass |
| TC3       | 10000001  | Invalid | Ditolak    | Ditolak    | ✅ Pass |
| TC4       | -500      | Invalid | Ditolak    | Diterima   | ❌ Fail |
| TC5       | "abc"     | Invalid | Ditolak    | Ditolak    | ✅ Pass |
| TC6       | ""        | Invalid | Ditolak    | Ditolak    | ✅ Pass |

---

## ✅ Kesimpulan

- Mayoritas validasi berjalan sesuai harapan.
- Terdapat **satu bug** pada TC4: input negatif masih diterima.
- Perlu perbaikan pada validasi angka negatif agar sistem lebih aman dan sesuai spesifikasi.
