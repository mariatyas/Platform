<?php

session_start();
//menghapus session
$_SESSION = [];
session_unset();
session_destroy();
header("Location: awal.php");
exit;

?>