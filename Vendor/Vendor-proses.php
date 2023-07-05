<?php
include '../koneksi.php';

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $perusahaan = $_POST['Perusahaan'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $kota = $_POST['kota'];
    $sql = "INSERT INTO tb_vendor VALUES('', '$nama', '$perusahaan', '$alamat', '$telp', '$kota')";
    if (empty($nama) || empty($perusahaan)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'vendor-entry.html';
            </script>
        ";
    } elseif (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Vendor Berhasil Ditambahkan');
                window.location = 'vendor.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'vendor-entry.html'
            </script>
        ";
    }
} elseif (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $perusahaan = $_POST['Perusahaan'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $kota = $_POST['kota'];
    
    $sql = "UPDATE tb_vendor SET
            nama = '$nama',
            Perusahaan = '$perusahaan',
            alamat = '$alamat',
            telp = '$telp',
            kota = '$kota'
            WHERE id = $id";
    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Vendor Berhasil Diubah');
                window.location = 'vendor.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'vendor-edit.php';
            </script>
        ";
    }
} elseif (isset($_POST['hapus'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM tb_vendor WHERE id = $id";
    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Vendor Berhasil Dihapus');
                window.location = 'vendor.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Vendor Gagal Dihapus');
                window.location = 'vendor.php';
            </script>
        ";
    }
} else {
    header('location: vendor.php');
}
