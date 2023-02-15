<?php 
session_start();
require 'functions.php';

// cek cookie
if( isset($_COOKIE['id']) && isset($_COOKIE['key']) ) {
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM user WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // cek cookie dan username
    if( $key === hash('sha256', $row['username']) ) {
        $_SESSION['login'] = true;
    }
}


if( isset($_SESSION["login"]) ) {
    header("Location: latihan1.php");
    exit;
}



if( isset($_POST["login"]) ) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE 
    username = '$username'");

    // cek username
    if( mysqli_num_rows($result) === 1 ) {

        // cek password
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ) {
            // set session
            $_SESSION["login"] = true;

            // cek remember me
            if( isset($_POST['remember']) ) {
                // buat cookie

                setcookie('id', $row['id'], time()+60);
                setcookie('key', hash('sha256', $row['username']),
                    time()+60);
            }

            header("Location: index.php");
            exit;
        }
    }

    $error = true;

}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
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
	height: 320px;
	border-radius: 20px;
	border-left: 1px;
	border-top: 1px;
	text-align: center;
	position: relative;

}

h1 {
	font-weight: 550px;
	color: #DCDCDC;
	font-size: 25px;
	margin-top: 1px;
	margin-bottom: 60px;

}

input{
	background: #FFF;
	width: 200px;
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
    

    <?php if( isset($error) ) : ?>
        <p style="color: red; font-style: italic;">username / password salah</p>
    <?php endif; ?>
        <form action="" method="post">
        <h1>Login</h1>
                <input type="text" name="username" id="username" placeholder="username">
            <br>
                <input type="password" name="password" id="password" placeholder="password">
            <br>
                <input type="checkbox" name="remember" id="remember"> <br>
                <button type="submit" name="login">Login</button>
    </form>
    </div>
</body>
</html>