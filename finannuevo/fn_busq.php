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
		
$cons2="SELECT * FROM upa WHERE ced_prod=".$ced;
$consulta2=mysql_query($cons2);

if ($consulta2<1) {
	echo "<h2> Productor Sin UPA registrada </h2>";
	}
	else {
		$upas=mysql_fetch_array($consulta2);
	}
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


<fieldset>
<legend>Nuevo Financiamiento</legend>
<form name="nuevo_f" method="post">
<input type="hidden" name="ced" value="<?php echo $ced ?>"/>
<table>
	<tr>
    	<td>UPA Asociada</td>
        <td><select name="upa" id="upa">
        	<option value="">--Seleccione--</option>
            <?php
			while($upa)
                {
                    echo "<option value='".$upa['id']."'>".$upa['nomb_upa']."</option>";
                } ?>
        </select>
        </td>
    </tr>
    
    <tr>
    	<td>Institución</td>
        <td><select name="institucion" id="institucion">
        	<option value="" selected="selected">--Seleccione--</option>
            <option value="BAV">Banco Agricola de Venezuela</option>
            <option value="FOND">FONDAS</option>
            <option value="AP">Agropatria</option>
        </select>
        </td>
    </tr>
    
    <tr>
    	<td>Tipo de Financiamiento</td>
        <td><select name="tipo" id="tipo">
        	<option value="" selected="selected">--Seleccione--</option>
            <option value="1">Monetario</option>
            <option value="2">Insumos</option>
            <option value="3">Ambos</option>
        </select>
        </td>
    </tr>
    
    <tr>
        <td>Monto Aprovado: </td>
        <td><input type="text" name="monto_f" /></td>
    </tr>
    
    <tr>
    	<td>Insumo:</td>
        <td><select name="insumo" id="insumo">
        	<option value="">--Seleccione--</option>
        </select></td>
    </tr>
    <tr>
    	<td>Estatus:</td>
        <td><select name="estatus_f" id="estatus_f">
        <option value="">--Seleccione--</option>
        </select></td>
    </tr>
    <tr>
    	<td>Rubro:</td>
        <td><select name="rubro" id="rubro">
        <option value="">--Seleccione--</option></select></td>
    </tr>
    <tr>
    	<td>Hectareas Beneficiadas:</td>
        <td><input type="text" name="ha_benef" /></td>
    </tr>
    
    <tr>
    	<td>Fecha de Liquidación:</td>
        <td><input type="text" name="fec_liq" /></td>
    </tr>
    <tr>
    	<td>Fecha de Vencimiento:</td>
        <td><input type="text" name="fec_venc" /></td>
    </tr>
    
    <tr>
    	<td>Producción estimada:</td>
        <td><input type="text" name="fec_venc" /></td>
    </tr>
    
    <tr>
    	<td>Colocación de la Producción:</td>
        <td><select name="colocacion" id="colocacion">
        <option value="">--Seleccione--</option></select></td>
    </tr>
    
    
    <tr>
    	<td>Técnico de la Institución</td>
        <td><input type="text" name="ced" placeholder="Cédula" /><br />
        	<input type="text" name="nomb" placeholder="Nombres" /><br />
            <input type="text" name="apell" placeholder="Apellidos" /><br />
            <input type="text" name="telf" placeholder="Telefono" /><br /></td>
        
</table>
</fieldset>
<input type="submit" value="Enviar"/>
</form>




<?php		}
	
	?>
	
