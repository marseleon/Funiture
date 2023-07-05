<?php
include '../koneksi.php';
$id = $_GET['id'];
if (!isset($_GET['id'])) {
    echo "
        <script>
            alert('Tidak ada ID yang Terdeteksi');
            window.location = 'Produk.php';
        </script>
    ";
}
$sql = "SELECT * FROM tb_produk WHERE id = '$id'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Produk Edit</title>
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
            <a href="produk.php">Produk</a>
            <a href="../Purchasing/Purchasing.php">Purchasing</a>
            <a href="../ROQ/ROQ.php">ROQ</a>
            <a href="../Customer/Customer.php">Customer</a>
            <a href="../Produksi/Produksi.php">Produksi</a>
            <a href="../bahan/bahan.php">Bahan</a>
            <a href="../accounting/accounting.php">Accounting</a>
        </div>
        <div class="right_content">
            <div class="navbar">
                <img src="../asset/" alt="" />
                <button class="btn">
                    <a href="../logout.php">Logout</a>
                </button>
            </div>
            <div class="content">
                <h3>Edit Produk</h3>
                <div class="form-login">
                    <form action="produk-proses.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                        <input type="hidden" name="photoLama" value="<?= $data['photo'] ?>">
                        <label for="categories">nama produk</label>
                        <input class="input" type="text" name="nama" id="nama" placeholder="nama" value="<?= $data['nama'] ?>" />
                        <label for="categories">jumlah</label>
                        <input class="input" type="text" name="jumlah" id="jumlah" placeholder="jumlah" value="<?= $data['jumlah'] ?>" />
                        <label for="categories">ukuran</label>
                        <input class="input" type="text" name="ukuran" id="ukuran" placeholder="ukuran" value="<?= $data['ukuran'] ?>" />
                        <label for="categories">harga</label>
                        <input class="input" type="text" name="harga" id="harga" placeholder="harga" value="<?= $data['harga'] ?>" />
                        <label for="photo">Photo</label>
                        <img src="../asset/<?= $data['photo'] ?>" alt="">
                        <input type="file" name="photo" id="photo" style="margin-bottom: 20px" />
                        <button type="submit" class="btn btn-simpan" name="edit">
                            Simpan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>