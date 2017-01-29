<?php

mysql_connect("localhost", "mat", "1234");
mysql_select_db("mat");

$ced=$_POST['ced'];

$cons="SELECT * FROM productores WHERE ced=".$ced;
$consulta=mysql_query($cons);

if ($consulta<1) {
	echo "<h2> Productor No Registrado </h2>";
	}
	else {
		$productor=mysql_fetch_array($consulta);
?>		
<table>
	<tr>
    	<td>Cédula de Identidad:</td>
        <td><?php echo $productor['ced'];?></td>
    </tr>
    <tr>
    	<td>Nombres</td>
        <td><?php echo $productor['nomb'];?></td>
    </tr>
    <tr>
    	<td>Apellidos</td>
        <td><?php echo $productor['apell'];?></td>
    </tr>
    
</table>
<form name="nueva_upa" method="post" action="prodext/agr_upa.php">
<fieldset>
<legend>Agregar UPA</legend>

<input type="hidden" name="ced_prod" value="<?php echo $ced ?>"/>
<table>
	<tr>
        <td>Nombre de la UPA: </td>
        <td><input type="text" name="upa_nomb" /></td>
    </tr>
    
    <tr>
    	<td>Estado:</td>
        <td><?php generaSelect(); ?></td>
    </tr>
    <tr>
    	<td>Municipio:</td>
        <td><select name="municipios" id="municipios"></select></td>
    </tr>
    <tr>
    	<td>Parroquia:</td>
        <td><select name="parroquias" id="parroquias"></select></td>
    </tr>
    <tr>
    	<td>Sector:</td>
        <td><input type="text" name="sector" /></td>
    </tr>
    <tr>
    	<td>Tenencia:</td>
        <td><select name="tenencia" id="tenencia">
        <option value="0" selected="selected">--Seleccione--</option>
        <option value="1">Propia</option>
        <option value="2">Propiedad Pública</option>
        </select></td>
    </tr>
    <tr>
    	<td>Área de la UPA (ha):</td>
        <td><input type="text" name="area_upa" /></td>
    </tr>
    <tr>
    	<td>Colindantes</td>
        <td><input type="text" name="norte" placeholder="Norte" /><br />
        	<input type="text" name="sur" placeholder="Sur" /><br />
            <input type="text" name="este" placeholder="Este" /><br />
            <input type="text" name="oeste" placeholder="Oeste" /><br /></td>
        
</table>
<input type="submit" value="Registrar"/>
<?php		}
	
	?>
	
