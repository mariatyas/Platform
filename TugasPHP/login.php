<?php
session_start();
if( isset($_SESSION["login"])){
    header("Location: todolist.php");
    exit;
}

require 'regis.php';

if( isset($_POST["login"]) ){

    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    // cek username
    if( mysqli_num_rows($result) === 1 ){

        // cek password
        $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"]) ){
            //set session
            $_SESSION["login"] = true;
            $_SESSION["userid"] = $row["id"];
            header("Location: todolist.php");
            exit;
        }
    }

    $error = true;
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
    <style>
        label{
            display: block;
        }
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="app">
<h1>Halaman Login</h1>
<?php if( isset($error) ) : ?>
    <p style="color: red; font-style: italic;">username atau password salah</p>
<?php endif; ?>

<form action="" method="post">

    <ul>
        <label for="username">Username :</label>
        <input type="text" name="username" id="username">
    </ul>

    <ul>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password">
    </ul>

    <ul>
        <button type="submit" name="login">Login</button>
    </ul>

</form>
</div>
</body>
</html>
