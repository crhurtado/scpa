<fieldset>
<legend>Nuevo Productor</legend>
<form name="nuevo_p" method="post" action="prodnuevo/reg_prod.php">
<table>
	<tr>
    	<td>Cédula de Identidad</td>
        <td><input type="text" name="ced" /></td>
    </tr>
    <tr>
    	<td>Nombres</td>
        <td><input type="text" name="nomb" /></td>
    </tr>
    <tr>
    	<td>Apellidos</td>
        <td><input type="text" name="apell" /></td>
    </tr>
    <tr>
    	<td>Teléfono Principal</td>
        <td><input type="tel" name="telf1" /></td>
    </tr>
    <tr>
    	<td>Teléfono Secundario</td>
        <td><input type="tel" name="telf2" /></td>
    </tr>
    <tr>
    	<td>Dirección de Vivienda</td>
        <td><select name="direc" onchange="activartext()" id="dir">
        	<option value="">---------</option>
        	<option value="UPA">UPA</option>
            <option value="OTRA">OTRA</option>
        </select>
        </td>
    </tr>
    <tr>
    	<td colspan="2">
        <input type="text" name="direccion" id="textotras" hidden="true" size="40" placeholder="Indique dirección"/>
        </td>
    </tr>
    
</table>
</fieldset>
<fieldset>
<legend>Agregar UPA</legend>
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
</fieldset>
<input type="submit" value="Registrar"/>
</form>
