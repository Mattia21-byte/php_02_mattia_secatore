<?php
//Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array

$numbers = [1, 12, 34, 36, 37, 58, 41, 6, 99, 102, 106, 3, 33, 31, 86, 88, 40, 71, 51, 32, 90];


$sum = 0;
$count = 0;

foreach ($numbers as $number) {
    if ($number % 2 == 0) {
        $sum += $number;
        $count++;
    }
}

if ($count > 0) {
    $media = $sum / $count;
    echo "La media dei numeri pari è: " . $media;
} else {
    echo "Non ci sono numeri pari nell'array.";
}

?>