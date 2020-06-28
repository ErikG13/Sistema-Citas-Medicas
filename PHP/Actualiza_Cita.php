<?php
require "conexion.php";

$FOLIO = $_POST['folio'];
$NOMBRE = $_POST['nombre'];
$FECHA = $_POST['fecha'];
$HORA = $_POST['hora'];
$NCONSULTORIO = $_POST['nconsultorio'];
$OPC = $_POST['opc'];

if($OPC == 1)
{
    $UPDATE = "UPDATE citas SET nombre = '$NOMBRE', fecha_cita = '$FECHA', hora = '$HORA'
    ,Nconsultorio = '$NCONSULTORIO' WHERE folio = $FOLIO";
$QUERY = mysqli_query($connection, $UPDATE);
if(!$QUERY)
{
echo "No se han podido actualizar los datos";
}
else
{
echo "Datos actualizados correctamente". "<br>";
}

}
else if($OPC == 2)
{
    $UPDATE2 = "UPDATE citas_familiar SET nombre = '$NOMBRE', fecha = '$FECHA', hora = '$HORA'
                ,Nconsultorio = '$NCONSULTORIO' WHERE id_familiar = $FOLIO";
    $QUERY2 = mysqli_query($connection, $UPDATE2);
        if(!$QUERY2)
        {
            echo "No se han podido actualizar los datos";
        }
        else
        {
            echo "Datos actualizados correctamente". "<br>";
        }

}

echo "<div align='center'>";
echo '<a href="../AdminIndex.html">REGRESAR</a>';
echo "</div>";
?>