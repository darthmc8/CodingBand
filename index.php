<?php
require_once("administracionLibro.php");
require_once("clases/Libro.php");
$admLibro = new AdminLibro();
$listado = $admLibro->listadoLibros();
?>
<html>
<head>
    <title>Pantalla de evaluaciòn de conocimientos</title>
</head>
    <h1>Evaluaci&oacute;n de Conocimientos</h1>
    <b>NOMBRE COMPLETO:</b>&nbsp;MARCO ANTONIO ARCE VILLEGAS
    <br/>
    <b>FECHA:</b>&nbsp;18-NOV-2018
    <br/>
    <b>EMAIL:</b>&nbsp;mc8_2001@hotmail.com
    <br/>
    <b>CELULAR</b>&nbsp;67346271
    <hr />
    <div style="border: #408080;" width="90%" align="center">
        <table>
            <thead>
                <tr>
                    <th colsapan="4">Listado de Libros</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td width="100"><b>T&iacute;tulo:</b></td>
                    <td>
                        <input type="text" id="txtTituloLibro" size="45" maxlength="90" />
                    </td>
                    <td width="100"><b>Autor(es)</b></td>
                    <td>
                        <input type="text" id="txtCantidadAutores" size="6" maxlength="3" />
                    </td>
                </tr>
                <tr>
                    <td><b>Edici&oacute;n</b></td>
                    <td>
                        <input type="text" id="txtFechaEdicionLibro" size="10" maxlength="10" />
                    </td>
                    <td colspan="2" align="center">
                        <input type="button" value="Filtrar" />
                    </td>
                </tr>
                <tr>
                    <td colspan="4"><hr /></td>
                </tr>
                <tr>
                    <th colspan="3">Total Registros encontrados: <?=count($listado);?></th>
                    <th>
                        <a title="Crear Nuevo Registro de Libro" href="creacion.php">Nuevo</a>
                    </th>
                </tr>
                <tr>
                    <td colspan="4" align="center">
                        <table id="tblLibros" border="1" cellpading="0" cellspacing="0" width="600">
                            <thead>
                                <tr>
                                    <th width="100">T&iacute;tulo</th>
                                    <th width="300">Edici&oacute;n</th>
                                    <th width="200">Autores</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach($listado as $libro){
                                ?>
                                <tr>
                                    <td><?=$libro->getTitulo();?></td>
                                    <td><?=$libro->getFechaEdicion();?></td>
                                    <td><?=$libro->getAutores();?></td>
                                </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</html>