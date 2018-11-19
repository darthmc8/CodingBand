<?php
    class DataBase{
        private static $conexion = NULL;
        
		private function __construct (){}

        public static function conectarBaseDatos(){
            $opciones[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
			self::$conexion = new PDO('mysql:host=localhost;dbname=libreria', 'root', 'M@rcocho', $opciones);
			return self::$conexion;
        }
        
        public static function cerrarConexion(){
            $conexion = mysql_close();
        }
    }
?>