<?php

//variabili
$integer = 10;
$float = 12.3;
$string = "Hello";
$boolean = false;

//stampo il dato
var_dump($integer);
echo "<br>";
var_dump($float);
echo "<br>";
var_dump($string);
echo "<br>";
var_dump($boolean);

//trasformo in costanti
define("MY_INTEGER", 10);
define("MY_FLOAT", 12.3);
define("MY_STRING", "Hello");
define("MY_BOOLEAN", false);

//stampo il dato
var_dump(MY_INTEGER);
echo "<br>";
var_dump(MY_FLOAT);
echo "<br>";
var_dump(MY_STRING);
echo "<br>";
var_dump(MY_BOOLEAN);
?>