<?php

require "./index7.php";

$password = readline("Inserisci la tua password: ");

result($password);

//ciclo do/while per rendere continuativa la richiesta della password finché non è valida, quando è valida, il ciclo si interrompe e viene stampato "Password valida"
do {
    if(!checkLength($password)) {
        echo "La password deve contenere almeno 8 caratteri.\n";
    } elseif (!checkUppercase($password)) {
        echo "La password deve contenere almeno una lettera maiuscola.\n";
    } elseif (!checkLowercase($password)) {
        echo "La password deve contenere almeno una lettera minuscola.\n";
    } elseif (!checkNumber($password)) {
        echo "La password deve contenere almeno un numero.\n";
    } elseif (!checkSpecialCharacter($password)) {
        echo "La password deve contenere almeno un carattere speciale.\n";
    } else {
        echo "Password valida.\n";
        break;
    }
} while (true);

?>