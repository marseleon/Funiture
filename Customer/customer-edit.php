<?php
include '../koneksi.php';
$id = $_GET['id'];
if (!isset($_GET['id'])) {
    echo "
        <script>
            alert('Tidak ada ID yang Terdeteksi');
            window.location = 'Customer.php';
        </script>
    ";
}
$sql = "SELECT * FROM tb_customer WHERE id = '$id'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>customer Edit</title>
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
            <a href="../Produk/Produk.php">Produk</a>
            <a href="../Purchasing/Purchasing.php">Purchasing</a>
            <a href="../ROQ/ROQ.php">ROQ</a>
            <a href="Customer.php">Customer</a>
            <a href="../Produksi/produksi.php">Produksi</a>
            <a href="../bahan/bahan.php">Bahan</a>
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
                <h3>Edit customer</h3>
                <div class="form-login">
                    <form action="customer-proses.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                        <label for="material">Nama</label>
                        <input class="input" type="text" name="nama" id="nama" placeholder="nama" value="<?= $data['nama'] ?>" />


                        <label for="harga">Alamat</label>
                        <input class="input" type="text" name="alamat" id="alamat" placeholder="alamat" value="<?= $data['alamat'] ?>" />

                        <label for="harga">telp</label>
                        <input class="input" type="text" name="no" id="no" placeholder="no" value="<?= $data['no'] ?>" />

                        <label for="harga">email</label>
                        <input class="input" type="text" name="email" id="email" placeholder="email" value="<?= $data['email'] ?>" />

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