 <!-- <?php 
// variable scope / lingkup variabel
// $x = 10;

// function tampilx() {
//     global $x;
//     echo $x;
// }

// tampilx();

// SUPERGLOBAL
// variabel global milik php
// merupakan Array Associative
// echo $_SERVER["SERVER_NAME"];
?>  -->

<?php 
// $_GET
$mahasiswa = [
    [
    "nama" => "Hanifah Salsabila",
    "nrp" => "043040023",
    "email" => "salsabilahanifah199@gmail.com",
    "jurusan" => "RPL",
    "gambar" => "ali-removebg.jpeg",
    ], 
    [
        "nama" => "Arkana Putra Firmansyah",
        "nrp" => "045042024",
        "email" => "arkanaptr@gmail.com",
        "jurusan" => "TO",
        "gambar" => "nusa.jpeg",
        
    ]
];
?>
<!DOCTYPE html>
<html>
<head>
	<title>GET</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<ul>
<?php foreach( $mahasiswa as $mhs ) : ?>
	<li>
		<a href="latihan2.php?nama=<?= $mhs["nama"]; ?>&nrp=
        <?= $mhs["nrp"]; ?>&email=
        <?= $mhs["email"]; ?>&jurusan=
        <?= $mhs["jurusan"];?>&gambar=
        <?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
	</li>
<?php endforeach; ?>
</ul>


</body>
</html>