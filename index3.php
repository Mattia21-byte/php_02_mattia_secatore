<?php

//Crea una variabile di tipo Stringa chiamata $results che stampi a terminare il seguente testo, attraverso l’accesso agli array sopra: “Nel mezzo di cammin di nostra vita mi ritrovai per una selva oscura, che' la diritta via era smarrita“.
$words1 = [
  'vostro',67,'essere','colle','mi','sempre',
['oscura','era',89,['mezzo','E'],'ritrovai','per'],'diritta'];

$words2 = [
  'elemento1' => 25.89,
  'elemento2' => 'possa',
  'elemento3' => ['Virgilio','Favore','favore',
['fortuna']],'fine' => '!'
];

$results = "Nel " . $words1[6][3][0] . " del cammin di nostra vita " . $words1[4] . " " . $words1[6][4] . " per una selva " . $words1[6][0] . ", che' la " . $words1[7] . " via era smarrita";

echo $results;









?>