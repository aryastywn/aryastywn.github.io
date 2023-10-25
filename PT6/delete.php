<?php
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
    $id_pesanan = $_GET['id'];

    // Ambil nama file gambar sebelum menghapus data dari database
    $query = "SELECT upload_berkas FROM tbhelm WHERE id_pesanan = $id_pesanan";
    $result = mysqli_query($koneksi, $query);

    if ($result && $row = mysqli_fetch_assoc($result)) {
        $nama_file = $row['upload_berkas'];

        // Hapus file gambar terkait
        $file_path = "berkas/" . $nama_file;
        if (file_exists($file_path)) {
            unlink($file_path);
        } else {
            echo "File tidak ditemukan: $nama_file";
        }

        // Setelah menghapus file gambar, hapus data dari database
        $delete_query = "DELETE FROM tbhelm WHERE id_pesanan = $id_pesanan";

        if (mysqli_query($koneksi, $delete_query)) {
            echo "<script>alert('Pesanan dan file gambar berhasil dihapus.'); window.location.href = 'read.php';</script>";
        } else {
            echo "Error: " . $delete_query . "<br>" . mysqli_error($koneksi);
        }
    } else {
        echo "Data tidak ditemukan.";
    }

    // Menutup koneksi ke database
    mysqli_close($koneksi);
}
?>
