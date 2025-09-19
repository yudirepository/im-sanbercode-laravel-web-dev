<?php
require_once 'Animal.php';   
require_once 'Ape.php';
require_once 'Frog.php';

$sheep = new Animal("shaun");

echo "Name : ".$sheep->name;        // "shaun"
echo "<br>";
echo "legs : ".$sheep->legs;        // 4
echo "<br>";
echo "cold blooded : ".$sheep->cold_blooded; // "no"
echo "<br>";
echo "<br>";

$kodok = new Frog("buduk");
echo "Name : ".$kodok->name;        
echo "<br>";
echo "legs : ".$kodok->legs;       
echo "<br>";
echo "cold blooded : ".$kodok->cold_blooded;
echo "<br>";
echo "Jump : ".$kodok->jump() ; // "hop hop"
echo "<br>";
echo "<br>";

$sungokong = new Ape("kera sakti");
echo "Name : ".$sungokong->name;        
echo "<br>";
echo "legs : ".$sungokong->legs;       
echo "<br>";
echo "cold blooded : ".$sungokong->cold_blooded;
echo "<br>";
echo "Yell : ".$sungokong->yell(); // "Auooo"
echo "<br>";
echo "<br>";
?>
