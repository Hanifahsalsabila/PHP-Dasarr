<?php
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
				document.location.href = 'latihan1.php';
			</script>
		"; 
	} else {
		echo "
			<script>
				alert('data gagal diubah!');
				document.location.href = 'latihan1.php';
			</script>
		";
	}


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah data siswa</title>
</head>
<body>
	<h1>Ubah data siswa</h1>

	<form action="" method="post" enctype="multipart/form-data">
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
			<br>
			<li>
				<label for="gambar">Gambar :</label>
				<img src="img/<?= $sw['gambar']; ?>" width="55"> <br>
				<input type="file" name="gambar" id="gambar">
			</li>
			<br>
			<li>
				<button type="submit" name="submit">Ubah Data!</button>
			</li>
		</ul>

	</form>




</body>
</html>