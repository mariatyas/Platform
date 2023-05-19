<?php
session_start();
require 'todo.php';
require 'function.php';
require 'display.php';
global $conn;

$bedauser = $_SESSION["userid"];
if( !isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

if(isset($_POST["submit"])){
    if(createList($_POST) > 0){
        echo "succes add data";
    }else{
        echo "fail add data";
    }
}

if(isset($_GET["delete"])){
    $id = $_GET["delete"];
    if(deleteList($id) > 0){
        echo "succes delete data";
    }else{
        echo "fail delete data";
    }
}

if(isset($_GET["update"])){
    $id = $_GET["update"];
    if(updateList($id) > 0){
        echo "succes update data";
    }else{
        echo "fail update data";
    }
}
$query = "SELECT * FROM todolist";
$resultTudu = display($query);

?>

<!DOCTYPE html>
<html>
<head>
    <title>To Do List</title>
</head>
<body>
    <div class="formtudu">
        <br><br>
        <form action="" method="post">
            <label for="kegiatan">Kegiatan Baru: </label>
            <input type="text" name="kegiatan">
            <button type="submit" name="submit">Tambah Data</button>
        <br><br>
        </form>

        <table border="1" cellpading="10" cellspacing="0" align="center">
            <tr>
                <th>ID</th>
                <th>List Kegiatan</th>
                <th>Status</th>
            </tr>

            <?php $a = 1; ?>
            <?php foreach ($resultTudu as $elemen) : ?>
            <tr>
                <td><?= $a ?></td>
                <td><?= $elemen["kegiatan"] ?></td>
                <td><?= $elemen["status"] ?></td>
                    <a href="?update=<?= $elemen["id"] ?>">Selesai</a>
                    <a href="?hapus=<?= $elemen["id"] ?>">Hapus</a>
                </td>
            </tr>
            <?php $a++; ?>
            <?php endforeach; ?>
        </table>
    </div>
    <br><br>

    <div class="tombolOut">
        <a style="text-align: right;" href="logout.php">Logout</a>
    </div>

    <div class="footer">
        <p class="copy">TugasPlatformPHP</p>
    </div>
</body>
</html>
