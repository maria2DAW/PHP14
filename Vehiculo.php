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


class Camion{
                
    var $ruedas;
    var $color;
    var $motor;

    //Constructor 
    function Camion()
    {
        $this->ruedas = 8;
        $this->color = "gris";
        $this->motor = 2600;
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
}
