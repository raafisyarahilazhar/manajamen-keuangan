# Perbandingan Versi A dan Versi B

## 1. Input Transaksi: Pengeluaran

| No | Input Data                        | Output Versi A (Lama)       | Output Versi B (Baru)       | Perbandingan | Status     |
|----|----------------------------------|------------------------------|------------------------------|---------------|------------|
| 1  | Rp 50.000, kategori "Makanan"    | Saldo: Rp 950.000            | Saldo: Rp 950.000            | Sama          | ✅ Pass     |
| 2  | Rp 0, kategori "Transportasi"    | Error ditampilkan            | Error ditampilkan            | Sama          | ✅ Pass     |
| 3  | Rp -10.000, kategori "Belanja"   | Tidak ditangani              | Error: input invalid         | Berbeda       | ⚠️ Review  |

---

## 2. Laporan Bulanan

| No | Bulan     | Versi A Total (Rp) | Versi B Total (Rp) | Perbandingan    | Status     |
|----|-----------|---------------------|---------------------|------------------|------------|
| 1  | Januari   | Rp 2.300.000        | Rp 2.300.000        | Sama             | ✅ Pass     |
| 2  | Februari  | Rp 1.500.000        | Rp 1.499.999        | Sedikit beda     | ⚠️ Review  |
| 3  | Maret     | Rp 0                | Rp 0                | Sama             | ✅ Pass     |

---

## 3. Kecepatan Generate Laporan

| No | Jumlah Data Transaksi | Waktu Versi A | Waktu Versi B | Lebih Baik | Status     |
|----|------------------------|----------------|----------------|-------------|------------|
| 1  | 100 transaksi          | 2.5 detik       | 1.1 detik       | Versi B     | ✅ Pass     |
| 2  | 1000 transaksi         | 9 detik         | 3.8 detik       | Versi B     | ✅ Pass     |

---

## 4. Validasi Input Form

| No | Skenario                         | Versi A                    | Versi B                            | Perbandingan | Status    |
|----|----------------------------------|-----------------------------|------------------------------------|---------------|-----------|
| 1  | Input kosong                     | Error: field kosong         | Error: field kosong                | Sama          | ✅         |
| 2  | Input karakter spesial di angka  | Tidak ditolak               | Ditolak dengan pesan               | Berbeda       | ⚠️        |
