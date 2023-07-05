<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $nama_vendor = $_POST['nama_vendor'];
    $nama_produk = $_POST['nama_produk'];
    $qty = $_POST['qty'];
    $harga = $_POST['harga'];
    $subtotal = $_POST['subtotal'];
    $tglorder = $_POST['tglorder'];
    $sql = "INSERT INTO tb_roq VALUES('', '$nama_vendor', '$nama_produk', '$qty', '$harga', '$subtotal', '$tglorder')";
    if (empty($nama_vendor) || empty($nama_produk)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'roq-entry.html';
            </script>
        ";
    } elseif (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data roq Berhasil Ditambahkan');
                window.location = 'roq.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'roq-entry.html'
            </script>
        ";
    }
} elseif (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama_vendor = $_POST['nama_vendor'];
    $nama_produk = $_POST['nama_produk'];
    $qty = $_POST['qty'];
    $harga = $_POST['harga'];
    $subtotal = $_POST['subtotal'];
    $tglorder = $_POST['tglorder'];
    
    $sql = "UPDATE tb_roq SET
            nama_vendor = '$nama_vendor',
            nama_produk = '$nama_produk',
            qty = '$qty',
            harga = '$harga',
            subtotal = '$subtotal',
            tglorder = '$tglorder'
            WHERE id = $id";
    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data roq Berhasil Diubah');
                window.location = 'roq.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'roq-edit.php';
            </script>
        ";
    }
} elseif (isset($_POST['hapus'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM tb_roq WHERE id = $id";
    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data roq Berhasil Dihapus');
                window.location = 'roq.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data roq Gagal Dihapus');
                window.location = 'roq.php';
            </script>
        ";
    }
} else {
    header('location: roq.php');
}
