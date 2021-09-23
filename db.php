<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $name = "gd4_10032_f";

    $con = mysqli_connect($host,$user,$pass,$name);

    if(mysqli_connect_error()){
        echo "Failed to connect to MySQL :". mysgli_connect_error();

    }
?>