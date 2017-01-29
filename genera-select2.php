<?php

include 'conexion.php';
conectar();

$consulta = "SELECT * from parroquias WHERE id_municipio = ".$_GET['id'];
$query = mysql_query($consulta);
while ($fila = mysql_fetch_array($query)) {
    echo '<option value="'.$fila['id_parroquia'].'">'.$fila['parroquia'].'</option>';
};

?>