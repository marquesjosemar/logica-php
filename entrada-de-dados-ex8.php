/*
Crie um sistema simples que:
peça nome;
peça idade.

Depois:
se idade >= 18:
mostrar:
"Nome pode entrar"

Senão:
"Nome não pode entrar"

DESAFIO EXTRA
Crie função:
podeEntrar($idade)

Ela retorna:
true;
false.

E use ela no sistema.
*/

<?php
$nome = readline("Digite seu nome: ");
$idade = readline("Digite sua idade: ");

function podeEntrar($idade) {
    return $idade >= 18;    
}

if (podeEntrar($idade)) {
        echo $nome . " Pode entrar";
    } else {
        echo $nome . " Não pode entrar";
    }


