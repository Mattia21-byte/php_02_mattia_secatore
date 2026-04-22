<?php
//devo creare un esercizio con una password che: 1)abbia almeno 8 o più caratteri, 2) contenga una lettera maiuscola, 3) contenga una minuscola, 4) contenga un numero e 5) contenga un carattere speciale.6)Devo inoltre implementare un metodo che faccia reinserire la password qualora anche una delle regole non fosse rispettata e che, invece, lo interrompa in caso di password accettata visualizzare in console quale regola non è stata rispettata.

//1) almeno 8 o più caratteri
function checkLength($password) {
if (strlen($password) >= 8) {
return true;
}else {

return false;
}
}

//2) deve contenere una lettera maiuscola
function checkUppercase($password) {
for($i = 0; $i < strlen($password); $i++) {
if (ctype_upper($password[$i])) {

return true;
}
}

return false;
}

//3) deve contenere una lettera minuscola
function checkLowercase($password) {
for($i = 0; $i < strlen($password); $i++) {
if (ctype_lower($password[$i])) {

return true;
}
}

return false;
} 


//4) deve contenere un numero
function checkNumber($password) {
for($i = 0; $i < strlen($password); $i++) {
if (is_numeric($password[$i])) {

return true;
}
}

return false;
}

//5) deve contenere un carattere speciale
function checkSpecialCharacter($password) {
$specialCharacters = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '-', '_', '=', '+', '[', ']', '{', '}', '|', ';', ':', '"', "'", '<', '>', ',', '.', '?', '/'];
for($i = 0; $i < strlen($password); $i++) {
if(in_array($password[$i], $specialCharacters)) {

return true;
}
}

return false;
}

//6) devo implementare un metodo che faccia reinserire la password qualora anche una delle regole non fosse rispettata e che, invece, lo interrompa in caso di password accettata visualizzare in console quale regola non è stata rispettata.
function result($password){
if(checkLength($password) && checkUppercase($password) && checkLowercase($password) && checkNumber($password) && checkSpecialCharacter($password)){
return "Password accettata.";

}
return "Password non accettata. Rispettare le regole.";

}


?>