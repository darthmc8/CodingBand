<?php

class Autor{
    private $id_autor;
    private $nombre;
    
    function __construct(){}
    
    public function getIdAutor(){
			return $this->id_autor;
	}

	public function setIdAutor($id_autor){
		$this->id_autor = $id_autor;
	}
    
    public function getNombre(){
			return $this->nombre;
	}

	public function setNombre($nombre){
		$this->nombre = $nombre;
	}
}

?>