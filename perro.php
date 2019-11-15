<?php
require_once('animal.php');
class perro extends animal{
    private $tamaño;
 
 public function __construct($id,$nombre,$animal,$tamaño)
 {
    parent::__construct($id,$nombre,$animal);
    $this->tamaño=$tamaño;
 }
 public function gettamaño(){
     return $this->tamaño; 
 }
}
