<?php
// Informasi koneksi ke database
$host = "localhost"; // Ganti dengan alamat host database Anda
$username = "root"; // Ganti dengan nama pengguna database Anda
$password = ""; // Ganti dengan kata sandi database Anda
$database = "dbhelm"; // Ganti dengan nama database yang digunakan

// Membuat koneksi ke database
$koneksi = new mysqli($host, $username, $password, $database);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi ke database gagal: " . $koneksi->connect_error);
}

// Set karakter pengkodean (opsional)
// mysqli_set_charset($koneksi, "utf8");

// Jika Anda ingin menggunakan koneksi ini dalam berkas PHP lain, Anda dapat mengimpornya dengan pernyataan include:
// include 'koneksi.php';
?>
