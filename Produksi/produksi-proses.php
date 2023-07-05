<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $ukuran = $_POST['ukuran'];
    $harga = $_POST['harga'];
    $bahan = $_POST['bahan'];
    $qty = $_POST['qty'];
    $sql = "INSERT INTO tb_produksi VALUES('', '$nama', '$ukuran', '$harga', '$bahan', '$qty')";
    if (empty($nama) || empty($harga)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'produksi-entry.html';
            </script>
        ";
    } elseif (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Produksi Berhasil Ditambahkan');
                window.location = 'produksi.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'produksi-entry.html'
            </script>
        ";
    }
} elseif (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $ukuran = $_POST['ukuran'];
    $harga = $_POST['harga'];
    $bahan = $_POST['bahan'];
    $qty = $_POST['qty'];
    
    $sql = "UPDATE tb_produksi SET
            nama = '$nama',
            ukuran = '$ukuran',
            harga = '$harga',
            bahan = '$bahan',
            qty = '$qty'
            WHERE id = $id";
    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Produksi Berhasil Diubah');
                window.location = 'produksi.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'produksi-edit.php';
            </script>
        ";
    }
} elseif (isset($_POST['hapus'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM tb_produksi WHERE id = $id";
    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data produksi Berhasil Dihapus');
                window.location = 'produksi.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Produksi Gagal Dihapus');
                window.location = 'produksi.php';
            </script>
        ";
    }
} else {
    header('location: produksi.php');
}
