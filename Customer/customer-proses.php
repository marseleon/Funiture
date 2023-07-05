<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no = $_POST['no'];
    $email = $_POST['email'];
    $sql = "INSERT INTO tb_customer VALUES('', '$nama', '$alamat', '$no', '$email')";
    if (empty($nama) || empty($no)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'customer-entry.html';
            </script>
        ";
    } elseif (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data custpmer Berhasil Ditambahkan');
                window.location = 'customer.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'customer-entry.html'
            </script>
        ";
    }
} elseif (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no = $_POST['no'];
    $email = $_POST['email'];
    
    $sql = "UPDATE tb_customer SET
            nama = '$nama',
            alamat = '$alamat',
            no = '$no',
            email = '$email'
            WHERE id = $id";
    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data customer Berhasil Diubah');
                window.location = 'customer.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'customer-edit.php';
            </script>
        ";
    }
} elseif (isset($_POST['hapus'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM tb_customer WHERE id = $id";
    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data customer Berhasil Dihapus');
                window.location = 'customer.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data customer Gagal Dihapus');
                window.location = 'customer.php';
            </script>
        ";
    }
} else {
    header('location: customer.php');
}
