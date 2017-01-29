<!DOCTYPE html>
<html>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
	<link rel='stylesheet' type='text/css' href='styles.css' />
    <title>Sistema Automatizado para el Control de los Financiamientos del Sector Agricola</title>
     <?php  
	 		$recibe_pagina=$_GET['p']; ?>  <!--Esta declaración permite el cambio de 	                                              contenidos en los divs dinámicos--->
     <?php require("include_head.php")?>  <!--Este archivo especifica los archivos a                                              incluir en el emcabezado-->
</head>
<body>
<!--INICIO DEL CONTENEDOR-->
<div id="contenedor">
<!--INICIO DE HEADER-->
<div id="cabecera">
<img src="header.png" width="100%">
<img src="banner.png" width="100%">
</div>
<!--FIN DE HEADER-->

<!--INICIO DE MENU-->
<div id='cssmenu'>
<?php 
include ("menu.html"); ?>
</div>
<!--FIN DE MENU-->

<!--INICIO DE CONTENIDO (dinámico)-->
<div id="contenido">
<?php
 require ("sess_i.php");

 switch ($recibe_pagina){ 
 	case "inicio":
   		include ("inicio.php"); 
	break;
	case "productores":
   		include ("productores.php"); 
	break;
	case "productores_nuevo":
   		include ("productores_nuevo.php"); 
	break;
 	case "productores_exist":
   		include ("productores_exist.php"); 
	break;
	case "finan_nuevo":
   		include ("finan_nuevo.php"); 
	break;
	case "finan_seguim":
   		include ("finan_seguim.php"); 
	break;
	case "finan_canc":
   		include ("finan_canc.php"); 
	break;
	case "tecnico_agreg":
   		include ("tecnico_agreg.php"); 
	break;
	case "tecnico_consult":
   		include ("tecnico_consult.php"); 
	break;
	case "report_product":
   		include ("reporte_product.php"); 
	break;
	case "reporte_cosechas":
   		include ("reporte_cosechas.php"); 
	break;
	case "reporte_financ":
   		include ("reporte_financ.php"); 
	break;
	case "reporte_superf_semb":
   		include ("reporte_superf_semb.php"); 
	break;
	case "pe_busq":
   		include ("prodext/pe_busq.php"); 
	break;
	case "agr_upa":
   		include ("prodext/agr_upa.php"); 
	break;
	case "fn_busq":
   		include ("finannuevo/fn_busq.php"); 
	break;
	

default:
	include ("inicio.php"); 

/*
   El switch permite cambiar los segmentos de código que van a cambiar dinamicamente con el contenido, permitiendo tambien la función de "regresar" 
   El ultimo include representa la página por defecto que se incluye en el div, pudiendo tambien quedar vacia
*/
}

 require ("sess_f.php");
 ?>

</div>
<!--FIN DEL CONTENIDO-->

</div>
<!--FIN DEL CONTENEDOR-->

</body>
</html>