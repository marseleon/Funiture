<?php
include '../koneksi.php';
function upload()
{
    $namaFile = $_FILES['photo']['name'];
    $error = $_FILES['photo']['error'];
    $tmpName = $_FILES['photo']['tmp_name'];
    // cek apakah tidak ada gambar yang diupload
    if ($error === 4) {
        echo "
            <script>
                alert('Gambar Harus Diisi');
                window.location = 'Produk-entry.html';
            </script>
        ";
        return false;
    }
    // cek apakah yang diupload adalah gambar
    $ekstentiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if (!in_array($ekstensiGambar, $ekstentiGambarValid)) {
        echo "
            <script>
                alert('File Harus Berupa Gambar');
                window.location = 'Produk-entry.html';
            </script>
        ";
    }
    // lolos pengecekan, upload gambar
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    $oke = move_uploaded_file($tmpName, '../pic/' . $namaFileBaru);
    return $namaFileBaru;
}

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $ukuran = $_POST['ukuran'];
    $harga = $_POST['harga'];
    $photo = upload();
    $sql = "INSERT INTO tb_produk VALUES('', '$nama', '$jumlah', '$ukuran', '$harga', '$photo')";
    if (empty($nama) || empty($harga)) {
        echo "
            <script>
                alert('Pastikan Anda Mengisi Semua Data');
                window.location = 'Produk-entry.html';
            </script>
        ";
    } elseif (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Produk Berhasil Ditambahkan');
                window.location = 'Produk.php'
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'Produk-entry.html'
            </script>
        ";
    }
} elseif (isset($_POST['edit'])) {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $jumlah = $_POST['jumlah'];
    $ukuran = $_POST['ukuran'];
    $harga = $_POST['harga'];
    $photoLama = $_POST['photoLama'];
    // cek apakah user pilih gambar atau tidak
    if ($_FILES['photo']['error']) {
        $photo = $photoLama;
    } else {
        $photo = upload();
    }
    $sql = "UPDATE tb_produk SET
            photo = '$photo',
            nama = '$nama',
            jumlah = '$jumlah',
            ukuran = '$ukuran',
            harga = '$harga'
            WHERE id = $id
            ";
    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Produk Berhasil Diubah');
                window.location = 'Produk.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Terjadi Kesalahan');
                window.location = 'Produk-edit.php';
            </script>
        ";
    }
} elseif (isset($_POST['hapus'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM tb_produk WHERE id = $id";
    if (mysqli_query($koneksi, $sql)) {
        echo "
            <script>
                alert('Data Produk Berhasil Dihapus');
                window.location = 'Produk.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Produk Gagal Dihapus');
                window.location = 'Produk.php';
            </script>
        ";
    }
} else {
    header('location: Produk.php');
}
