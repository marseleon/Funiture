<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $nama_bahan = $_POST['nama_bahan'];
    $satuan_bahan = $_POST['satuan_bahan'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    $sql = "INSERT INTO tb_bahan VALUES('', '$nama_bahan', '$satuan_bahan', '$jumlah', '$harga')";
    if (empty($nama_bahan) || empty($harga)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'bahan-entry.html';
            </script>
        ";
    } elseif (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Bahan Berhasil Ditambahkan');
                window.location = 'bahan.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'bahan-entry.html'
            </script>
        ";
    }
} elseif (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama_bahan = $_POST['nama_bahan'];
    $satuan_bahan = $_POST['satuan_bahan'];
    $jumlah = $_POST['jumlah'];
    $harga = $_POST['harga'];
    
    $sql = "UPDATE tb_bahan SET
            nama_bahan = '$nama_bahan',
            satuan_bahan = '$satuan_bahan',
            jumlah = '$jumlah',
            harga = '$harga'
            WHERE id = $id";
    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data bahan Berhasil Diubah');
                window.location = 'bahan.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'bahan-edit.php';
            </script>
        ";
    }
} elseif (isset($_POST['hapus'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM tb_bahan WHERE id = $id";
    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Bahan Berhasil Dihapus');
                window.location = 'bahan.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Bahan Gagal Dihapus');
                window.location = 'bahan.php';
            </script>
        ";
    }
} else {
    header('location: bahan.php');
}
