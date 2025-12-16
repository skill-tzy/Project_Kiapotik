# Website Apotik Online

PROYEK APLIKASI PENJUALAN OBAT APOTIK BERBASIS WEBSITE<br>
Download [PDF laporan Project](https://github.com/user-attachments/files/24179655/MUHAMMAD.ADZKIA_UTSWEB.docx)<br>

<div align="center">
  <img src="https://github.com/user-attachments/assets/ae7ec5f0-546a-4ed4-9ef8-927331a9d75b">
</div>

## KATA PENGANTAR
<p align="justify">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Puji syukur penulis panjatkan ke hadirat Tuhan Yang Maha Esa karena atas rahmat dan karunia-Nya, penulis dapat menyelesaikan laporan ini dengan baik. Laporan ini disusun sebagai dokumentasi dari pembuatan aplikasi penjualan obat berbasis web dengan nama KiApotik, yang terdiri dari halaman Beranda, Katalog, Tentang, dan Kontak.<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aplikasi ini diharapkan dapat mempermudah pengelolaan penjualan obat secara digital dan memberikan kemudahan kepada pelanggan dalam mengakses informasi serta melakukan pemesanan.<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Penulis menyadari bahwa laporan ini masih jauh dari sempurna. Oleh karena itu, saran dan kritik yang membangun sangat diharapkan demi penyempurnaan laporan ini di masa mendatang<br>
</p>

## DAFTAR ISI
- [Kata Pengantar](#kata-pengantar)
- [Daftar Isi](#daftar-isi)
- [Bab 1 - Pendahuluan](#bab-i--pendahuluan)
- [1.1 Latar Belakang](#11-latar-belakang)
- [1.2 Perumusan Masalah](#12-perumusan-masalah)
- [1.3 Tujuan Penelitian](#13-tujuan-penelitian)
- [Bab 2 - Landasan Teori](#bab-ii--landasan-teori)
- [2.1 HTML](#21-html)
- [2.2 PHP](#22-php)
- [2.3 MySQL](#23-mysql)
- [Bab 3 - Pembahasan](#bab-iii--pembahasan)
- [3.1 Tampilan Beranda](#31-tampilan-beranda)
- [3.2 Tampilan Navigasi](#32-tampilan-navigasi)
- [3.3 Tampilan Menu](#33-tampilan-menu)
- [3.4 Tampilan Data Informasi](#34-tampilan-data-informasi)
- [3.5 Script CSS dan JavaScript](#35-script-css-dan-javascript)
- [Bab 4 - Penutup](#bab-iv--penutup)

## BAB I – PENDAHULUAN
### 1.1 Latar Belakang
<p align="justify">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Perkembangan teknologi informasi telah membawa perubahan signifikan dalam berbagai bidang kehidupan, termasuk di sektor kesehatan. Salah satu bentuk implementasinya adalah pemanfaatan aplikasi berbasis web dalam kegiatan operasional apotik. Sistem penjualan berbasis web memungkinkan pengguna untuk mengakses informasi obat dan melakukan transaksi secara daring tanpa harus datang langsung ke lokasi apotik. Hal ini tidak hanya meningkatkan efisiensi pelayanan, tetapi juga mempermudah pengelolaan data penjualan dan stok obat secara real-time.<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Melihat kebutuhan tersebut, penulis merancang sebuah aplikasi penjualan obat berbasis web bernama kiApotik. Aplikasi ini ditujukan untuk memberikan kemudahan baik bagi pelanggan dalam melakukan pemesanan obat, maupun bagi pengelola apotik dalam menyajikan informasi produk. Aplikasi ini terdiri dari empat halaman utama, yaitu Beranda, Katalog, Tentang, dan Kontak, yang dirancang secara sederhana namun fungsional untuk memenuhi kebutuhan dasar sistem informasi apotik.<br>
</p>

### 1.2 Perumusan Masalah
<p align="justify">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Berdasarkan latar belakang yang telah diuraikan, maka dirumuskan beberapa permasalahan yang menjadi dasar pembuatan aplikasi ini, antara lain:
Bagaimana merancang dan membangun aplikasi penjualan obat berbasis web yang dapat menampilkan produk obat secara dinamis dari database? Bagaimana merancang form pemesanan yang sederhana namun tetap mampu mencetak struk sebagai bukti transaksi? Serta, bagaimana menyajikan informasi apotik yang lengkap kepada pengguna tanpa memerlukan sistem login agar tetap praktis dan mudah diakses?<br>
</p>

### 1.3 Tujuan Penelitian
<p align="justify">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tujuan dari pembuatan aplikasi kiApotik ini adalah untuk merancang dan mengembangkan sebuah sistem penjualan obat berbasis web yang sederhana dan interaktif. Aplikasi ini bertujuan untuk menampilkan katalog obat secara dinamis, menyediakan fitur keranjang belanja beserta form pemesanan yang memungkinkan pencetakan struk, serta menyajikan informasi lengkap tentang apotik tanpa memerlukan autentikasi pengguna. Dengan demikian, aplikasi ini diharapkan dapat menjadi solusi praktis bagi apotik skala kecil maupun menengah dalam melakukan digitalisasi layanan mereka.<br>
</p>

## BAB II – LANDASAN TEORI
### 2.1 HTML
<p align="justify">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;HTML, yang merupakan singkatan dari HyperText Markup Language, adalah bahasa markup standar yang digunakan untuk membangun dan menyusun struktur dasar dari halaman web. HTML bukanlah bahasa pemrograman, melainkan sebuah bahasa markah yang memungkinkan pengembang web untuk menyusun berbagai elemen tampilan seperti teks, gambar, tautan (link), form input, tombol, serta bagian tata letak seperti header, main content, dan footer. HTML bekerja di sisi klien (client-side), artinya kode HTML langsung diterjemahkan oleh browser pengguna untuk menampilkan tampilan yang diinginkan. Dalam pembuatan aplikasi kiApotik, HTML berfungsi sebagai kerangka utama halaman, seperti membentuk navigasi menu, daftar produk di halaman katalog, dan form input pada bagian pemesanan. Struktur HTML yang baik juga mendukung pengembangan desain responsif dan kemudahan pemeliharaan aplikasi.<br>
</p>

### 2.2 PHP
<p align="justify">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PHP, kepanjangan dari PHP: Hypertext Preprocessor, adalah bahasa pemrograman sisi server (server-side programming language) yang dirancang khusus untuk pengembangan web dinamis. Berbeda dengan HTML yang hanya menampilkan tampilan statis, PHP digunakan untuk memproses logika bisnis di belakang layar, seperti mengelola input pengguna, mengakses database, memanipulasi data, hingga menampilkan halaman web secara dinamis berdasarkan permintaan. PHP dapat disisipkan langsung ke dalam HTML, yang membuat pengembangan aplikasi web menjadi lebih fleksibel. Dalam aplikasi kiApotik, PHP berperan penting untuk menampilkan data produk dari database MySQL ke dalam halaman katalog, mengatur proses penambahan produk ke keranjang, menghitung total harga secara otomatis, dan mengatur tombol cetak struk pembelian. Dengan adanya PHP, interaksi pengguna menjadi lebih dinamis tanpa perlu memuat ulang seluruh halaman.<br>
</p>

### 2.3 MySQL
<p align="justify">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MySQL adalah sistem manajemen basis data relasional yang populer dan bersifat open-source. Nama MySQL sendiri berasal dari gabungan nama “My” (nama anak dari salah satu pengembang) dan SQL, yang merupakan singkatan dari Structured Query Language. SQL adalah bahasa standar yang digunakan untuk mengelola dan memanipulasi data dalam basis data relasional. MySQL digunakan untuk menyimpan berbagai data penting dalam aplikasi kiApotik, seperti daftar produk obat, nama, harga, dan nama file gambar produk. Dengan MySQL, data dapat diakses secara efisien menggunakan perintah query SQL seperti SELECT, INSERT, UPDATE, dan DELETE. Pada aplikasi ini, ketika halaman katalog diakses, PHP menjalankan perintah SELECT untuk menampilkan seluruh produk dari tabel database. Dengan demikian, pengelolaan data menjadi lebih mudah, terstruktur, dan terpusat.<br>
</p>

<!-- <div align="center">
  <img src="https://user-images.githubusercontent.com/95717485/225231893-e59de44d-0d3e-4e79-971b-a4d494565a74.png" alt="Dicoding AWS">
</div> -->

## BAB III – PEMBAHASAN
### 3.1 Tampilan Beranda
<p align="justify">
Halaman Beranda berfungsi sebagai tampilan awal website kiApotik. Gambar 1, 2, dan 3 adalah tampilan beranda.<br>
</p>

<div align="center">
  <img src="https://github.com/user-attachments/assets/b50e0211-e661-4a23-8d04-f78864fd596d" width="750" alt="Gambar 1. Tampilan beranda">
</div>
<div align="center">
  <img src="https://github.com/user-attachments/assets/2d558e3f-d252-4718-b9c8-7fe8f5eef2dc" width="750" alt="Gambar 2. Tampilan beranda">
</div>
<div align="center">
  <img src="https://github.com/user-attachments/assets/1a823761-b50d-4cde-b4f3-a7a367ca4bc3" width="750" alt="Gambar 3. Tampilan beranda">
</div>

### 3.2 Tampilan Navigasi
<p align="justify">
Navigasi digunakan untuk mengakses halaman-halaman utama. Terdiri dari menu: Tentang, Katalog, Kontak, dan Pesan Obat. Gambar 4 merupakan navigasi yang akan mengarahkan ke halaman lain.<br>
</p>

<div align="center">
  <img src="https://github.com/user-attachments/assets/a76d0d1a-e4dd-42a6-9aaf-ab59f60a4120" width="750" alt="Gambar 5. Tampilan Navigasi">
</div>

### 3.3 Tampilan Menu
<p align="justify">
a. Tampilan Katalog Produk<br>
Menampilkan semua data obat yang diambil dari database. Setiap produk disertai gambar, nama obat, harga, dan Ketika diklik akan tertambah ke keranjang. Tampilan katalog produk bisa dilihat diGambar 6.<br>
</p>

<div align="center">
  <img src="https://github.com/user-attachments/assets/16ba25d4-08de-4069-8a7c-a992a6fcbab6" width="750" alt="Gambar 6. Tampilan katalog produk">
</div>

<p align="justify">
b. Tampilan Keranjang & Form Pembeli<br>
Setelah memilih produk, keranjang akan menampilkan nama produk, jumlah, total harga, dan form pembeli (nama, alamat). Tombol "Beli" akan mencetak struk menggunakan window.print(). Gambar 7 merupakan tampilan keranjang, form pembeli, dan cetak struk.<br>
</p>

<div align="center">
  <img src="https://github.com/user-attachments/assets/90e97de2-7b27-4903-8fc0-305dab2daa9b" width="750">
</div>
<div align="center">
  <img src="https://github.com/user-attachments/assets/5651a74b-5731-49fc-a503-7c164464ff1e" width="750" alt="Gambar 7. Tampilan keranjang, form pembeli, dan cetak struk">
</div>

<p align="justify">
c. Tampilan Halaman Kontak<br>
Menampilkan informasi kontak yang dapat dihubungi oleh pengguna. Gambar 9 merupakan tampilan kontak.<br>
</p>

<div align="center">
  <img src="https://github.com/user-attachments/assets/40863416-ea69-40fc-bdbf-f29ba9ef5ea5" width="750" alt="Gambar 9. Tampilan kontak">
</div>

### 3.4 Tampilan Data Informasi
<p align="justify">
Menampilkan informasi tentang profil apotik. Gambar 11 merupakan tampilan tentang.<br>
</p>

<div align="center">
  <img src="https://github.com/user-attachments/assets/f42fb5ec-9487-4f58-98ce-4ce474f4a0ca" width="750" alt="Gambar 11. Tampilan tentang">
</div>

### 3.5 Script CSS dan JavaScript
<p align="justify">
Selain HTML dan PHP, aplikasi kiApotik juga menggunakan kode CSS dan JavaScript untuk mendukung tampilan dan fungsi interaktif.<br>
</p>

## BAB IV – PENUTUP
<p align="justify">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Aplikasi kiApotik telah berhasil dibangun sebagai aplikasi penjualan obat berbasis web yang dilengkapi dengan fitur utama seperti katalog produk obat, form keranjang belanja, informasi apotik, serta tampilan antarmuka yang sederhana dan mudah digunakan. Aplikasi ini dirancang agar dapat berfungsi secara lokal tanpa memerlukan koneksi internet, karena seluruh data produk ditampilkan secara langsung dari sumber lokal. Selain itu, sistem ini tidak memerlukan proses autentikasi maupun penyimpanan data transaksi ke dalam database, sehingga cocok digunakan untuk kebutuhan dasar penjualan secara praktis dan cepat.<br>
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Meskipun aplikasi kiApotik telah berjalan sesuai dengan tujuan awal, pengembangan lebih lanjut tetap disarankan agar sistem menjadi lebih lengkap dan profesional. Beberapa fitur tambahan yang dapat dipertimbangkan di antaranya adalah sistem login untuk pengguna, pencatatan riwayat pembelian, penyimpanan data transaksi ke dalam database, serta integrasi pembayaran digital dan sistem notifikasi otomatis. Penambahan fitur-fitur tersebut diharapkan dapat meningkatkan kenyamanan pengguna dan memperluas fungsionalitas aplikasi di masa mendatang.<br>
</p>
