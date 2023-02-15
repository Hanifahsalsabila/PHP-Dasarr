<?php
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];
// query data siswa berdasarkan id
$sw = query("SELECT * FROM siswa WHERE id = $id")[0];

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])) {


 
    // cek apakah data berhasil diubah atau tidak
    if( ubah($_POST) > 0 )  {
    echo "
        <script>
            alert('data berhasil diubah!');
            document.location.href = 'latihan1.php';
        </script>
    ";
    } else {
        echo " 
        <script>
        alert('data berhasil diubah!');
        document.location.href = 'latihan1.php';
    </script>
    ";
    }
 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>ubah data siswa</title>
</head>
<body>
    <h1>ubah data siswa</h1>
    
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $sw["id"]; ?>">
        <ul>
            <li>
                <label for="nis">NIS : </label>
                <input type="text" name="nis" id="nis" required
                value="<?= $sw["nis"]; ?>">
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" 
                value="<?= $sw["nama"]; ?>">
            </li>
            <li>
                <label for="email">email :</label>
                <input type="text" name="email" id="email"
                value="<?= $sw["email"]; ?>">
            </li>
            <li>
                <label for="jurusan">jurusan :</label>
                <input type="text" name="jurusan" id="jurusan"
                value="<?= $sw["jurusan"]; ?>">
            </li>
            <li>
                <label for="gambar">gambar :</label>
                <input type="text" name="gambar" id="gambar"
                value="<?= $sw["gambar"]; ?>">
            </li>
            <li>
                <button type="submit" name="submit">Ubah Data!</button>
            </li>
        </ul>

    </form>


</body>
</html>