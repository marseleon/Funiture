<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Produk</title>
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
            <a href="../Produksi/produksi.php">Produksi</a>
            <a href="../bahan/bahan.php">Bahan</a>
            <a href="../accounting/accounting.php">Accounting</a>
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
                <h3>Produk</h3>
                <button type="button" class="btn btn-tambah">
                    <a href="Produk-entry.html">Tambah Data</a>
                </button>
                <table class="table-data">
                    <thead>
                        <tr>
                            <th style="width: 20%">Photo</th>
                            <th style="width: 20%">Nama</th>
                            <th style="width: 20%">Jumlah</th>
                            <th style="width: 20%">Ukuran</th>
                            <th style="width: 20%">Harga</th>
                            <th style="width: 20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../koneksi.php';
                        $sql = "SELECT * FROM tb_produk";
                        $result = mysqli_query($koneksi, $sql);
                        while ($data = mysqli_fetch_assoc($result)) {
                            echo "
                                <tr>
                                    <td><img src='../pic/$data[photo]'></td>
                                    <td>$data[nama]</td>
                                    <td>$data[jumlah]</td>
                                    <td>$data[ukuran]</td>
                                    <td>$data[harga]</td>

                                    <td>
                                        <a href=produk-edit.php?id=$data[id]>Edit</a> |
                                        <a href=produk-hapus.php?id=$data[id]>Hapus</a>
                                    </td>
                                </tr>
                            ";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>