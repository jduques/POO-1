<?php

    class Vehiculo{

        //ATRIBUTOS
        public $motor = false;
        public $marca;
        public $color;

        //METODOS
        public function estado(){
            if($this->motor){
                echo "El motor esta encendido<br>";
            
            }else{
                echo "El motor esta apagado<br>";
            }
       }

       public function encender(){
            if($this->motor){
                echo "Cuidado, el motor ya esta encendido<br>";
            }else{
                echo "El motor ahora esta encendido<br>";
                $this->motor = true;
            }
       }
    }

    class Moto extends Vehiculo{

        public function estadoMoto(){
            $this->estado();
        }
    }


    class Cuatrimoto extends Moto{

        
    }
    
    //$vehiculo = new Vehiculo();
    //$vehiculo->estado();
    //$vehiculo->encender();
    //$vehiculo->estado();

    //$moto = new Moto();
    //$moto->estadoMoto();
    //$moto->encender();
    //$moto->estado();

    $moto = new Cuatrimoto();
    $moto->estado();
    $moto->encender();
    $moto->estado();    
?>