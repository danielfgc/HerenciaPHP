<?php

class Hija extends Padre{
   public string $mensaje;

   public function __construct(string $mensaje){
       $this->mensaje = $mensaje;
   }
}