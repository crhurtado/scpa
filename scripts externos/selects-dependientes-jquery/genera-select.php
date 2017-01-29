<?php

include 'conexion.php';
conectar();

$consulta = "SELECT * from select_2 WHERE relacion = ".$_GET['id'];
$query = mysql_query($consulta);
while ($fila = mysql_fetch_array($query)) {
    echo '<option value="'.$fila['id'].'">'.$fila['opcion'].'</option>';
};

?>