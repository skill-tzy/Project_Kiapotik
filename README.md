# Website Apotik Online

PROYEK APLIKASI PENJUALAN OBAT APOTIK BERBASIS WEBSITE<br>
Download [PDF laporan Project](https://github.com/user-attachments/files/24179655/MUHAMMAD.ADZKIA_UTSWEB.docx)<br>

<div align="center">
  <img src="https://github.com/user-attachments/assets/ae7ec5f0-546a-4ed4-9ef8-927331a9d75b" width="350">
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
  <img src="https://github.com/user-attachments/assets/3fc2b72e-286a-4718-a6e0-30aeac60d511" width="250">
</div>

## 🚀 C. HASIL

### 1. Halaman Beranda ( Home )
<p align="justify">
Berikut Halaman beranda.html<br>
</p>

<div align="center">
  <img src="https://github.com/user-attachments/assets/58b9a248-5d48-4330-b19a-bbe66b7ce73f" width="750">
</div>
<div align="center">
  <img src="https://github.com/user-attachments/assets/245ad50a-a827-417c-8ca5-e3303aa4d51b" width="750">
</div>
<div align="center">
  <img src="https://github.com/user-attachments/assets/35bd0adf-f645-45db-8098-5fa5d308fe49" width="750">
</div>
<div align="center">
  <img src="https://github.com/user-attachments/assets/9a711032-b64d-41e0-a629-8f28ea7d61a6" width="750">
</div>

### 2. Profil Sekolah / Lembaga
<p align="justify">
Dari Beranda kalian bisa klik Profil Sekolah pada menu navbar yang disediakan.<br>
</p>

<div align="center">
  <img src="https://github.com/user-attachments/assets/9d3d8571-1040-452f-a380-e679434059c9" width="750">
</div>

<p align="justify">
Berikut halaman profil.html :<br>
</p>

<div align="center">
  <img src="https://github.com/user-attachments/assets/dde496ea-9228-424f-a9f0-eab092e413ff" width="750">
</div>
<div align="center">
  <img src="https://github.com/user-attachments/assets/6c9806bc-ca00-453c-83ab-72d0ad222954" width="750">
</div>
<div align="center">
  <img src="https://github.com/user-attachments/assets/06a91f22-6828-49fc-84d7-8e4636f45c28" width="750">
</div>
<div align="center">
  <img src="https://github.com/user-attachments/assets/260a25ad-76ae-45ff-81ee-d7af9ef26117" width="750">
</div>

### 3. Informasi Pendaftaran
<p align="justify">
Dari Beranda kalian bisa klik beberapa yang sudah disediakan.<br>
</p>

<div align="center">
  <img src="https://github.com/user-attachments/assets/9b2cf0d8-5efc-4f2a-a67f-8f28b29835c1" width="750">
</div>

<p align="justify">
Berikut halaman informasi_pendaftaran.html<br>
</p>

<div align="center">
  <img src="https://github.com/user-attachments/assets/bd61ba71-a4b1-4d85-a9cd-733679d806c0" width="750">
</div>
<div align="center">
  <img src="https://github.com/user-attachments/assets/5e4acd78-2c23-4e6f-9f9b-9a575ffe175b" width="750">
</div>
<div align="center">
  <img src="https://github.com/user-attachments/assets/a5ef438e-3f33-4714-963c-317e9fe8316d" width="750">
</div>
<div align="center">
  <img src="https://github.com/user-attachments/assets/51e527aa-6103-48f6-a177-e178e91c4233" width="750">
</div>

### 4. Formulir Pendaftaran Online
<p align="justify">
Dari Beranda kalian bisa klik Formulir online pada menu navbar yang disediakan.<br>
</p>

<div align="center">
  <img src="https://github.com/user-attachments/assets/b105b8ae-6048-4afd-acdd-e09ebe103564" width="750">
</div>

<p align="justify">
Berikut halaman formulir_pendaftaran.html<br>
</p>

<div align="center">
  <img src="https://github.com/user-attachments/assets/60c5ee94-c55e-4ab1-a9c1-aa41f45c75ce" width="750">
</div>
<div align="center">
  <img src="https://github.com/user-attachments/assets/d0ccf2aa-94b1-43b2-ac7b-d9fa557005da" width="750">
</div>
<div align="center">
  <img src="https://github.com/user-attachments/assets/9ccf75c7-26a5-46cd-9a56-c8a0734a9b5c" width="750">
</div>

### 5. Halaman Pendaftaran Peserta
<p align="justify">
Ketika sudah mengisi lengkap form formulir_pendaftaran.html lalu klik kirim, nantinya akan diredirect ke halaman_pendaftaran.html<br>
</p>

<div align="center">
  <img src="https://github.com/user-attachments/assets/d4fa43ea-ac30-4583-8d19-3b1b3461d7a8" width="750">
</div>

<p align="justify">
Berikut halaman halaman_pendaftaran.html<br>
</p>

<div align="center">
  <img src="https://github.com/user-attachments/assets/1cc055e2-1196-4c21-874b-21a9aa6d0fa4" width="750">
</div>
<div align="center">
  <img src="https://github.com/user-attachments/assets/69b8f930-ec81-4b7c-8e4c-d66fe86f5610" width="750">
</div>

<p align="justify">
Ketika klik cetak maka akan diarahkan untuk print<br>
</p>

<div align="center">
  <img src="https://github.com/user-attachments/assets/6766093f-1ae4-4040-ac57-6449e333ec09" width="750">
</div>

### 6. Kontak & Lokasi
<p align="justify">
Untuk Kontak dan lokasi sudah tersedia di bagian footer setiap halaman<br>
</p>

<div align="center">
  <img src="https://github.com/user-attachments/assets/0247f03e-1c3a-4b60-8e6e-daf48b66105f" width="750">
</div>

<p align="justify">
Dan juga dari Beranda kalian bisa klik Kontak pada menu navbar yang disediakan.<br>
</p>

<div align="center">
  <img src="https://github.com/user-attachments/assets/76574818-7ff7-4a69-ba1d-deb95bd69054" width="750">
</div>

<p align="justify">
Berikut halaman kontak.html<br>
</p>

<div align="center">
  <img src="https://github.com/user-attachments/assets/005dce5c-3e9c-4255-b353-bf68cf0fe855" width="750">
</div>
<div align="center">
  <img src="https://github.com/user-attachments/assets/a6cdf784-5eca-47ad-b4d3-d325e1cf4650" width="750">
</div>

### 7. Berita & Pengumuman
<p align="justify">
Untuk Update informasi terkini, berada di halaman beranda<br>
</p>

<div align="center">
  <img src="https://github.com/user-attachments/assets/5ced07e7-efab-477e-9c7b-5a6ae6ea9a32" width="750">
</div>

<p align="justify">
Dan untuk Pengumuman hasil yg diterima melalui Beranda kalian bisa klik Pengumuman pada menu navbar yang disediakan.<br>
</p>

<div align="center">
  <img src="https://github.com/user-attachments/assets/292bc8e4-9fb3-4095-8c48-1630cf47ce89" width="750">
</div>

<p align="justify">
Berikut halaman pengumuman_pendaftaran.html<br>
</p>

<div align="center">
  <img src="https://github.com/user-attachments/assets/e22323b1-9989-4b0e-98f1-69a7508f2844" width="750">
</div>
<div align="center">
  <img src="https://github.com/user-attachments/assets/939ccecf-04bc-40ed-a59a-67d75712c31b" width="750">
</div>

### 8. Galeri / Foto Kegiatan
<p align="justify">
Dari Beranda kalian bisa klik Kegiatan Siswa pada menu navbar yang disediakan.<br>
</p>

<div align="center">
  <img src="https://github.com/user-attachments/assets/9e15fc9b-ab3f-41f8-a5a9-cd606e783314" width="750">
</div>

<p align="justify">
Berikut halaman kegiatan.html<br>
</p>

<div align="center">
  <img src="https://github.com/user-attachments/assets/20103cab-25c7-45f3-8a50-dfde008aa807" width="750">
</div>
<div align="center">
  <img src="https://github.com/user-attachments/assets/75f960ec-fb32-4e56-a13d-8b66ba11d47d" width="750">
</div>
