<?php
//variabili
$text1 = "Marco";
$text2 = "hai";
$text3 = "sete";
$text4 = "?";
$text5 = "Perchè";
$text6 = $text2;
$text7 = "bevuto";
$text8 = "tutto";

//con metodo della concatenazione
echo $text1 . " " . $text2 . " " . $text3 . $text4 . " " . $text5 . " " . $text6 . " " . $text7 . " " . $text8 . ".";
echo "<br>";

//con echo implode
$frase = [$text1, $text2, $text3 . $text4, $text5, $text6, $text7, $text8];
echo implode(" ", $frase) . ".";

?>