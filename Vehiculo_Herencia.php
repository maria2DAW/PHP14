<?php

class Coche{
                
    var $ruedas;
    var $color;
    var $motor;

    //Constructor 
    function Coche()
    {
        $this->ruedas = 4;
        $this->color = "";
        $this->motor = 1600;
    }

    function arrancar()
    {
        echo 'Estoy arrancando';
    }

    function girar()
    {
        echo 'Estoy girando';
    }

    function frenar()
    {
        echo 'Estoy frenando';
    }

    function establece_color($color_coche, $nombre_coche)
    {
        $this->color = $color_coche;
        echo "El color de ".$nombre_coche." es: ".$this->color;
    }
}

//-------------------------------------------------------------------


//Para hacer que la clase "Camion" herede de la clase "Vehiculo" se utiliza la palabra reservada "extends"
class Camion extends Coche{

    //Constructor 
    function Camion()
    {
        $this->ruedas = 8;
        $this->color = "gris";
        $this->motor = 2600;
    }
    
    //Sobreescribir métodos
    function establece_color($color_camion, $nombre_camion)
    {
        $this->color = $color_camion;
        echo "El color de ".$nombre_camion." es: ".$this->color;
    }
    
    function arrancar() {
        //Con esto indicamos que lo primero que haga sea ejecutar el método de la clase padre
        parent::arrancar();
        
        echo "Camión arrancado.";
    }
}
