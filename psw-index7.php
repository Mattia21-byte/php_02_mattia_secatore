<?php

require "./index7.php";


//ciclo do/while per rendere continuativa la richiesta della password finché non è valida, quando è valida, il ciclo si interrompe e viene stampato "Password valida"
do {
    $password = readline("Inserisci la tua password: ");
    $isValid = true;
    if(!checkLength($password)) {
        echo "La password deve contenere almeno 8 caratteri.\n";
        $isValid = false;
    } if (!checkUppercase($password)) {
        echo "La password deve contenere almeno una lettera maiuscola.\n";
        $isValid = false;
    } if (!checkLowercase($password)) {
        echo "La password deve contenere almeno una lettera minuscola.\n";
        $isValid = false;
    } if (!checkNumber($password)) {
        echo "La password deve contenere almeno un numero.\n";
        $isValid = false;
    } if (!checkSpecialCharacter($password)) {
        echo "La password deve contenere almeno un carattere speciale.\n";
        $isValid = false;
    } if (!$isValid) {
        echo "Password non valida, reinserire.\n";
        
    }
    
} while (!$isValid);

echo "Password valida. \n";

?>