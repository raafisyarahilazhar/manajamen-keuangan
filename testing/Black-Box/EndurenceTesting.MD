# 🧪 Skenario Endurance Testing

Endurance Testing dilakukan untuk memastikan bahwa aplikasi tetap stabil dan responsif selama penggunaan jangka panjang. Berikut adalah skenario pengujiannya:

## 📋 Tujuan
Menguji kestabilan aplikasi manajemen keuangan dalam kondisi penggunaan terus-menerus selama 24 jam.

## 🧾 Langkah Pengujian

1. **Menjalankan Aplikasi**
   - Jalankan aplikasi selama 24 jam penuh tanpa henti.

2. **Simulasi Aktivitas Pengguna**
   - Tambahkan transaksi pengeluaran secara berkala.
   - Tambahkan transaksi pemasukan setiap beberapa menit.
   - Update saldo secara berkala.
   - Interaksi dilakukan secara otomatis atau manual secara berulang.

3. **Monitoring Performa**
   - Pantau performa aplikasi termasuk waktu loading data dan laporan.
   - Pastikan tidak terjadi penurunan kecepatan respon.

4. **Monitoring Stabilitas**
   - Pastikan aplikasi tidak crash atau freeze selama periode pengujian.
   - Perhatikan apakah ada error atau anomali yang muncul di log sistem.

5. **Monitoring Sumber Daya**
   - Periksa penggunaan CPU dan memori secara berkala.
   - Identifikasi adanya *memory leak* atau peningkatan penggunaan sumber daya yang tidak wajar.

## ✅ Kriteria Keberhasilan

- Aplikasi tetap berjalan stabil tanpa crash.
- Performa tidak menurun secara signifikan setelah penggunaan panjang.
- Tidak ditemukan kebocoran memori (*memory leak*) atau lonjakan sumber daya yang tidak normal.
- Semua fitur tetap dapat digunakan sebagaimana mestinya hingga akhir pengujian.

