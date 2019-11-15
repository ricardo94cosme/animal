<?php
require_once('perro.php');

$perrito=new perro("1","perro mugroso",new animal("01","todos","35kg");
echo $perrito->getid();
echo "<br>";
echo $perrito->getnombre();
echo "<br>";
echo $perrito->gettamaño();
echo "<br>";
echo $perrito->getanimal();