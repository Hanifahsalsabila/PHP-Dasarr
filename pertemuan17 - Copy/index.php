<?php 
session_start();

if( !isset($_SESSION["login"]) ) {
	header("location: login.php");
	exit;
}

require 'functions.php';
$siswa = query("SELECT * FROM siswa");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
	$siswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Halaman Admin</title>
	<style>
		body {
    background-image: url(img/aa.jpg);
	
}
 
.container {
    width: 800px;
    border-radius: 8px;
    box-shadow: 5px rgba(0,0,0,.3);
    margin: auto;
    border: 3px solid;
	margin-top: 90px;
    margin-bottom: 100px;
    padding: 25px;
    background-color: #fff;
}
h1 {
	text-align: center;
	margin-top: 2px;
	margin-bottom: 20px;
}
a:link {
  color: #2C5F78;
  background-color: transparent;
  text-decoration: none;
}
label {
    display: block;
}
	</style>
	
</head>
<body>
<div class="container">
<a href="logout.php">Logout</a>

<h1>Daftar siswa</h1>

<a href="tambah.php">Tambah data siswa</a>
<br><br>

<form action="" method="post">

	<input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian.." autocomplete="off">
	<button type="submit" name="cari">Cari!</button>
	
</form>

<br>
<table border="1" cellpadding="10" cellspacing="0">

	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>NIS</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Jurusan</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach( $siswa as $row ) : ?>
	<tr>
		<td><?= $i; ?></td>
		<td>
			<a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
			<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('apakah kamu yakin?');">hapus</a>
		</td>
		<td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
		<td><?= $row["nis"]; ?></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["email"]; ?></td>
		<td><?= $row["jurusan"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
	
</table>

</div>
</body>
</html>