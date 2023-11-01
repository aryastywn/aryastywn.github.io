<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Baca data</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #EF9595;
            text-align: center;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        .container {
            background-color: #EFB495;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 7px 15px 0 rgba(0, 0, 0, 0.5);
        }

        .container p {
            font-size: 18px;
            margin: 10px 0;
        }

        .container span {
            font-weight: bold;
        }

        /* Styling form data */
        form {
            margin: 20px auto;
            max-width: 400px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #fff;
            box-shadow: 0 7px 15px 0 rgba(0, 0, 0, 0.5);
        }

        label {
            display: block;
            font-weight: bold;
        }

        input[type="text"], input[type="date"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        button {
            background-color: #EF9595;
            color: black;
            padding: 10px 20px;
            border: none;
            cursor: pointer;
            border-radius: 5px;
            box-shadow: 0 7px 15px 0 rgba(0, 0, 0, 0.5);
            margin-top: 10px;
        }

        button:hover {
            background-color: white;
        }
    </style>
</head>
<body>
    <h1>Data Helm</h1>
    <div class="container">
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $helmType = $_POST["helm-type"];
            $helmSeri = $_POST["helm-seri"];
            $helmDate = $_POST["helm-date"];
            $helmSize = $_POST["helm-size"];
            $paymentMethod = $_POST["payment-method"];

            echo "Data yang dimasukkan: <br><br>";
            echo "Nama/Merk Helm: <span>$helmType</span><br><br>";
            echo "Seri/Tipe Helm: <span>$helmSeri</span><br><br>";
            echo "Tanggal Pembelian: <span>$helmDate</span><br><br>";
            echo "Ukuran Helm: <span>$helmSize</span><br><br>";
            echo "Metode Pembayaran: <span>$paymentMethod</span><br>";
        }
        ?>
        <button onclick="kembaliKeHalamanUtama()">Kembali ke Halaman Utama</button>

        <script>
            function kembaliKeHalamanUtama() {
                window.location.href = "index.html";
            }
        </script>
    </div>
</body>
</html>
3