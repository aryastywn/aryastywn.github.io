<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jamal Store</title>
    <link rel="stylesheet" href="dashboard.css">

</head>

<body>
    <div class="medsos">
        <div class="container">
            <ul>
                <li><a href="https://www.facebook.com/aryastywn24">FB: aryastywn24</a></li>
                <li><a href="https://www.instagram.com/aryastywn24/?hl=id">IG : @aryastywn24</a></li>
                <li><a href="https://web.whatsapp.com/send/?phone=%2B6283153586529&text&type=phone_number&app_absent=0">WA
                        : +62 8315 3586 529</a></li>
            </ul>
            <div class="gerak">
                <p id="jam">
                    <?php
                     date_default_timezone_set("asia/makassar");
                     echo date("l, d F Y - H:i:s");
                    ?> 
                </p>
                
            </div>
        </div>
    </div>
    <div>
        <header>
            <div class="container">
                <h1><a href="dashboard.php">Jamal Store</a></h1>
                <ul>
                    <li><a href="dashboard.php">Home</a></li>
                    <li><a href="aboutme.html">About Me</a></li>
                    <li><a id="toggleMode" draggable="false">Toggle Mode</a></li>
                </ul>

            </div>
        </header>
    </div>
    <div>
        <section class="background">
            <div class="border">
                <h2>Selamat Datang di Website Helm 😁</h2>
            </div>
        </section>
    </div>
    <button class="shopping-cart" id="shopping-cart">
        <img src="keranjang kuning.png" alt="Shopping Cart" width="50px">
    </button>
    <script type="text/javascript">
        document.getElementById("shopping-cart").addEventListener("click", function () {
            window.location.href = "login.php";
        });
    </script>
    <footer class="footer"><b>Copyright &copy; 2023 |</b>
    </footer>
    <div id="popupContainer" class="popup-container">
        <div class="popup-content">
            <h2>Helm mu hilang kah?!!</h2>
            <p>Coba cari disini sapatau ada.</p>
            <button id="closePopup">Tutup</button>
        </div>
    </div>
    <script type="text/javascript" src="script.js"></script>
</body>

</html>