<?php
    class Alumno{
        public $nombre;
        public $apellido;
        public $dni;
        public $fechaNacimiento;

        public function __construct($nombre, $apellido, $dni, $fechaNacimiento){
            $this -> nombre = $nombre;
            $this -> apellido = $apellido;
            $this -> dni = $dni;
            $this -> fechaNacimiento = $fechaNacimiento;
        }
    }  
?>