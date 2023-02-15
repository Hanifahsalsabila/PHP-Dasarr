<?php 
    function salam($waktu = "Datang", $nama = "Admin") {
        return "Selamat $waktu, $nama!";
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Document</title>
</head>
<body>
   <h1><?= salam("Pagi", "Ruto"); ?></h1> 
</body>
</html>