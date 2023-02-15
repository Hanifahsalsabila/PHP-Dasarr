<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("location: login.php");
	exit;
}
require 'functions.php';

// ambil data di URL
$id = $_GET["id"];

// query data siswa berdasarkan id
$sw = query("SELECT * FROM siswa WHERE id = $id")[0];


// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil diubah atau tidak
	if( ubah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			</script>
		"; 
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah data siswa</title>
	<style>
	body{
        background-image: url(img/aa.jpg);
}

.container {
    width: 400px;
	margin: auto;
	margin-top: 130px;
	background-color: #2C5F78;
	border-radius: 8px;
	padding: 10px;
}

h1 {
	font-weight: 550px;
	font-size: 25px;
	text-align: center;
	margin-top: 20px;
	margin-bottom: 40px;
	color: #DCDCDC;
}

label {
	display : block;
}



	</style>
</head>
<body>
	<div class="container">
	<form action="" method="post" enctype="multipart/form-data">
	<h1>Ubah data siswa</h1>
		<input type="hidden" name="id" value="<?= $sw["id"]; ?>">
		<input type="hidden" name="gambarLama" value="<?= $sw["gambar"]; ?>">
		<ul>
			<li>
				<label for="nis">NIS : </label>
				<input type="text" name="nis" id="nis" required value="<?= $sw["nis"]; ?>">
			</li>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama" value="<?= $sw["nama"]; ?>">
			</li>
			<li>
				<label for="email">Email :</label>
				<input type="text" name="email" id="email" value="<?= $sw["email"]; ?>">
			</li>
			<li>
				<label for="jurusan">Jurusan :</label>
				<input type="text" name="jurusan" id="jurusan" value="<?= $sw["jurusan"]; ?>">
			</li>
			
			<li>
				<label for="gambar">Gambar :</label>
				<img src="img/<?= $sw['gambar']; ?>" width="55"><br>
				<input type="file" name="gambar" id="gambar">
			</li>
			<br>
			<li>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>

	</form>



	</div>
</body>
</html>