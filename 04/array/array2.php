<?php 
// $mahasiswa = [
// ["Sandhika Galih", "043040023", "sandhikagalih@unpas.ac.id", "Teknik Informatika"],
// ["033040001", "Doddy Ferdiansyah", "doddy@gmail.com", "Teknik Industri"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
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
	<title>Daftar Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>

	<?php foreach( $mahasiswa as $mhs ) : ?>
		<ul>
			<li>
				<img src="img/<?= $mhs["gambar"]; ?>">
			</li>
			<li>Nama : <?= $mhs["nama"]; ?></li>
			<li>NRP : <?= $mhs["nrp"]; ?></li>
			<li>Jurusan : <?= $mhs["jurusan"]; ?></li>
			<li>Email : <?= $mhs["email"]; ?></li>
		</ul>
	<?php endforeach; ?>




</body>
</html>