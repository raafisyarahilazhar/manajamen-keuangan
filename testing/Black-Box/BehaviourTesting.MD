
```vbnet
Fitur: Mencatat pengeluaran

  Skenario: Pengguna berhasil menambahkan pengeluaran
    Given pengguna sudah login dan berada di halaman dashboard
    When pengguna mengisi form pengeluaran dengan jumlah Rp 100.000 dan kategori “Makanan”
    And menekan tombol “Simpan”
    Then transaksi muncul di daftar transaksi
    And saldo berkurang sebesar Rp 100.000

    Fitur: Validasi input transaksi

  Skenario: Pengguna mencoba menyimpan transaksi tanpa mengisi jumlah uang
    Given pengguna berada di halaman tambah transaksi
    When pengguna klik tombol “Simpan” tanpa mengisi jumlah
    Then sistem menampilkan pesan error “Jumlah harus diisi”

Fitur: Autentikasi pengguna

  Skenario: Login gagal karena password salah
    Given pengguna berada di halaman login
    When pengguna memasukkan email valid dan password yang salah
    Then sistem menampilkan pesan “Password salah”
