<?php

class Persona {

    //atributos
    private $nombre = array ();
    public $edad = array ();
    public $id = array ();

    //metodos

    public function guardar($nombre, $edad, $id){

        $this->nombre[] = $nombre;
        $this->edad[] = $edad;
        $this->id[] = $id;

    }


    public function mostrar() {
        $j = count($this->nombre);

        for ($i = 0; $i < $j; $i++) {
            self::formato($this->nombre[$i], $this->edad[$i], $this->id[$i]);
        }
    }

    public function formato($nombre, $edad, $id){
        echo "Nombre:" . $nombre . "Edad:" . $edad . "ID" . $id . "<br>";
    }

}

$persona = new Persona();
$persona->guardar("Sebastian", "16", 122345);
$persona->guardar("Carlos", "30", 255962);
$persona->mostrar();
echo "yo";
?>
