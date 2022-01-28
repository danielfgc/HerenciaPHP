<?php

class Hijo extends Padre{
    
    public $ciudad = "madrid";
    public string $email = "hijo@gmail.com";

    //la clase hijo tiene el constructor de la clase padre y el suyo propio.
    public function __construct(string $ciudad,string $email ){
        $this->ciudad = $ciudad;
        $this->email -> $email;
    }
    public function saludar(string $nombre){
        echo "<p><i>hola buenos dias soy el hijo : ".$nombre."</i></p>";
        //Para invocar al del padre sería con la siguiente instruccion
        // echo Padre::saludar($nombre);
    }

    //Es necesario declararla static para no instanciarla
    public static function restaDec(float $num1, float $num2){
        echo "<p>La resta de ".$num1." y ".$num2." es ".$num1-$num2."</p>";
    }

}