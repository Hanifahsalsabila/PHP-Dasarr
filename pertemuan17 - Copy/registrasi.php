<?php
require 'functions.php';

if( isset($_POST["register"]) ) {


    if( registrasi($_POST) > 0 ) {
        echo "<script>
                alert('user baru berhasil ditambahkan!');
              </script>";
    } else {
        echo mysqli_error($conn); 
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <style>
        body{
            background-image: url(img/aa.jpg);
}

.container {
    width: 300px;
    border-radius: 8px;
    box-shadow: 5px rgba(0,0,0,.3);
    margin: auto;
	margin-top: 70px;
    margin-bottom: 80px;
    padding: 30px;
}
form{
	background: #2C5F78;
	padding: 30px;
	height: 300px;
	border-radius: 20px;
	border-left: 1px;
	border-top: 1px;
	text-align: center;
	position: relative;

}

h1 {
	font-weight: 500px;
	color: #DCDCDC;
	font-size: 25px;
	margin-top: 5px;
	margin-bottom: 60px;

}

input{
	background: #FFF;
	width: 180px;
	padding: 10px;
	margin-bottom: 20px;
	border: none;
	border-left: 1px;
	border-top: 1px;
	border-radius: 500px;
	box-shadow: 4px;


}

    </style>
</head>
<body>
<div class="container">


<form action="" method="post">
<h1>Halaman Registrasi</h1>
            
            <input type="text" name="username" id="username" placeholder="username">
            <br>
            <input type="password" name="password" id="password" placeholder="password">
            <br>
            <input type="password" name="password2" id="password2" placeholder="konfirm password">
            <br>
            <button type="submit" name="register">Register</button>

</form>
</div>
</body>
</html>