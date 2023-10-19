<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Update Pesanan</title>
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
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 24px;
            color: #333;
        }

        form {
            margin-top: 20px;
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
            color: #000;
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

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button {
            background-color: #EF9595;
            color: #000;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            text-align: right;
        }

        .button:hover {
            background-color: black;
            color: #EF9595;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Update Pesanan</h2>

        <?php
        require 'koneksi.php';

        if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['id'])) {
            $id_pesanan = $_GET['id'];

            // Ambil data pesanan berdasarkan ID
            $query = "SELECT * FROM tbhelm WHERE id_pesanan = $id_pesanan";
            $result = mysqli_query($koneksi, $query);

            if ($result) {
                $data = mysqli_fetch_assoc($result);
            } else {
                echo "Data tidak ditemukan.";
                exit;
            }
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $id_pesanan = $_POST["id_pesanan"];
            $nama_pemesan = $_POST["nama_pemesan"];
            $no_hp = $_POST["no_hp"];
            $alamat_pemesan = $_POST["alamat_pemesan"];
            $nama_helm = $_POST["nama_helm"];
            $ukuran_helm = $_POST["ukuran_helm"];
            $jumlah_helm = $_POST["jumlah_helm"];
            $tanggal_pemesanan = $_POST["tanggal_pemesanan"];
            $metode_pembayaran = $_POST["metode_pembayaran"];

            // Update data pesanan
            $query = "UPDATE tbhelm SET nama_pemesan = '$nama_pemesan', no_hp = '$no_hp', alamat_pemesan = '$alamat_pemesan', nama_helm = '$nama_helm', ukuran_helm = '$ukuran_helm', jumlah_helm = $jumlah_helm, tanggal_pemesanan = '$tanggal_pemesanan', metode_pembayaran = '$metode_pembayaran' WHERE id_pesanan = $id_pesanan";

            if (mysqli_query($koneksi, $query)) {
                echo "<script>alert('Pesanan berhasil diperbarui.'); window.location.href = 'read.php';</script>";
            } else {
                echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
            }

            // Menutup koneksi ke database
            mysqli_close($koneksi);
        }
        ?>

        <form action="" method="POST">
            <input type="hidden" name="id_pesanan" value="<?php echo $data['id_pesanan']; ?>">

            <label for="nama_pemesan">Nama Pemesan:</label>
            <input type="text" name="nama_pemesan" value="<?php echo $data['nama_pemesan']; ?>" required>

            <label for="no_hp">No Hp:</label>
            <input type="text" name="no_hp" value="<?php echo $data['no_hp']; ?>" required>

            <label for="alamat_pemesan">Alamat:</label>
            <textarea name="alamat_pemesan" required><?php echo $data['alamat_pemesan']; ?></textarea>

            <label for="nama_helm">Nama Helm:</label>
            <input type="text" name="nama_helm" value="<?php echo $data['nama_helm']; ?>" required>

            <label for="ukuran_helm">Ukuran Helm:</label>
            <select name="ukuran_helm" required>
                <option value="S" <?php if ($data['ukuran_helm'] === 'S')
                    echo 'selected'; ?>>S</option>
                <option value="M" <?php if ($data['ukuran_helm'] === 'M')
                    echo 'selected'; ?>>M</option>
                <option value="L" <?php if ($data['ukuran_helm'] === 'L')
                    echo 'selected'; ?>>L</option>
                <option value="XL" <?php if ($data['ukuran_helm'] === 'XL')
                    echo 'selected'; ?>>XL</option>
                <option value="XS" <?php if ($data['ukuran_helm'] === 'XS')
                    echo 'selected'; ?>>XS</option>
            </select>

            <label for="jumlah_helm">Jumlah Helm:</label>
            <input type="number" name="jumlah_helm" value="<?php echo $data['jumlah_helm']; ?>" required>

            <label for="tanggal_pemesanan">Tanggal Pemesanan:</label>
            <input type="date" name="tanggal_pemesanan" value="<?php echo $data['tanggal_pemesanan']; ?>" required>

            <label for="metode_pembayaran">Metode Pembayaran:</label>
            <select name="metode_pembayaran" required>
                <option value="COD" <?php if ($data['metode_pembayaran'] === 'COD')
                    echo 'selected'; ?>>COD</option>
                <option value="QRIS" <?php if ($data['metode_pembayaran'] === 'QRIS')
                    echo 'selected'; ?>>QRIS</option>
                <option value="PAYLATER" <?php if ($data['metode_pembayaran'] === 'PAYLATER')
                    echo 'selected'; ?>>PAYLATER
                </option>
                <option value="NGUTANG" <?php if ($data['metode_pembayaran'] === 'NGUTANG')
                    echo 'selected'; ?>>NGUTANG
                </option>
            </select>

            <div class="button-container">
                <input type="submit" value="Update">

            </div>
        </form>
        <button class="button" onclick="window.location.href='read.php'">Batal</button>
    </div>
</body>

</html>