<?php
require 'koneksi.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);
    $cpassword = mysqli_real_escape_string($koneksi, $_POST['cpassword']);

    if ($password == $cpassword) {
        // $password = password_hash($password, PASSWORD_DEFAULT);
        $cek_username = "SELECT username FROM tbakun WHERE username = '$username'";
        $temp = mysqli_query($koneksi, $cek_username);
        $row = mysqli_fetch_assoc($temp);

        if ($row) {
            echo "<script>
                alert('Username ini telah digunakan!');
                document.location.href = 'regis.php';
            </script>";
        } else {
            $insert_sql = "INSERT INTO tbakun VALUES ('','$username','$password')";
            mysqli_query($koneksi, $insert_sql);

            if (mysqli_affected_rows($koneksi) > 0) {
                echo "<script>
                        alert('Data berhasil diregistrasi!');
                        document.location.href = 'login.php';
                    </script>";
            } else {
                echo "<script>
                        alert('Data gagal diregistrasi!');
                        document.location.href = 'regis.php';
                    </script>";
            }
        }
    } else {
        echo "<script>
                    alert('Konfirmasi Password tidak sesuai!');
                    document.location.href = 'regis.php';
            </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrasi</title>

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
            <h1>Register</h1>
            <hr>

            <form action="" method="POST">
                <input type="text" name="username" placeholder="Username" class="textfield">

                <input type="password" name="password" placeholder="Password" class="textfield">

                <input type="password" name="cpassword" id="cpassword" placeholder="Confirm Password" autocomplete="off"
                    class="textfield" required> <br>

                <button type="submit" name="register" class="login-btn"><b>Register</b></button>
                <h4> jika anda sudah punya akun, <a href="login.php">Login</a> </h4>
            </form>
        </div>
    </div>
</body>

</html>