<?php
    $user = "root";
    $pass = "";
    $host = "localhost";
    $datab = "hospital_angeles";

    $connection = mysqli_connect($host, $user, $pass);
    $db = mysqli_select_db($connection, $datab);
    if(!$db)
    {
        echo "No se ha podido conectar con la DB";
    }
   
?>