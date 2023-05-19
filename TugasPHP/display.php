<?php
require 'todo.php';
function display($query){
    global $display;
    $result = mysqli_query($display, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
?>