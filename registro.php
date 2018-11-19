<?php
require_once("clases/database.php");
require_once("administracionLibro.php");
require_once("clases/Libro.php");
require_once("clases/LibroAutor.php");

$registro = new AdminLibro();
$libro = new Libro();
$libroAutor = new LibroAutor();

//Registro de nuevo Libro
if(isset($_POST['insertaLibro'])){
    $libro->setTitulo($_POST['txtTitulo']);
    $libro->setFechaEdicion($_POST['txtFecha_edicion']);
    
    //Se realiza el registro del libro y se obtiene el ID para el registro de la relaciòn libro/autor
    $idLibro = $registro->registroLibro($libro);
    
    $autores = explode(',',$_POST['autores']);
    
    foreach($autores as $autor){
        $libroAutor->setIdLibro($idLibro);
        $libroAutor->setIdAutor($autor);
        
        $registro->registroLibroAutor($libroAutor->getIdAutor(), $libroAutor->getIdLibro());
    }
        
	header('Location: index.php');
}
?>