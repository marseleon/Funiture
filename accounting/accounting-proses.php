<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $nama_barang = $_POST['nama_barang'];
    $quantity = $_POST['quantity'];
    $nama_perusahaan = $_POST['nama_perusahaan'];
    $total = $_POST['total'];
    $tanggal_transaksi = $_POST['tanggal_transaksi'];
    $sql = "INSERT INTO tb_acounting VALUES('', '$nama_barang', '$quantity', '$nama_perusahaan', '$total', '$tanggal_transaksi')";
    if (empty($nama_barang) || empty($nama_perusahaan)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'accounting-entry.html';
            </script>
        ";
    } elseif (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Accounting Berhasil Ditambahkan');
                window.location = 'accounting.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'accounting-entry.html'
            </script>
        ";
    }
} elseif (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama_barang = $_POST['nama_barang'];
    $quantity = $_POST['quantity'];
    $nama_perusahaan = $_POST['nama_perusahaan'];
    $total = $_POST['total'];
    $tanggal_transaksi = $_POST['tanggal_transaksi'];
    
    $sql = "UPDATE tb_acounting SET
            nama_barang = '$nama_barang',
            quantity = '$quantity',
            nama_perusahaan = '$nama_perusahaan',
            total = '$total',
            tanggal_transaksi = '$tanggal_transaksi'
            WHERE id = $id";
    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Accounting Berhasil Diubah');
                window.location = 'accounting.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'accounting-edit.php';
            </script>
        ";
    }
} elseif (isset($_POST['hapus'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM tb_acounting WHERE id = $id";
    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data accounting Berhasil Dihapus');
                window.location = 'accounting.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Accounting Gagal Dihapus');
                window.location = 'accounting.php';
            </script>
        ";
    }
} else {
    header('location: accounting.php');
}
