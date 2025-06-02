# Cause-Effect Graphing – Validasi Form Transaksi

---

## 1. Causes

| Kode | Sebab                     |
|------|----------------------------|
| C1   | Tanggal diisi              |
| C2   | Jumlah uang diisi          |
| C3   | Jumlah uang > 0            |
| C4   | Jenis transaksi dipilih    |

---

## 2. Effects

| Kode | Akibat                             |
|------|------------------------------------|
| E1   | Tampilkan error (validasi gagal)   |
| E2   | Transaksi disimpan (validasi berhasil) |

---

## 3. Relasi Cause-Effect

- **Jika** `C1 AND C2 AND C3 AND C4` → `E2 (Transaksi disimpan)`
- **Jika** `NOT (C1 AND C2 AND C3 AND C4)` → `E1 (Tampilkan error)`

---

## 4. Decision Table

| Test Case | C1 (Tanggal) | C2 (Jml Diisi) | C3 (Jml > 0) | C4 (Jenis Dipilih) | E1 (Error) | E2 (Simpan) |
|-----------|--------------|----------------|---------------|---------------------|------------|-------------|
| TC1       | Y            | Y              | Y             | Y                   | N          | ✅          |
| TC2       | Y            | Y              | Y             | N                   | ✅         | N           |
| TC3       | Y            | Y              | N             | Y                   | ✅         | N           |
| TC4       | Y            | N              | N             | Y                   | ✅         | N           |
| TC5       | N            | Y              | Y             | Y                   | ✅         | N           |

---

## 5. Format Uji

| Test Case | Input                                             | Ekspektasi               | Status |
|-----------|---------------------------------------------------|---------------------------|--------|
| TC1       | Tanggal, 5000, >0, "Pemasukan"                    | Transaksi disimpan        | ✅     |
| TC2       | Tanggal, 5000, >0, (kosong)                       | Error: Jenis transaksi    | ✅     |
| TC3       | Tanggal, -5000, ≤0, "Pengeluaran"                | Error: Jumlah tidak valid | ✅     |
| TC4       | Tanggal, (kosong), -, "Pengeluaran"              | Error: Jumlah kosong      | ✅     |
| TC5       | (kosong), 5000, >0, "Pemasukan"                  | Error: Tanggal kosong     | ✅     |
