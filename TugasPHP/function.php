<?php
require 'todo.php';

function createList($database){
    $bedaUser = $_SESSION["userid"];
    global $conn;
    $kegiatan = $database["kegiatan"];
    $status = "Belum Selesai";

    $query = "INSERT INTO todolist (userId, kegiatan, status) VALUES ('$bedaUser', '$kegiatan', '$status')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function deleteList($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM todolist WHERE id = $id");
    return mysqli_affected_rows($conn);
}

function updateList($id){
    global $conn;
    $query = "UPDATE todolist SET status = 'Selesai' WHERE id = $id";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

?>
