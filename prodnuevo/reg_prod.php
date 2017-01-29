<?php
mysql_connect("localhost", "mat", "1234");
mysql_select_db("mat");

$ced=$_POST['ced'];
$nomb=$_POST['nomb'];
$apell=$_POST['apell'];
$t1=$_POST['telf1'];
$t2=$_POST['telf2'];

if ($_POST['direc']=="UPA") {
	$dir=$_POST['direc'];
	} else {
		$dir=$_POST['direccion'];
		}

$sql1="INSERT INTO productores (ced, nomb, apell, t1, t2, direc) VALUES ($ced, '$nomb', '$apell', $t1, $t2, '$dir')";
mysql_query ($sql1);

$nomb_upa=$_POST['upa_nomb'];
$estado=$_POST['estados'];
$municipio=$_POST['municipios'];
$parroquia=$_POST['parroquias'];
$sector=$_POST['sector'];
$tenencia=$_POST['tenencia'];
$area=$_POST['area_upa'];
$norte=$_POST['norte'];
$sur=$_POST['sur'];
$este=$_POST['este'];
$oeste=$_POST['oeste'];


$sql2="INSERT INTO upa (ced_prod, nomb_upa, estado, municipio, parroquia, sector, tenencia, area, norte, sur, este, oeste) VALUES ($ced, '$nomb_upa', $estado, $municipio, $parroquia, '$sector', '$tenencia', $area, '$norte', '$sur', '$este', '$oeste')"; 
mysql_query ($sql2);


 $mensaje="Registro Exitoso";
 print "<script>alert('$mensaje')</script>";
 print("<script>window.location.replace('http://localhost/mat/index.php?p=inicio');</script>"); 

?>