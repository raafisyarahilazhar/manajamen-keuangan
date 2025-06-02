## 1. Control Flow Testing

---

### a. Register

#### 📈 Flowchart

[Start]
↓
[Form Submitted]
↓
[Validasi Input?] --No--> [Kembali ke Form dengan Error]
↓ Yes
[Hash Password]
↓
[Simpan ke DB]
↓
[Login User Otomatis]
↓
[Redirect ke Dashboard]
↓
[End]


#### ✅ Path

| Path | Jalur | Deskripsi |
|------|-------|-----------|
| R1   | Start → Submit → Validasi OK → Hash → Simpan DB → Login → Redirect | Jalur normal berhasil |
| R2   | Start → Submit → Validasi Gagal → Kembali ke Form | Gagal validasi input (e.g. email kosong) |

#### 🧪 Test Case

| TC     | Input | Expected Output | Path |
|--------|-------|------------------|------|
| TC-R1  | Nama: Budi, Email: budi@mail.com, Pass: 12345678 | Redirect ke dashboard | R1 |
| TC-R2  | Nama: "", Email: "", Pass: "" | Kembali ke form dengan error | R2 |

---

### b. Login

#### 📈 Flowchart

[Start]
↓
[Form Submitted]
↓
[Validasi Input?] --No--> [Kembali ke Form dengan Error]
↓ Yes
[Cek Kredensial Valid?] --No--> [Kembali ke Form dengan Error]
↓ Yes
[Login Session]
↓
[Redirect ke Dashboard]
↓
[End]


#### ✅ Path

| Path | Jalur | Deskripsi |
|------|-------|-----------|
| L1   | Start → Submit → Validasi OK → Kredensial OK → Login → Redirect | Login sukses |
| L2   | Start → Submit → Validasi Gagal → Kembali ke Form | Email/password tidak diisi atau invalid |
| L3   | Start → Submit → Validasi OK → Kredensial Gagal → Kembali ke Form | Email/password salah |

#### 🧪 Test Case

| TC     | Input | Expected Output | Path |
|--------|-------|------------------|------|
| TC-L1  | Email: budi@mail.com, Pass: 12345678 (valid) | Redirect ke dashboard | L1 |
| TC-L2  | Email: "", Pass: "" | Kembali ke form dengan error | L2 |
| TC-L3  | Email: budi@mail.com, Pass: salahpass | Kembali ke form dengan error | L3 |

---

### c. Input Barang

#### 📈 Flowchart
[Start]
↓
[Form Submit POST /barang]
↓
[Validasi Input?] --No--> [Kembali ke form dengan error]
↓ Yes
[Simpan ke DB]
↓
[Redirect dengan pesan sukses]
↓
[End]


#### ✅ Path

| Path | Alur | Deskripsi |
|------|------|-----------|
| P1   | Start → Submit → Validasi OK → Simpan → Redirect sukses | Jalur normal sukses |
| P2   | Start → Submit → Validasi Gagal → Kembali ke form | Jalur gagal validasi |

#### 🧪 Test Case

- **Valid Input (P1)**

| Field         | Value               |
|---------------|---------------------|
| Nama Produk   | Sunforus Trackpants |
| Modal         | 70000               |
| Harga Jual    | 130000              |
| Jumlah Barang | 100                 |

- **Invalid Input – Value Kosong (P2)**

| Field         | Value     |
|---------------|-----------|
| Nama Produk   | (kosong)  |
| Modal         | (kosong)  |
| Harga Jual    | (kosong)  |
| Jumlah Barang | (kosong)  |

- **Invalid Input – Format Salah (P2)**

| Field         | Value           |
|---------------|-----------------|
| Nama Produk   | Hoodie          |
| Modal         | tiga puluh ribu |
| Harga Jual    | limapuluh       |
| Jumlah Barang | sepuluh         |

---

### d. Input Laporan

#### 📈 Flowchart
[Start]
↓
[Form Submit POST /laporan]
↓
[Validasi Input?] --No--> [Kembali ke form dengan error]
↓ Yes
[Ambil Barang dari DB]
↓
[Hitung total, modal, simpanan, keuntungan]
↓
[Simpan ke DB]
↓
[Redirect dengan pesan sukses]
↓
[End]


#### ✅ Path

| Path | Alur | Deskripsi |
|------|------|-----------|
| P1   | Start → Submit → Validasi OK → Ambil barang → Hitung → Simpan → Redirect | Jalur normal sukses |
| P2   | Start → Submit → Validasi Gagal → Kembali ke form | Jalur validasi gagal |

#### 🧪 Test Case

- **Valid Input (P1)**

| Field         | Value              |
|---------------|--------------------|
| Nama Produk   | Kaos Polos (ID = 1)|
| Jumlah Terjual| 10                 |

- **Invalid – Tidak Memilih Produk (P2)**

| Field         | Value     |
|---------------|-----------|
| Nama Produk   | (kosong)  |
| Jumlah Terjual| 5         |

- **Invalid – Jumlah Terjual Format Salah (P2)**

| Field         | Value      |
|---------------|------------|
| Nama Produk   | Hoodie     |
| Jumlah Terjual| "sepuluh"  |

---
