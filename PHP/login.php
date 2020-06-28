<?php
require "conexion.php";

$USER = $_POST['user'];
$PASS = $_POST['pass'];

$SELECT = "SELECT  user, pass from user where user = '$USER' and pass = '$PASS'";

$QUERY = mysqli_query($connection, $SELECT);
    if(!$QUERY){
        ECHO "Usuario no encontrado";
    }
    else
    {
        $filas = mysqli_fetch_array($QUERY);
        if($filas[0] == $USER && $filas[1] == $PASS)
        {
            header("Location: ../menu.html");
        }
        else
        {
            echo "Usuario no encontrado";
        }
    }

?>