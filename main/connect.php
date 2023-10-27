<?php
    $server = 'localhost';
    $user = 'root';
    $pass = '';
    $database = 'project';

    $conn = new mysqLi($server, $user, $pass, $database);

    // if($conn){
    //     mysqLi_query($conn, "SET NAMES 'utf8' ");
    //     echo 'Kết nối thành công';
    // }
    // else {
    //     echo 'Kết nối thất bại';
    // }
?>