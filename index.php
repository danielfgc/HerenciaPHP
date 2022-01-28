<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Actividad herencia</h2>
    <?php

        
        require_once("Padre.php");
        require_once("hijo.php");
        require_once("hija.php");

        // $padre = new Padre("nombre1", 10, 9.95);
        
        // echo "<p>".$padre->nombre."</p>";
        $hijo = new Hijo("Madrid", "hijo2@gmail.com");

        //invocamos la funcion sin instanciar
        Hijo::restaDec(2.5,1.5);

        //sobreescribimos el metodo
        $hijo->saludar("Pepe");

        //llamamos al de la clase padre
        $hijo->saludar("Pepe");
        echo "<p>".$hijo->ciudad."</p>";
        $hijo2 = new Hijo("Valencia","hijo2@gmail.com");

        echo "<p>El hijo 2 vive en ".$hijo2->ciudad." y su email es ".$hijo2->email."</p>";
        
        $hija = new Hija("hola que tal");
        
        $hija->saludar("Manolo");
        $hija->verTareas("urgente");




    
    ?>
</body>
</html>