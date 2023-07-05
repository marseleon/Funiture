<?php
include '../koneksi.php';
$id = $_GET['id'];
if (!isset($_GET['id'])) {
    echo "
      <script>
        alert('Tidak ada ID yang Terdeteksi');
        window.location = 'accounting.php';
      </script>
    ";
}

$sql = "SELECT * FROM tb_acounting WHERE id = '$id'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accounting Edit</title>
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
            <a href="../bahan/bahan.php">Bahan</a>
            <a href="accounting.php">Accounting</a>
        </div>

        <div class="right_content">
            <div class="navbar">
                <img src="../assets/logo.png" alt="" />
                <button class="btn">
                    <a href="../logout.php">Logout</a>
                </button>
            </div>
            <div class="content">
                <h3>Edit Accounting</h3>
                <div class="form-login">
                    <form action="accounting-proses.php" method="post">
                        <input type="hidden" name="id" value="<?= $data['id'] ?>">
                        <label for="nama_barang">Nama Barang</label>
                        <input class="input" type="text" name="nama_barang" id="nama_barang" placeholder="nama_barang" value="<?= $data['nama_barang'] ?>" />

                        <label for="quantity">Quantity</label>
                        <input class="input" type="text" name="quantity" id="quantity" placeholder="quantity" value="<?= $data['quantity'] ?>" />

                        <label for="nama_perusahaan">Nama Perusahaan</label>
                        <input class="input" type="text" name="nama_perusahaan" id="nama_perusahaan" placeholder="nama_perusahaan" value="<?= $data['nama_perusahaan'] ?>" />

                        <label for="total">Total</label>
                        <input class="input" type="text" name="total" id="total" placeholder="total" value="<?= $data['total'] ?>" />

                        <label for="tanggal_transaksi">Tanggal Transaksi</label>
                        <input class="input" type="date" name="tanggal_transaksi" id="tanggal_transaksi" placeholder="tanggal_transaksi" value="<?= $data['tanggal_transaksi'] ?>" />

                        <button type="submit" class="btn btn-simpan" name="edit">
                            Edit
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>