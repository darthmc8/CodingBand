<?php

class Libro{
    private $id_libro;
    private $titulo;
    private $fecha_edicion;
    private $cantidad_autores;
    
    function __construct(){}
    
    public function getId(){
			return $this->id_libro;
	}

	public function setId($id_libro){
		$this->id_libro = $id_libro;
	}
    
    public function getTitulo(){
			return $this->titulo;
	}

	public function setTitulo($titulo){
		$this->titulo = $titulo;
	}
    
    public function getFechaEdicion(){
			return $this->fecha_edicion;
	}

	public function setFechaEdicion($fecha_edicion){
		$this->fecha_edicion = $fecha_edicion;
	}
    
    public function getAutores(){
			return $this->cantidad_autores;
	}

	public function setAutores($cantidad_autores){
		$this->cantidad_autores = $cantidad_autores;
	}
}

?>