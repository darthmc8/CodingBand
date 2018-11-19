<?php
require_once("clases/database.php");

class AdminAutores{
    
    public function __construct(){}    
    
    //Listado de Libros registrados
    public function listadoAutores(){
        $db = DataBase::conectarBaseDatos();
        $result = [];
        
        $consulta = "SELECT id_autor, nombre
                    FROM autor
                    ORDER BY 1";
        
        $listado = $db->query($consulta);
                    
        foreach($listado->fetchAll() as $autor){
            $miAutor = new Autor();
            $miAutor->setIdAutor($autor['id_autor']);
            $miAutor->setNombre($autor['nombre']);
            
            $result[] = $miAutor;
        }
        
        return $result;
    }
}
?>