<?php
require "koneksi.php";

$nama = htmlspecialchars($_GET['nama']);
$queryProduk = mysqli_query($con, "SELECT * FROM produk WHERE nama='$nama'");
$produk = mysqli_fetch_array($queryProduk);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online | Detail Produk</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php require "navbar.php"; ?>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <img src="image/abab.jpg" class="w-100" alt="">
                </div>
                <div class="col-md-6 offset-md-1">
                    <h1>Nike Air Jordan 11 Space Jam</h1>
                    <p class="fs-5">
                        Jordan mengenakan Air Jordan 11 “Concord” yang ikonik saat tampil sebentar di film tersebut. Sepatu kets berpotongan tinggi ini dirancang oleh Tinker Hatfield dan dirilis pada tahun 1995, tepat sebelum film tersebut dirilis. Warna Concord menampilkan bagian atas hitam dan putih dengan pelindung lumpur kulit paten yang khas dan sol luar yang tembus cahaya.
                    </p>
                    <p class="text-harga">
                        Rp 2.300.000,00
                    </p>
                    </p class="fs-5">Status Ketersediaan : <strong>Tersedia</strong></p>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--Produk Terkait  -->
    <div class="container-fluid py-5 warna2">
        <h2 class="text-center text-white">Produk Terkait</h2>

        <div class="row">
            <div class="col-md-6 col-lg-3 mb-3">

                <img src="image/raul.jpg" class="img-fluid img-thumbnail" alt="">
            </div>

            <div class="col-md-6 col-lg-3 mb-3">
                <img src="image/mu.jpg" class="img-fluid img-thumbnail" alt="">
            </div>

            <div class="col-md-6 col-lg-3 mb-3">
                <img src="image/mu retro.jpg" class="img-fluid img-thumbnail" alt="">
            </div>

            <div class="col-md-6 col-lg-3 mb-3">
                <img src="image/arsenal.jpg" class="img-fluid img-thumbnail" alt="">
            </div>
        </div>
    </div>
    <!-- footer -->
    <?php require "footer.php"; ?>

    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="fontawesome/js/all.min.js"></script>

</body>

</html>