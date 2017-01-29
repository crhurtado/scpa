<?php 
mysql_connect("localhost", "mat", "1234");
mysql_select_db("mat");
print_r ($_POST);

$ced=$_POST['ced_prod'];
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


$sql="INSERT INTO upa (ced_prod, nomb_upa, estado, municipio, parroquia, sector, tenencia, area, norte, sur, este, oeste) VALUES ($ced, '$nomb_upa', $estado, $municipio, $parroquia, '$sector', $tenencia, $area, '$norte', '$sur', '$este', '$oeste')"; 
mysql_query ($sql);


 $mensaje="Registro Exitoso";
 print "<script>alert('$mensaje')</script>";
 print("<script>window.location.replace('http://localhost/mat/index.php?p=inicio');</script>"); 
 
 ?>