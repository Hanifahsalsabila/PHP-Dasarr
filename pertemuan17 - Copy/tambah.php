<?php
session_start();

if( !isset($_SESSION["login"]) ) {
	header("location: login.php");
	exit;
}

require 'functions.php';

// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"]) ) {
	
	// cek apakah data berhasil di tambahkan atau tidak
	if( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'index.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah data siswa</title>
	<style>
	body{
    background-image: url(img/aa.jpg);
}

.container {
    width: 400px;
	margin: auto;
	margin-top: 130px;
	background-color: #2C5F78;
	border-radius: 20px;
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

input{
	background: #FFF;
	width: 200px;
	padding: 10px;
	margin-bottom: 10px;
	border: none;
	border-left: 1px;
	border-top: 1px;
	border-radius: 500px;
	box-shadow: 4px;
}

label {
	display : block;
}
	</style>
</head>
<body>
	
	<div class="container">
	<form action="" method="post" enctype="multipart/form-data">
	<h1>Tambah data siswa</h1>
		<ul>
			<li>
				<label for="nis">NIS : </label>
				<input type="text" name="nis" id="nis" required>
			</li>
			<li>
				<label for="nama">Nama : </label>
				<input type="text" name="nama" id="nama">
			</li>
			<li>
				<label for="email">Email :</label>
				<input type="text" name="email" id="email">
			</li>
			<li>
				<label for="jurusan">Jurusan :</label>
				<input type="text" name="jurusan" id="jurusan">
			</li>
			<li>
				<label for="gambar">Gambar :</label>
				<input type="file" name="gambar" id="gambar">
			</li>
			<li>
				<button type="submit" name="submit">Tambah Data!</button>
			</li>
		</ul>

	</form>
	</div>
</body>
</html>