<!DOCTYPE html>
<html lang="en">

<head>
    <title>Tambah Pesanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            background: linear-gradient(rgba(239, 149, 149, 0.5), rgba(239, 149, 149, 0.5)), url(nikung.jpeg) no-repeat center center fixed;
            background-size: cover;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 24px;
            color: #333;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input[type="text"],
        input[type="number"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        select[name="ukuran_helm"] {
            width: 103%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        select[name="metode_pembayaran"] {
            width: 103%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #EF9595;
            color: black;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 10px;
        }

        input[type="submit"]:hover {
            background-color: black;
            color: #EF9595;
        }

        .button {
            background-color: #EF9595;
            color: black;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
        }

        .button:hover {
            background-color: black;
            color: #EF9595;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Tambah Pesanan</h2>
        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
            <label for="nama_pemesan">Nama Pemesan:</label>
            <input type="text" name="nama_pemesan" required>

            <label for="no_hp">No Hp:</label>
            <input type="text" name="no_hp" required>

            <label for="alamat_pemesan">Alamat:</label>
            <textarea name="alamat_pemesan" required></textarea>

            <label for="nama_helm">Nama Helm:</label>
            <input type="text" name="nama_helm" required>

            <label for="ukuran_helm">Ukuran Helm:</label>
            <select name="ukuran_helm" required>
                <option value="S">S</option>
                <option value="M">M</option>
                <option value="L">L</option>
                <option value="XL">XL</option>
                <option value="XS">XS</option>
            </select>

            <label for="jumlah_helm">Jumlah Helm:</label>
            <input type="number" name="jumlah_helm" required>

            <label for="tanggal_pemesanan">Tanggal Pemesanan:</label>
            <input type="date" name="tanggal_pemesanan" required>

            <label for="metode_pembayaran">Metode Pembayaran:</label>
            <select name="metode_pembayaran" required>
                <option value="COD">COD</option>
                <option value="QRIS">QRIS</option>
                <option value="PAYLATER">PAYLATER</option>
                <option value="NGUTANG">NGUTANG</option>
            </select>
        </form>
        <div class="button-container">
            <input type="submit" value="Simpan">
            <button class="button" onclick="window.location.href='read.php'">Batal</button>
        </div>
    </div>

    <?php
    require 'koneksi.php'; // Mengimpor koneksi ke database
    
    // Memeriksa apakah data telah dikirim melalui formulir
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil data dari formulir
        $nama_pemesan = $_POST["nama_pemesan"];
        $no_hp = $_POST["no_hp"];
        $alamat_pemesan = $_POST["alamat_pemesan"];
        $nama_helm = $_POST["nama_helm"];
        $ukuran_helm = $_POST["ukuran_helm"];
        $jumlah_helm = $_POST["jumlah_helm"];
        $tanggal_pemesanan = $_POST["tanggal_pemesanan"];
        $metode_pembayaran = $_POST["metode_pembayaran"];

        // Menyimpan data ke database
        $sql = "INSERT INTO tbhelm (nama_pemesan, no_hp, alamat_pemesan, nama_helm, ukuran_helm, jumlah_helm, tanggal_pemesanan, metode_pembayaran) VALUES ('$nama_pemesan', '$no_hp', '$alamat_pemesan', '$nama_helm', '$ukuran_helm', $jumlah_helm, '$tanggal_pemesanan', '$metode_pembayaran')";

        if (mysqli_query($koneksi, $sql)) {
            echo "<script>alert('Pesanan berhasil dibuat.'); window.location.href = 'read.php';</script>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
        }

        // Menutup koneksi ke database
        mysqli_close($koneksi);
    }
    ?>
</body>

</html>