<?php
session_start();
require 'koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cek_username = "SELECT * FROM tbakun WHERE username = '$username'";
    $result = mysqli_query($koneksi, $cek_username);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['login'] = true;
        echo "<script>
                alert('Login berhasil!');
                window.location.href = 'read.php';
            </script>";
    } else {
        echo "<script> 
            alert('password tidak sama');
        </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background: linear-gradient(rgba(239, 149, 149, 0.5), rgba(239, 149, 149, 0.5)), url(nikung.jpeg);
        }

        .form {
            text-align: center;
            margin: 100px auto;
            max-width: 400px;
        }

        .form-container {
            background-color: #EF9595;
            padding: 20px;
            border: 2px solid black;
            border-radius: 5px;
            box-shadow: 0 2px 8px #EF9595;
        }

        .textfield {
            width: 90%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        .login-btn {
            background-color: transparent;
            color: black;
            margin-top: 15px;
            padding: 10px;
            border: 1px solid;
            border-radius: 3px;
            cursor: pointer;
        }

        .login-btn:hover {
            background-color: black;
            color: #EF9595;
        }

        a {
            text-decoration: none;
            color: blue;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>

</head>

<body>
    <div class="form">
        <div class="form-container">
            <h1>Login</h1>
            <hr>
            <form action="" method="post">
                <input type="text" name="username" placeholder="Username" class="textfield">

                <input type="password" name="password" placeholder="Password" class="textfield"><br>

                <button type="submit" name="login" class="login-btn">Masuk</button><br>

                <h5> Apakah anda sudah punya akun ? <a href=regis.php>Registrasi</a> </h5>

                <h5> <a href="dashboard.php">Kembali ke Dashboard</a> </h5>
                
            </form>
        </div>
    </div>
</body>

</html>