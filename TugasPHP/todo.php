<?php
$host="localhost";
$user="root";
$pass="";
$database="php_dasar";

$regis=mysqli_connect($host, $user, $pass);
if($regis){
    $buka=mysqli_select_db($regis, $database);
    echo "Database dapat terhubung";
    if(!$buka){
        echo "Database tidak dapat terhubung";
    }
}else{
    echo "MySQL tidak Terhubung";
}