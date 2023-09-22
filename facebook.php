<?php

    class Facebook{

        //atributos
        public $nombre;
        public $edad;
        private $pass;  //contraseña

        //metodos
        public function __construct($nombre, $edad, $pass){
            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->pass = $pass;
            
        }

        public function verInfo(){
            echo "Nombre:" . $this->nombre . "<br>";
            echo "Edad:" . $this->edad . "<br>";
            echo "Password:" . $this->pass;
            
        }
    }

    $facebook = new Facebook("Sebastian Duque", 16, "2745");    
    //echo $facebook->pass;
    //$facebook->verInfo();

?>