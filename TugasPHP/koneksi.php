<?php
$servername = 
$username = 
$password = 
$database =

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error){
    die("Koneksi database gagal: " . $conn->connect_error);
}
echo "Koneksi database berhasil";

$conn->close()
?>