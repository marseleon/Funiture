<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="css/admin.css?v=<?php echo time (); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />
</head>

<body onload="myFunction()">
    <div class="container">
        <div class="sidebar">
            <a href="admin.php">Home</a>
            <a href="Vendor/Vendor.php">Vendor</a>
            <a href="BOM/BOM.php">BOM</a>
            <a href="Produk/Produk.php">Produk</a>
            <a href="Purchasing/Purchasing.php">Purchasing</a>
            <a href="ROQ/ROQ.php">ROQ</a>
            <a href="Customer/Customer.php">Customer</a>
            <a href="Produksi/produksi.php">Produksi</a>
            <a href="bahan/bahan.php">Bahan</a>
            <a href="accounting/accounting.php">Accounting</a>
        </div>

        <div class="right_content">
            <div class="navbar">
                <img src="assets/logo.png" alt="" />
                <button class="btn" ><a href="logout.php">Logout</a></button>
            </div>

            <div class="content">
                <h2 id="text"></h2>
                <p>
                    <?php session_start(); echo "selamat datang di halaman admin, " . $_SESSION['nama']; ?>
                </p>
            </div>
        </div>
    </div>

    <script>
        function myFunction() {

            let jam = new Date().getHours();

            if (jam) {
                if (jam >= 4 && jam <= 10) {
                    document.getElementById("text").innerHTML = `Selamat Pagi`;
                } else if (jam >= 11 && jam <= 14) {
                    document.getElementById("text").innerHTML = `Selamat Siang`;
                } else if (jam >= 15 && jam <= 18) {
                    document.getElementById("text").innerHTML = `Selamat Sore`;
                } else {
                    document.getElementById("text").innerHTML = `Selamat Malam`;
                }
            }
        }
    </script>

</body>

</html>