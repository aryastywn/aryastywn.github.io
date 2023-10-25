<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Daftar Pesanan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
            margin: 0;
            background: linear-gradient(rgba(239, 149, 149, 0.5), rgba(239, 149, 149, 0.5)), url(nikung.jpeg) no-repeat center center fixed;
            background-size: cover;
        }

        .container {
            max-width: 1000px;
            margin: 20px auto;
            background-color: #fff;
            padding: 50px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            font-size: 24px;
            color: #333;
            padding-left: 20px;
        }

        table {
            border-collapse: collapse;
            margin-top: 20px;
            width: 100%;
            padding: 0px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #EF9595;
            color: black;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button {
            background-color: #EF9595;
            color: black;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .button:hover {
            background-color: black;
            color: #EF9595;
        }

        .button-ubah {
            background-color: #4CAF50;
            padding: 5px 10px;
            border-radius: 5px; 
            
            
        }

        .button-hapus {
            background-color: #FF5722;
            padding: 0.4rem 3rem;
            border-radius: 5px;
            display: flex;
            
            width: 50px;
            
        }
        .button-ubah:hover {
            background-color: black;
            color: #EF9595;
        }
        .button-hapus:hover {
            background-color: black;
            color: #EF9595;
        }

        .button-ubah, .button-hapus {
            margin: 10px 5px;
            color: black;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 15px;
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        require 'koneksi.php';

        $result = mysqli_query($koneksi, "SELECT * FROM tbhelm");

        echo "<h2>Daftar Pesanan</h2>";
        echo "<table>";
        echo "<tr>
        <th>Nama Pemesan</th>
        <th>No Hp</th>
        <th>Alamat</th>
        <th>Nama Helm</th>
        <th>Ukuran Helm</th>
        <th>Jumlah Helm</th>
        <th>Tanggal Pemesanan</th>
        <th>Metode Pembayaran</th>
        <th>Berkas Helm</th>
        <th>Edit/Hapus</th>
      </tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
            <td>" . $row["nama_pemesan"] . "</td>
            <td>" . $row["no_hp"] . "</td>
            <td>" . $row["alamat_pemesan"] . "</td>
            <td>" . $row["nama_helm"] . "</td>
            <td>" . $row["ukuran_helm"] . "</td>
            <td>" . $row["jumlah_helm"] . "</td>
            <td>" . $row["tanggal_pemesanan"] . "</td>
            <td>" . $row["metode_pembayaran"] . "</td>
            <td><img src='berkas/" . $row["upload_berkas"] . "' width='100' height='100'></td>
            <td>
                <a class='button-ubah' href='update.php?id=" . $row['id_pesanan'] . "'>Edit</a>
                <a class='button-hapus' href='delete.php?id=" . $row['id_pesanan'] . "' onclick='return confirm(\"Apakah Anda yakin ingin menghapus data?\")'>Hapus</a>
            </td>
          </tr>";
        }

        echo "</table>";

        mysqli_free_result($result);

        mysqli_close($koneksi);
        ?>
        <div class="button-container">
            <button class="button" onclick="window.location.href='dashboard.php'">Kembali ke Dashboard</button>
            <button class="button" onclick="window.location.href='create.php'">Tambah Pesanan</button>
        </div>
    </div>
</body>

</html>
