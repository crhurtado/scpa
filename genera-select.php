<?php

include 'conexion.php';
conectar();

$consulta = "SELECT * from municipios WHERE id_estado = ".$_GET['id'];
$query = mysql_query($consulta);
while ($fila = mysql_fetch_array($query)) {
    echo '<option value="'.$fila['id_municipio'].'">'.$fila['municipio'].'</option>';
};

?>