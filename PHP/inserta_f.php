<?php
require "conexion.php";

$NSSaf = $_POST['NSSaf'];
$NSSpa = $_POST['NSSpa'];
$NOMBRE =$_POST['nombre'];
$APELLIDO = $_POST['apellido'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$consultorio = $_POST['consultorio'];
$NCONSULTORIO = $_POST['Nconsultorio'];

$SELECT = "SELECT fecha, hora from citas_familiar WHERE hora = '$hora'";
$QUERYS = mysqli_query($connection,$SELECT);
    if(!$QUERYS)
    {
        echo "<div align='center'>";
        echo "<h3>Ya existe una cita programada</h3>";
        echo '<a href="../MedicoF.html">REGRESAR</a>';
        echo "</div>";
    }
    else
    {
        $INSERT = "INSERT INTO citas_familiar(NSS_af, NSS_pa, Nombre, Apellido, fecha, hora, consultorio, Nconsultorio) 
        VALUES('$NSSaf', '$NSSpa', '$NOMBRE', '$APELLIDO', '$fecha', '$hora', $consultorio, '$NCONSULTORIO')";

        $QUERY = mysqli_query($connection, $INSERT);

            if(!$QUERY)
            {
                echo "$hora";
                echo "$fecha". "<br>";
                echo "<div>";
                echo "<h3>No se pudo registrar la cita</h3>";
                echo '<a href="../MedicoF.html">REGRESAR</a>';
                echo "</div>";
                echo "Error". mysqli_errno($QUERY);
            }
            else
            {
                echo "<div>";
                echo "<h3>Datos Ingresados</h3>";
                echo '<a href="../menu.html">REGRESAR</a>';
                echo "</div>";
            }
    }
?>