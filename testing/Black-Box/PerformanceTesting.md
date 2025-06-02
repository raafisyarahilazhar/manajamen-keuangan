# Performance Testing – Aplikasi Transaksi

---

## Jenis Performance Testing yang Dilakukan

| Jenis           | Tujuan                                                                 |
|------------------|------------------------------------------------------------------------|
| **Load Testing** | Mengukur performa saat banyak pengguna mengakses fitur secara bersamaan. |
| **Stress Testing** | Mengetahui titik maksimal beban sebelum aplikasi crash.               |
| **Soak Testing** | Menguji kestabilan aplikasi selama waktu lama dengan beban konstan.     |
| **Spike Testing** | Menguji respons sistem terhadap lonjakan trafik mendadak.              |

---

## Contoh Skenario Load Testing

**Skenario:**  
*100 pengguna simultan mengakses fitur “Riwayat Transaksi”*

| Parameter          | Nilai                        |
|--------------------|------------------------------|
| Jumlah user virtual| 100 pengguna                 |
| Waktu ramp-up      | 10 pengguna per detik        |
| Durasi tes         | 5 menit                      |
| Endpoint           | `/riwayat-transaksi`         |
| Metode             | `GET`                        |
| Data yang diuji    | Riwayat transaksi per user   |

---

## Contoh Hasil Pengujian

| Metrik                  | Hasil             | Standar Ideal                   |
|--------------------------|------------------|---------------------------------|
| Average response time    | 720 ms           | < 1000 ms                       |
| Peak response time       | 2.100 ms         | < 3000 ms                       |
| Throughput               | 320 transaksi/menit | Semakin tinggi semakin baik    |
| Error rate               | 0.5%             | < 1%                            |
| CPU usage (server)       | 68%              | < 80%                           |
| Memory usage (server)    | 1.1 GB dari 2 GB | < 85% kapasitas RAM             |
