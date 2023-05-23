<?php
    //create connection database
    $conn = mysqli_connect("localhost", "root", "", "php_dasar");

    if (!$conn){
        die("Koneksi tidak berhasil" . mysqli_connect_error());
    }
?>
