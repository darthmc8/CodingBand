<?php
require_once("clases/database.php");

class AdminLibro{
    public function __construct(){}
    
    //Registro de un Nuevo Libro
    public function registroLibro($libro){
        $db = DataBase::conectarBaseDatos();
        
        $insert = $db->prepare("INSERT INTO libro VALUES(NULL, '" . $libro->getTitulo() . "', '" . $libro->getFechaEdicion() . "')");
        
        $insert->execute();
        
        return $db->lastInsertId();
    }

    //Registro de relaciòn Libro/Autor
    public function registroLibroAutor($id_autor, $id_libro){
            $db = DataBase::conectarBaseDatos();
            
            $insert = $db->prepare("INSERT INTO autor_libro VALUES(" . $id_autor . ", " . $id_libro . ")");
            
            $insert->execute();
    }
    
    //Listado de Libros registrados
    public function listadoLibros(){
        $db = DataBase::conectarBaseDatos();
        $result = [];
        
        $consulta = "SELECT l.titulo, l.fecha_edicion AS edicion, count(al.id_autor) AS autores
                    FROM autor_libro AS al
                    JOIN libro AS l
                    ON al.id_libro = l.id_libro
                    GROUP BY l.titulo, l.fecha_edicion
                    ORDER BY 1";
        
        $listado = $db->query($consulta);
                    
        foreach($listado->fetchAll() as $libro){
            $miLibro = new Libro();
            $miLibro->setTitulo($libro['titulo']);
            $miLibro->setFechaEdicion($libro['edicion']);
            $miLibro->setAutores($libro['autores']);
            
            $result[] = $miLibro;
        }
        
        return $result;
    }
}
?>