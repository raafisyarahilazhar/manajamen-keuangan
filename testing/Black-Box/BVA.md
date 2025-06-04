

## Tabel Boundary Value Analysis

### 1. Modul Barang
| Field       | Batas Bawah | Batas Atas   | Test Case Valid      | Test Case Invalid | Status |
|-------------|-------------|--------------|----------------------|-------------------|--------|
| `jumlah`    | 0           | INT_MAX      | 0, 1, 1000           | -1                | ✅     |
| `modal`     | 0           | -            | 0, 10000             | -1                | ✅     |
| `harga_jual`| 0           | -            | 0, 15000             | -1                | ✅     |


### 2. Modul Laporan
| Field            | Batas Bawah | Batas Atas | Test Case Valid | Test Case Invalid | Status |
|------------------|-------------|------------|-----------------|-------------------|--------|
| `jumlah_terjual` | 1           | -          | 1, 5, 1000      | 0                 | ✅     |
| `total_harga`    | 0           | -          | 0, 75000        | -1                | ✅     |
| `keuntungan`     | -           | -          | -5000, 0, 5000  | -                 | ✅     |

### 3. Modul Authentication
| Field      | Batas Bawah | Batas Atas | Test Case Valid          | Test Case Invalid       | Status |
|------------|-------------|------------|--------------------------|-------------------------|--------|
| `password` | 8 chars     | -          | '12345678' (8 chars)     | '1234567' (7 chars)     | ✅     |
| `email`    | -           | 255 chars  | 'a@a.a', 254chars@t.com  | 256chars@test.com       | ✅     |

