<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Customer</title>
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
            <a href="customer.php">Customer</a>
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
                <h3>Customer</h3>
                <button type="button" class="btn btn-tambah">
                    <a href="customer-entry.html">Tambah Data</a>
                </button>
                <button type="button" class="btn">
                    <a href="customer-cetak.php">Cetak</a>
                </button>
                <table class="table-data">
                    <thead>
                        <tr>
                            <th style="width: 20%">Nama</th>
                            <th style="width: 20%">Alamat</th>
                            <th style="width: 20%">no</th>
                            <th style="width: 20%">email</th>
                            <th style="width: 20%">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include '../koneksi.php';
                        $sql = "SELECT * FROM tb_customer";
                        $result = mysqli_query($koneksi, $sql);
                        while ($data = mysqli_fetch_assoc($result)) {
                            echo "
                                <tr>
                                    <td>$data[nama]</td>
                                    <td>$data[alamat]</td>
                                    <td>$data[no]</td>
                                    <td>$data[email]</td>
                                    <td>
                                        <a href=customer-edit.php?id=$data[id]>Edit</a> |
                                        <a href=customer-hapus.php?id=$data[id]>Hapus</a>
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