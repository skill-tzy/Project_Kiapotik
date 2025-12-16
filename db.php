<?php
$koneksi = new mysqli("localhost", "root", "", "apotik");

if ($koneksi->connect_error) {
  die("Koneksi gagal: " . $koneksi->connect_error);
}
?>
