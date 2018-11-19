<?php
require_once("administracionAutores.php");
require_once("clases/Autor.php");
$admAutor = new AdminAutores();
$listado = $admAutor->listadoAutores();
?>
<html>
<head>
    <title>Registro de Nuevo Libro</title>
</head>
<body>
    <h1>Registro de nuevo libro en Base de Datos</h1>
    
    <form method="POST" action="registro.php" id="frmRegistro" name="frmRegistro">
        <table>
    		<tr>
    			<td>T&iacute;tulo del libro:</td>
    			<td><input type="text" name="txtTitulo"></td>
                <td width="25">&nbsp;</td>
                <td rowspan="2" valign="top">
                    <div align="center">
                        <b>Lista de Autores</b>
                    </div>
                    <table width="100%" align="center" id="tblAutores" border="1" cellpading="0" cellspacing="0">
                        <tr>
                            <th>Nombre</th>
                            <th>&nbsp;</th>
                        </tr>
                        <?php
                        foreach($listado as $autor){
                        ?>
                        <tr>
                            <td><?=$autor->getNombre();?></td>
                            <td align="center">
                                <input type="hidden" id="idAutor" value="<?=$autor->getIdAutor();?>" />
                                <input type="checkbox" id="chkAutor" name="chkAutor" />
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                </td>
    		</tr>
    		<tr valign="top">
    			<td>Edici&oacute;n:</td>
    			<td><input type="text" name="txtFecha_edicion" ></td>
    		</tr>
    		<input type="hidden" name="insertaLibro" value="insertaLibro">
            <input type="hidden" name="autores" id="autores" />
    	</table>
    	<input type="button" value="Guardar" onclick="enviaRegistro()">
    </form>
    
    <a href="index.php" title="Regresar a la pagina inicial">Regresar</a>
</body>
<script type="text/javascript">
function enviaRegistro(){
    valorAutores = "";
    
    for (i = 0; i < document.frmRegistro.elements["chkAutor"].length; i++) {
        chkAutor = document.frmRegistro.elements["chkAutor"][i];
        //alert(chkAutor.checked);
        if(chkAutor.checked == true){
            //alert("ingresa");
            idAutor = document.frmRegistro.elements["idAutor"][i].value;
            if(valorAutores.length > 0){
                valorAutores = valorAutores + ",";
            }
            valorAutores = valorAutores + idAutor;
        }
    }
    
    //alert(valorAutores);
    document.getElementById("autores").value = valorAutores;
    //alert(document.getElementById("autores").value);
    document.getElementById("frmRegistro").submit();
}
</script>
</html>