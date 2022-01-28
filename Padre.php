<?php
abstract class Padre{

    public $nombre;
    protected $unidades;
    private $precio;

    public function __construct(string $nombre,int $unidades, float $precio){
        $this->nombre=$nombre;
        $this->unidades=$unidades;
        $this->precio=$precio;
    }

    public function saludar(string $nombre){
        echo "<p><i>hola buenos dias: ".$nombre."</i></p>";
    }
    public function verTareas(string $salida){
        if(strtoupper($salida) =="URGENTE"){
            echo "<p>Tareas urgentes.</p>";
        }elseif(strtoupper($salida) =="IMPORTANTE"){
            echo "<p>Tareas importantes.</p>";
        }else{
            echo "<p>No hay tareas.</p>";
        }

    }
}