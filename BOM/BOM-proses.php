<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $material = $_POST['material'];
    $stock = $_POST['stock'];
    $harga = $_POST['harga'];
    $sql = "INSERT INTO tb_bom VALUES('', '$material', '$stock', '$harga')";
    if (empty($material) || empty($harga)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'BOM-entry.html';
            </script>
        ";
    } elseif (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data BOM Berhasil Ditambahkan');
                window.location = 'BOM.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'BOM-entry.html'
            </script>
        ";
    }
} elseif (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $material = $_POST['material'];
    $stock = $_POST['stock'];
    $harga = $_POST['harga'];
    
    $sql = "UPDATE tb_bom SET
            material = '$material',
            stock = '$stock',
            harga = '$harga'
            WHERE id = $id";
    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data BOM Berhasil Diubah');
                window.location = 'BOM.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'BOM-edit.php';
            </script>
        ";
    }
} elseif (isset($_POST['hapus'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM tb_bom WHERE id = $id";
    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data BOM Berhasil Dihapus');
                window.location = 'BOM.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data BOM Gagal Dihapus');
                window.location = 'BOM.php';
            </script>
        ";
    }
} else {
    header('location: BOM.php');
}
