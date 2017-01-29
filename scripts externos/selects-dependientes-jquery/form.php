<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Selects dependientes con jQuery.</title>
        <script type="text/javascript" src="jquery-1.4.2.min.js"></script>
        
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
        
        <?php 
            function generaSelect()
            {
                include 'conexion.php';
                conectar();
                $consulta=mysql_query("SELECT id, opcion FROM select_1");
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
    </head>

    <body>
        <form>
            <?php generaSelect(); ?>
            <select name="municipios" id="municipios"></select>
            <select name="parroquias" id="parroquias"></select>
        </form>
    </body>
</html>