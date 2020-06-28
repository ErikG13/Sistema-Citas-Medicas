<?php
require "conexion.php";
$FOLIO = $_POST['folio'];
$NOMBRE = $_POST['nombre'];
$OPC = $_POST['opc'];

if($OPC == 1){
    $SELECT = "SELECT * FROM citas WHERE folio = $FOLIO and nombre = '$NOMBRE'";
    $QUERY = mysqli_query($connection, $SELECT);
        if(!$QUERY)
        {
            echo "No se han podido consultar los datos";
        }
        else
        {
            echo "<table align='center' cellpadding='10' border='1px'>";
            echo "<tr><td>Folio</td><td>Usuario</td><td>Nombre</td><td>NSS</td><td>Fecha cita</td><td>hora</td>
            <td>Consultorio</td></tr>";
            while ($column = mysqli_fetch_array($QUERY))
            {
                echo "<tr>";
                echo "<td>". $column['folio']. "</td>";
                echo "<td>". $column['id_user']. "</td>";
                echo "<td>". $column['nombre']. "</td>";
                echo "<td>". $column['NSS']. "</td>";
                echo "<td>". $column['fecha_cita']. "</td>";
                echo "<td>". $column['hora']. "</td>";
                echo "<td>". $column['consultorio']. "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
}
else if($OPC==2)
{
    $SELECT2 = "SELECT * FROM citas_familiar WHERE id_familiar = $FOLIO and Nombre = '$NOMBRE'";
    $QUERY2 = mysqli_query($connection, $SELECT2);
        if(!$QUERY2)
        {
            echo "No se han podido consultar los datos";
        }
        else
        {
            echo "<table align='center' cellpadding='10' border='1px'>";
            echo "<tr><td>Folio</td><td>NSS afiliado</td><td>NSS paciente</td><td>Nombre</td><td>Apellido</td>
            <td>Fecha</td><td>Hora</td><td>Consultorio</td></tr>";
            while ($column2 = mysqli_fetch_array($QUERY2))
            {
                echo "<tr>";
                echo "<td>". $column2['id_familiar']. "</td>";
                echo "<td>". $column2['NSS_af']. "</td>";
                echo "<td>". $column2['NSS_pa']. "</td>";
                echo "<td>". $column2['Nombre']. "</td>";
                echo "<td>". $column2['Apellido']. "</td>";
                echo "<td>". $column2['fecha']. "</td>";
                echo "<td>". $column2['hora']. "</td>";
                echo "<td>". $column2['consultorio']. "</td>";
                echo "</tr>";
            }
            echo "</table>";
        }
}

echo "<div align='center'>";
echo '<a href="../AdminIndex.html">REGRESAR</a>';
echo "</div>";

?>