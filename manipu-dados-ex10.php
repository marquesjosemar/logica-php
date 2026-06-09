/*
Crie um array de usuários.
Cada usuário deve ter:
nome;
idade;
ativo (true/false).

Crie pelo menos 4 usuários.
Depois
Mostre apenas usuários:
ativos;
maiores de 18.
DESAFIO EXTRA
Crie função:
usuarioPodeAcessar($usuario)
Ela deve retornar:
true;
false.
E use no foreach.
*/

<?php

$usuarios = [
    [
        "nome" => "josemar",
        "idade" => 29,
        "ativo" => true,
    ],
    [
        "nome" => "fernando",
        "idade" => 20,
        "ativo" => false,
    ],
    [
        "nome" => "debora",
        "idade" => 19,
        "ativo" => true,
    ],
    [
        "nome" => "luciana",
        "idade" => 35,
        "ativo" => true,
    ],


];

function usuarioPodeAcessar($usuario) {

        return $usuario["ativo"] && $usuario["idade"] > 18;
    
}

foreach($usuarios as $usuario) {
    if (usuarioPodeAcessar($usuario)) {
        echo $usuario["nome"] . PHP_EOL;
    }  
}

