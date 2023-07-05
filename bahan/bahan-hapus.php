<?php
include '../koneksi.php';
$id = $_GET['id'];
if (!isset($_GET['id'])) {
    echo "
      <script>
        alert('Tidak ada ID yang Terdeteksi');
        window.location = 'bahan.php';
      </script>
    ";
}

$sql = "SELECT * FROM tb_bahan WHERE id = '$id'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bahan Hapus</title>
    <link rel="stylesheet" href="../css/admin.css?v=<?php echo time (); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="container">
        <div class="sidebar">
            <a href="../admin.php">Home</a>
            <a href="../Vendor/Vendor.php">Vendor</a>
            <a href="../BOM/BOM.php">BOM</a>
            <a href="../Produk/produk.php">Produk</a>
            <a href="../Purchasing/Purchasing.php">Purchasing</a>
            <a href="../ROQ/ROQ.php">ROQ</a>
            <a href="../Customer/Customer.php">Customer</a>
            <a href="../Produksi/Produksi.php">Produksi</a>
            <a href="bahan.php">bahan</a>
            <a href="../accounting/accounting.php">Accounting</a>

        </div>

        <div class="right_content">
            <div class="navbar">
                <img src="../assets/logo.png" alt="" />
                <button class="btn">
                    <a href="../logout.php">Logout</a>
                </button>
            </div>
            <div class="content">
                <h3>Hapus bahan</h3>
                <div class="form-login">
                    <h4>Ingin Menghapus Data ?</h4>
                    <form action="bahan-proses.php" method="post">
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">

                        <button type="submit" class="btn btn-simpan" name="hapus" style="width: 40%; margin-top: 50px;">
                            Yes
                        </button>
                        <button type="submit" class="btn btn-simpan" name="tidak" style="width: 40%;">
                            No
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>