<?php

class LibroAutor{
    private $id_libro;
    private $id_autor;
    
    function __construct(){}
    
    public function getIdLibro(){
			return $this->id_libro;
	}

	public function setIdLibro($id_libro){
		$this->id_libro = $id_libro;
	}
    
    public function getIdAutor(){
			return $this->id_autor;
	}

	public function setIdAutor($id_autor){
		$this->id_autor = $id_autor;
	}
}

?>