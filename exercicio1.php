<?php

/*Faça um sistema que:

tenha uma variável chamada $idade
verifique:
se idade >= 18:
mostrar:
"Pode entrar"
senão:
"Entrada proibida" 
*/

$idade = 18;
$temIngresso = true;

if($idade >= 18 && $temIngresso) {
    echo "Pode entrar";
} else {
    echo "Entrada proibida";
} 

