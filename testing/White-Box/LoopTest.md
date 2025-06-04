## Test Case Loop Testing untuk Tampilan Laporan

| Case ID   | Scenario                     | Jumlah Data | Expected Result                                  | Status |
|-----------|------------------------------|-------------|--------------------------------------------------|--------|
| TC-LP-01  | Tampilan tanpa barang        | 0           | Menampilkan pesan "Tidak ada data" atau tabel kosong | ✅     |
| TC-LP-02  | Tampilan dengan 1 barang     | 1           | Menampilkan 1 baris data dengan format benar     | ✅     |
| TC-LP-03  | Tampilan dengan 5 barang     | 5           | Menampilkan 5 baris data dengan format konsisten | ✅     |
| TC-LP-04  | Format angka harga           | N/A         | Harga ditampilkan dengan format `Rp1.000.000`    | ✅     |

# Test Case Loop Testing untuk Tampilan Laporan

| Case ID   | Scenario                     | Jumlah Data | Expected Result                                  | Status |
|-----------|------------------------------|-------------|--------------------------------------------------|--------|
| TC-LR-01  | Tampilan tanpa laporan       | 0           | Menampilkan pesan "Tidak ada data" atau tabel kosong | ✅     |
| TC-LR-02  | Tampilan dengan 1 laporan    | 1           | Menampilkan 1 baris data dengan relasi barang    | ✅     |
| TC-LR-03  | Tampilan dengan 5 laporan    | 5           | Menampilkan 5 baris data lengkap                 | ✅     |
| TC-LR-04  | Format angka keuangan        | N/A         | Semua nilai uang dalam format `Rp1.000.000`      | ✅     |
| TC-LR-05  | Barang terkait dihapus       | 1           | Menampilkan "Barang tidak ditemukan"             | ✅     |

# Test Case untuk Form Create Laporan

| Case ID | Scenario | Input | Expected Result | Status |
|---------|----------|-------|-----------------|--------|
| TC-FR-01 | Form render | - | Menampilkan semua field dengan benar | ✅ |
| TC-FR-02 | Submit valid | barang_id: valid, jumlah_terjual: 5 | Redirect dengan pesan sukses | ✅ |
| TC-FR-03 | Submit invalid | barang_id: kosong, jumlah_terjual: 0 | Menampilkan error validation | ✅ |
| TC-FR-04 | Options barang | - | Menampilkan semua barang dalam dropdown | ✅ |
| TC-FR-05 | Reset form | Isi form lalu reset | Form kembali ke state awal | ✅ |
