<?php
function conectar()
{
	mysql_connect("localhost", "root", "");
	mysql_select_db("mat");
}

function desconectar()
{
	mysql_close();
}
?>