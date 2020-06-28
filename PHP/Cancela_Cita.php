<?php
require "conexion.php";

$FOLIO = $_POST['folio'];
$NOMBRE = $_POST['nombre'];
$OPC = $_POST['opc'];

if($OPC == 1)
{
    $DELETE = "DELETE FROM citas WHERE folio = $FOLIO and nombre = '$NOMBRE'";
$QUERY = mysqli_query($connection, $DELETE);
if(!$QUERY)
{
echo "No se han podido actualizar los datos";
}
else
{
echo "Datos eliminados correctamente". "<br>";
}

}
else if($OPC == 2)
{
    $DELETE2 = "DELETE FROM citas_familiar WHERE id_familiar = $FOLIO and nombre = '$NOMBRE'";
    $QUERY2 = mysqli_query($connection, $DELETE2);
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