<?php
//Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere


//array di utenti
$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
];
foreach ($users as $user) {
  if ($user['gender'] === 'M') {
    echo "Buongiorno Sig. " . $user['name'] . " " . $user['surname'] . "<br>";
  } elseif ($user['gender'] === 'F') {
    echo "Buongiorno Sig.ra " . $user['name'] . " " . $user['surname'] . "<br>";
  } elseif($user['gender'] === 'NB') {
    echo "Buongiorno " . $user['name'] . " " . $user['surname'] . "<br>";
  }


};

?>