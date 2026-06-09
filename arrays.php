/*Crie um array com 5 frutas.

Depois:

percorra usando foreach
exiba cada fruta.

*/

<?php 

$frutas = ["maçã", "banana", "melancia", "laranja", "jaboticaba"];

foreach ($frutas as $fruta) {

    if ($fruta[0] == "m" ) {
        echo $fruta . PHP_EOL;
    }
    
}


