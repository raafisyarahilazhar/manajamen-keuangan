#  Decision Table & Test Cases – Validasi Form Transaksi

---

## 1. Decision Table

| Kondisi / Input                | R1  | R2  | R3  | R4  | R5  | R6  | R7  | R8  |
|-------------------------------|-----|-----|-----|-----|-----|-----|-----|-----|
| Tanggal diisi                 | Y   | Y   | Y   | Y   | N   | N   | Y   | Y   |
| Jumlah uang valid (> 0)       | Y   | Y   | N   | N   | Y   | Y   | N   | Y   |
| Jenis transaksi dipilih       | Y   | N   | Y   | N   | Y   | N   | Y   | N   |
| **Aksi: Tampilkan error**     | N   | Y   | Y   | Y   | Y   | Y   | Y   | Y   |
| **Aksi: Simpan transaksi**    | Y   | N   | N   | N   | N   | N   | N   | N   |

---

## 2. Uraian Test Case Berdasarkan Decision Table

| Test Case | Tanggal     | Jumlah Uang | Jenis Transaksi | Hasil Diharapkan           |
|-----------|-------------|--------------|------------------|----------------------------|
| TC1 (R1)  | Diisi       | 5000         | Pemasukan        | Transaksi disimpan         |
| TC2 (R2)  | Diisi       | 5000         | -                | Error: jenis transaksi     |
| TC3 (R3)  | Diisi       | 0            | Pengeluaran      | Error: jumlah tidak valid  |
| TC4 (R4)  | Diisi       | 0            | -                | Error: jumlah & jenis      |
| TC5 (R5)  | Kosong      | 5000         | Pemasukan        | Error: tanggal kosong      |
| TC6 (R6)  | Kosong      | 5000         | -                | Error: tanggal & jenis     |
| TC7 (R7)  | Diisi       | 0            | Pengeluaran      | Error: jumlah tidak valid  |
| TC8 (R8)  | Diisi       | 5000         | -                | Error: jenis transaksi     |

---

## 3. Format Eksekusi Pengujian

| Test Case | Tanggal     | Jumlah | Jenis        | Aktual                     | Status |
|-----------|-------------|--------|--------------|----------------------------|--------|
| TC1       | 2024-05-01  | 5000   | Pemasukan    | Transaksi disimpan         | Pass   |
| TC2       | 2024-05-01  | 5000   | -            | Error: Jenis kosong         | Pass   |
| TC3       | 2024-05-01  | 0      | Pengeluaran  | Error: Jumlah invalid       | Pass   |
| TC4       | 2024-05-01  | 0      | -            | Error: Jumlah & jenis       | Pass   |
| TC5       | -           | 5000   | Pemasukan    | Error: Tanggal kosong       | Pass   |
| TC6       | -           | 5000   | -            | Error: Tanggal & jenis      | Pass   |
| TC7       | 2024-05-01  | 0      | Pengeluaran  | Error: Jumlah invalid       | Pass   |
| TC8       | 2024-05-01  | 5000   | -            | Error: Jenis kosong         | Pass   |
