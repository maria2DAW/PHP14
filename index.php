<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>POO en PHP</title>
    </head>
    <body>
        <?php
        
            //include 'Vehiculo.php';
            
            include 'Vehiculo_Herencia.php';
            
            $renault = new Coche();
            $mazda = new Coche();
            $seat = new Coche();

            //Llamada a un método de la clase en una instancia;
            $mazda->girar();
            
            echo "<br />";
            
            echo $mazda->ruedas;
            
            echo "<br /><br />";
            
            $renault->establece_color("Rojo", "Renault");
            echo "<br /><br />";
            $seat->establece_color("Azul", "Seat");
            
            $pegaso = new Camion();
            echo "<br /><br />";
            
            echo "El Mazga tiene ".$mazda->ruedas." ruedas";
            echo "<br /><br />";
            
            echo "El Pegaso tiene ".$pegaso->ruedas." ruedas";
            
            //------HERENCIA-------
            
            echo "<br /><br />";
            
            $pegaso->frenar();
            
            echo "<br /><br />";
            
            $pegaso->arrancar();
        ?>
    </body>
</html>
