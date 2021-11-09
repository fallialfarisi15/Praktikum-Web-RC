<?php 
    $host = "localhost";
    $user = "root";
    $password = "";
    $db = "mahasiswa";

    $mysql = mysqli_connect($host,$user,$password,$db);
    if ($mysql->connect_error){
        exit('belom nyambung nih');
    }
?>