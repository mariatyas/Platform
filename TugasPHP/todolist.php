<?php

session_start();
$lainuser = $_SESSION["userid"];
if(!isset($_SESSION["login"])){
    header("Location: todolist.php");
    exit;
}



?>

<!DOCTYPE html>
<html>
<head>
    <title>To Do List</title>
</head>
<body>
    <h2>To Do List</h2>
    <form action="" method="POST">
        <label for="nama"></label> 
        <input type="text" id="nama" placeholder="<Teks to do>"/>
        <input type="submit" name="simpan" value="Tambah"/>
    </form>
</body>
</html>