/*
Crie uma função chamada:
verificarIdade

Ela deve:
receber idade;
verificar:
se >= 18:
"Maior de idade"
senão:
"Menor de idade"
*/

<?php 

function verificarIdade($idade) {
    if ($idade >= 18) {
        return "Maior de idade";
    } else {
        return "menor de idade";
    }

}

echo verificarIdade(34);