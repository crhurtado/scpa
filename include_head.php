<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<?php
header('Content-Type: text/html; charset=UTF-8');
?>
<script type="text/javascript" src="js/funciones.js"></script>
<script type="text/javascript" src="js/validaciones.js"></script>
<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<?php 
            function generaSelect()
            {
                include 'conexion.php';
                conectar();
                $consulta=mysql_query("SELECT id_estado, estado FROM estados");
                desconectar();
            
                // Voy imprimiendo el primer select compuesto por los paises
                echo "<select name='estados' id='estados' onChange='cargaContenido(this.id)'>";
                echo "<option value='0'>Elige</option>";
                while($registro=mysql_fetch_row($consulta))
                {
                    echo "<option value='".$registro[0]."'>".$registro[1]."</option>";
                }
                echo "</select>";
            }
            ?>
			
<script language="JavaScript" type="text/JavaScript">
	$(document).ready(function(){
		$("#estados").change(function(event){
			var id = $("#estados").find(':selected').val();
			$("#municipios").load('genera-select.php?id='+id);
		});
	});
</script>

<script language="JavaScript" type="text/JavaScript">
	$(document).ready(function(){
		$("#municipios").change(function(event){
			var id = $("#municipios").find(':selected').val();
			$("#parroquias").load('genera-select2.php?id='+id);
		});
	});
</script>