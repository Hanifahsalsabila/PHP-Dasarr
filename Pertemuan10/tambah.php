<?php
require 'functions.php';

// cek apakah tombol submit sudah ditekan stau belum
if( isset($_POST["submit"])) {


 
    // cek apakah data berhasil di tambahkan atau tidak
    if( tambah($_POST) > 0 )  {
    echo "
        <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'latihan1.php';
        </script>
        ";
    } else {
        echo "
        <script>
            alert('data gagal ditambahkan!');
            document.location.href = 'latihan1.php';
        </script>
        ";
    }
 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tambah data siswa</title>
</head>
<body>
    <h1>Tambah data siswa</h1>
    
    <form action="" method="post">
        <ul>
            <li>
                <label for="nis">NIS : </label>
                <input type="text" name="nis" id="nis" 
                required>
            </li>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama">
            </li>
            <li>
                <label for="email">email :</label>
                <input type="text" name="email" id="email">
            </li>
            <li>
                <label for="jurusan">jurusan :</label>
                <input type="text" name="jurusan" id="jurusan">
            </li>
            <li>
                <label for="gambar">gambar :</label>
                <input type="text" name="gambar" id="gambar">
            </li>
            <br>
            <li>
                <button type="submit" name="submit">Tambah Data!</button>
            </li>
        </ul>

    </form>


</body>
</html>