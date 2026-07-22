<?php
    $servidor = "localhost";
    $user = "root";
    $pass = "";
    $bd = "usuarios";

    $cn = mysqli_connect($servidor, $user, $pass, $bd);
    
    if (!$cn){
        die("No conecto");
    }
    echo("Si se conecto");
?>