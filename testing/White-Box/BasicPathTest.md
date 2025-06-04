# Test Case Authentication

| Case ID | Jalur yang Diuji       | Input                                      | Expected Output                     | Status |
|---------|------------------------|--------------------------------------------|-------------------------------------|--------|
| TC-01   | POST /register         | Data valid (nama, email, password match)  | Redirect ke /dashboard, user terdaftar | ✅     |
| TC-02   | POST /register         | Data invalid (email salah, password mismatch) | Error validasi, user tidak terdaftar | ✅     |
| TC-03   | POST /login            | Credential valid                          | Redirect ke /dashboard, user login   | ✅     |
| TC-04   | POST /login            | Credential invalid                        | Error message, tetap guest          | ✅     |
| TC-05   | POST /logout           | User authenticated                        | Redirect ke /, user logout          | ✅     |


## Tabel Test Case - Input Barang

| Case ID | Jalur yang Diuji                     | Input                          | Expected Output                                      | Status |
|---------|--------------------------------------|--------------------------------|-----------------------------------------------------|--------|
| TC-01   | GET /barang                          | -                              | Menampilkan view `barang.barang` dengan data        | ✅     |
| TC-02   | GET /create-barang                   | -                              | Menampilkan view `barang.create`                    | ✅     |
| TC-03   | POST /create-barang (data valid)     | `nama_produk`: "Produk Test"<br>`modal`: 10000<br>`harga_jual`: 15000<br>`jumlah`: 10 | Redirect dengan pesan sukses<br>Data tersimpan di database | ✅ |
| TC-04   | POST /create-barang (data invalid)   | `nama_produk`: ""<br>`modal`: -100<br>`harga_jual`: "abc"<br>`jumlah`: null | Redirect dengan error validasi<br>Data tidak tersimpan | ✅ |
| TC-05   | DELETE /barang/{id} (id valid)       | ID barang yang ada             | Redirect ke `/barang` dengan pesan sukses<br>Data ter-soft delete | ✅ |
| TC-06   | DELETE /barang/{id} (id tidak valid) | ID tidak ada (contoh: 9999)     | Error 404 (Not Found)                               | ✅     |

## Tabel Test Case - Input Laporan

| Case ID | Jalur yang Diuji                     | Input                                                                 | Expected Output                                                                 | Status |
|---------|--------------------------------------|-----------------------------------------------------------------------|--------------------------------------------------------------------------------|--------|
| TC-01   | GET /laporan                         | -                                                                     | Menampilkan view `laporan.laporan` dengan data laporan dan barang               | ✅     |
| TC-02   | GET /create-laporan                  | -                                                                     | Menampilkan view `laporan.create` dengan data barang                           | ✅     |
| TC-03   | POST /create-laporan (data valid)    | `barang_id`: valid<br>`jumlah_terjual`: 5                             | Redirect dengan pesan sukses<br>Data laporan tersimpan dengan perhitungan otomatis:<br>- Total: harga_jual × jumlah<br>- Modal: modal × jumlah<br>- Simpanan: 5% dari total<br>- Keuntungan: total - modal - simpanan | ✅ |
| TC-04   | POST /create-laporan (data invalid)  | `barang_id`: tidak ada<br>`jumlah_terjual`: 0                         | Redirect dengan error validasi:<br>- barang_id exists<br>- jumlah_terjual min 1 | ✅     |
| TC-05   | DELETE /laporan/{id} (id valid)      | ID laporan yang ada                                                   | Redirect ke `/laporan` dengan pesan sukses<br>Data ter-soft delete              | ✅     |
| TC-06   | DELETE /laporan/{id} (id tidak valid)| ID tidak ada (contoh: 9999)                                           | Error 404 (Not Found)                                                          | ✅     |
