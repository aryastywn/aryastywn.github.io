<?php
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id_pesanan = $_GET['id'];

    // Hapus data pesanan berdasarkan ID
    $query = "DELETE FROM tbhelm WHERE id_pesanan = $id_pesanan";

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Pesanan berhasil dihapus.'); window.location.href = 'read.php';</script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

    // Menutup koneksi ke database
    mysqli_close($koneksi);
}
?>