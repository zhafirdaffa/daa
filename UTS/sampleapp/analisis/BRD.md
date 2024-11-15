# Dokumen Persyaratan Bisnis (BRD)

**Proyek**: Aplikasi Manajemen Menu Restoran Mie Gacoan  
**Versi**: 2.0  
**Tanggal**: 14 November 2024

---

## 1. Tujuan Proyek

### Objektif
Aplikasi ini dirancang untuk memudahkan manajemen restoran Mie Gacoan dalam mengelola menu, mencatat pesanan dari pembeli, serta memproses pembayaran dengan efisien. Aplikasi ini bertujuan untuk mendukung pengelolaan penjualan dan meningkatkan pelayanan pelanggan.

### Latar Belakang
Dengan meningkatnya popularitas restoran Mie Gacoan, terutama di kalangan pencinta makanan cepat saji yang lezat, penting bagi restoran untuk memiliki sistem manajemen yang efisien untuk mengelola menu, pesanan, dan transaksi pelanggan. Sistem ini memungkinkan pengelola restoran untuk dengan mudah memperbarui menu, mencatat pesanan, serta memproses pembayaran.

---

## 2. Fitur Utama

### Untuk Pengelola (Admin/Pengguna Utama)

#### Pengelolaan Menu
- Menambah, mengubah, atau menghapus item menu dengan informasi seperti:
  - Nama makanan/minuman
  - Harga
  - Stok bahan makanan
  - Deskripsi produk
- Data menu disimpan dan dapat diperbarui melalui aplikasi dengan akses internet atau secara lokal untuk pemrosesan data sementara.

#### Pencatatan Pesanan
- Pengelola dapat mencatat pesanan yang dilakukan oleh pelanggan.
- Informasi yang dicatat meliputi:
  - Nama makanan/minuman yang dipesan
  - Jumlah pesanan
  - Total harga pesanan

#### Proses Pembayaran
- Setelah pesanan dicatat, pengelola dapat memproses pembayaran menggunakan metode:
  - Tunai
  - Kartu Debit/Kredit
  - E-wallet
- Semua transaksi disimpan secara lokal dan dapat disinkronkan dengan sistem pusat saat perangkat terhubung dengan internet.

### Untuk Pelanggan

#### Melihat Menu
- Pelanggan dapat melihat daftar menu yang tersedia, termasuk:
  - Nama makanan/minuman
  - Harga
  - Deskripsi singkat
  - Ketersediaan stok bahan

#### Memesan Makanan
- Pelanggan dapat memilih makanan atau minuman dari daftar menu dan membuat pesanan langsung ke pengelola.
- Setelah pesanan dibuat, pelanggan akan menunggu konfirmasi dari pengelola restoran.

---

## 3. Persyaratan Fungsional

### Sistem Login
- **Akses Berdasarkan Peran**:
  - **Pengelola (Admin)**: Dapat mengelola menu, mencatat pesanan, memproses pembayaran.
  - **Pelanggan**: Memerlukan akun untuk melihat menu dan memesan makanan, berinteraksi langsung dengan pengelola untuk pesanan dan pembayaran.

### Pengaturan & Tampilan Menu dan Pesanan
- **Pengelola**:
  - Dapat mengatur menu restoran, mencatat pesanan pelanggan dengan cepat, dan memproses pembayaran.
- **Pelanggan**:
  - Dapat melihat menu yang tersedia, memilih makanan, dan melakukan pemesanan.

---

## 4. Persyaratan Non-Fungsional

### Kegunaan
- Antarmuka aplikasi harus sederhana dan intuitif, memudahkan pengelola dalam mencatat pesanan dan pembayaran dengan cepat.
- Pelanggan dapat melihat menu dan memesan dengan mudah melalui aplikasi.

### Keamanan
- Pengelola memiliki akses penuh untuk mengelola menu dan pesanan.
- Semua data transaksi dan informasi pelanggan dilindungi dengan enkripsi untuk menjaga kerahasiaan.

### Kinerja
- Aplikasi harus dapat memproses pesanan dan pembayaran dengan cepat, terutama pada jam-jam sibuk atau saat antrean panjang.

---

## 5. Model, Migrasi, Resource, dan Data Awal yang Dibutuhkan

### Model Data

#### Menu
- Menyimpan informasi menu yang terdiri dari berbagai makanan dan minuman yang disediakan oleh restoran Mie Gacoan.
- Setiap item menu harus memiliki informasi harga, bahan, stok, dan deskripsi.

#### Pesanan
- Menyimpan data pesanan yang dibuat oleh pelanggan, termasuk makanan yang dipesan, jumlah yang dipesan, dan total harga.

#### Transaksi
- Menyimpan data transaksi, termasuk metode pembayaran yang digunakan oleh pelanggan dan waktu transaksi.

### Struktur Tabel

#### Tabel Menu (Menu Table)
| Kolom          | Tipe Data       | Keterangan                                      |
|----------------|-----------------|-------------------------------------------------|
| id             | bigint UNSIGNED  | Primary Key                                     |
| name           | varchar(255)     | Nama makanan/minuman                           |
| price          | decimal(10,2)    | Harga makanan/minuman                          |
| stock          | int(11)          | Jumlah stok bahan yang tersedia                |
| description    | text            | Deskripsi makanan/minuman                      |
| created_at     | timestamp        | Waktu pembuatan data                           |
| updated_at     | timestamp        | Waktu pembaruan data                           |

#### Tabel Pesanan (Orders Table)
| Kolom          | Tipe Data       | Keterangan                                      |
|----------------|-----------------|-------------------------------------------------|
| id             | bigint UNSIGNED  | Primary Key                                     |
| product_id     | bigint UNSIGNED  | ID menu yang dipesan                           |
| quantity       | int(11)          | Jumlah makanan/minuman yang dipesan            |
| total_price    | decimal(10,2)    | Total harga pesanan                            |
| order_date     | timestamp        | Waktu pesanan dibuat                           |
| created_at     | timestamp        | Waktu pembuatan data                           |
| updated_at     | timestamp        | Waktu pembaruan data                           |

#### Tabel Transaksi (Transactions Table)
| Kolom          | Tipe Data       | Keterangan                                      |
|----------------|-----------------|-------------------------------------------------|
| id             | bigint UNSIGNED  | Primary Key                                     |
| order_id       | bigint UNSIGNED  | ID pesanan                                     |
| payment_method | enum('cash', 'debit', 'e-wallet') | Metode pembayaran               |
| transaction_date | timestamp      | Waktu transaksi                                |
| created_at     | timestamp        | Waktu pembuatan data                           |
| updated_at     | timestamp        | Waktu pembaruan data                           |

---

Dokumen ini memberikan gambaran yang jelas dan terperinci tentang kebutuhan fungsional, non-fungsional, serta struktur data yang diperlukan untuk mengembangkan aplikasi manajemen menu restoran Mie Gacoan. Sistem ini diharapkan dapat membantu pengelola restoran dalam mengelola menu dan pesanan dengan lebih efisien, serta memberikan pengalaman yang lebih baik bagi pelanggan dalam melakukan pemesanan.
