<?php
require "conexion.php";

$NSS = $_POST['nss'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];
$consultorio = $_POST['consultorio'];
$NCONSULTORIO = $_POST['Nconsultorio'];

$SELECT = "SELECT fecha, hora from citas WHERE hora = '$hora'";
$QUERYS = mysqli_query($connection,$SELECT);
    if(!$QUERYS)
    {
        $INSERT = "INSERT INTO citas(id_user, nombre, nss, fecha_cita, hora, consultorio, Nconsultorio)
            SELECT id_user, nombre,'$NSS', '$fecha', '$hora', '$consultorio', '$NCONSULTORIO' FROM user WHERE NSS = '$NSS'";

        $QUERY = mysqli_query($connection, $INSERT);

            if(!$QUERY)
            {
                echo "$hora";
                echo "$fecha". "<br>";
                echo "<div>";
                echo "<h3>No se pudo registrar la cita</h3>";
                echo '<a href="../MedicoF.html">REGRESAR</a>';
                echo "</div>";
                echo "Error". mysqli_errno($connection);
            }
            else
            {
                echo "<div>";
                echo "<h3>Datos Ingresados</h3>";
                echo '<a href="../menu.html">REGRESAR</a>';
                echo "</div>";
            }
    }
    else
    {
        echo "<div align='center'>";
        echo "<h3>Ya existe una cita programada</h3>";
        echo '<a href="../MedicoF.html">REGRESAR</a>';
        echo "</div>";

    }
?>