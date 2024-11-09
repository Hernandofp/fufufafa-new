<?php
require "koneksi.php";

$queyKategori = mysqli_query($con, "SELECT * FROM Kategori");

// get produk by nama produk/keyword
if (isset($_GET['keyword'])) {
    $queryProduk = mysqli_query($con, "SELECT *  FROM produk WHERE nama LIKE '%$_GET[keyword]%'");
}
// get produk by kategori
else if (isset($_GET['kategori'])) {
    $queryGetKategoriId = mysqli_query($con, "SELECT *  FROM produk WHERE nama='$_GET[kategori]'");
    $kategoriId = mysqli_fetch_array($queryGetKategoriId);

    $queryProduk = mysqli_query($con, "SELECT * FROM produk WHERE kategori_id='" . $kategoriId['id'] . "'");
}
// get produk default
else {
    $queryProduk = mysqli_query($con, "SELECT *  FROM produk");
}
$countData = mysqli_num_rows($queryProduk);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Online | Produk</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <?php require "navbar.php"; ?>

    <!-- banner -->
    <div class="container-fluid banner-produk d-flex align-items-center">
        <div class="container">
            <h1 class="text-white text-center">Produk</h1>
        </div>
    </div>
    <!-- body -->
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-3 mb-5">
                <h3>Kategori</h3>
                <ul class="list-group">

                    <a class="no-decoration" href="produk.php?kategori=<a?php echo $kategori['nama']; ?>">
                        <li class="list-group-item">Baju Pria</li>
                        <li class="list-group-item">Baju Wanita</li>
                        <li class="list-group-item">Jam</li>
                        <li class="list-group-item">Hoodie</li>
                        <li class="list-group-item">Sepatu</li>
                    </a>
                </ul>
            </div>
            <div class="col-lg-9"></div>
            <h3>Produk</h3>
            <div class="row">
                <?php
                if ($countData < 1) {
                ?>
                    <h4 class="text-center my-5">Produk yang anda cari tidak tersedia</h4>
                <?php
                }
                ?>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="image-box">
                            <img src="image/abab.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Nike Air Jordan 11</h4>
                            <p class="card-text text-truncate">Air Jordan 11 Space Jam</p>
                            <p class="card-text text-harga">Rp 2.300.000</p>
                            <a href="produk-detail.php?nama=nike" class=" btn warna2 text-white">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="image-box">
                            <img src="image/raul.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Kemeja</h4>
                            <p class="card-text text-truncate">Kemeja Branded By Raul</p>
                            <p class="card-text text-harga">Rp 300.000,00</p>
                            <a href="produk-detail.php?nama=nike" class=" btn warna2 text-white">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="image-box">
                            <img src="image/mu.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Jersey Nike</h4>
                            <p class="card-text text-truncate">Jersey Nike Manchester United 2024/2025</p>
                            <p class="card-text text-harga">Rp 2.300.000,00</p>
                            <a href="produk-detail.php?nama=nike" class=" btn warna2 text-white">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="image-box">
                            <img src="image/plersib.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Keset</h4>
                            <p class="card-text text-truncate">Custome Keset</p>
                            <p class="card-text text-harga">Rp 20.000,00</p>
                            <a href="produk-detail.php?nama=nike" class=" btn warna2 text-white">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="image-box">
                            <img src="image/mu retro.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Jersey Nike</h4>
                            <p class="card-text text-truncate">Jersey Nike Manchester United Goal Kepper RETRO</p>
                            <p class="card-text text-harga">Rp 2.000.000,00</p>
                            <a href="produk-detail.php?nama=nike" class=" btn warna2 text-white">Lihat Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="image-box">
                            <img src="image/arsenal.jpg" class="card-img-top" alt="...">
                        </div>
                        <div class="card-body">
                            <h4 class="card-title">Jersey Nike</h4>
                            <p class="card-text text-truncate">Jersey Nike Arsenal Retro</p>
                            <p class="card-text text-harga">Rp 1.300.000,00</p>
                            <a href="produk-detail.php?nama=nike" class=" btn warna2 text-white">Lihat Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
        <?php require "footer.php"; ?>

        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="fontawesome/js/all.min.js"></script>

</body>

</html>