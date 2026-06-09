/*
Você tem esta lista de usuários:

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
Objetivo
Criar uma função chamada:
buscarUsuarioPorNome($usuarios, $nome)
O que a função recebe?
Ela recebe:
A lista de usuários:
$usuarios
Um nome para procurar:
"debora"
O que a função deve fazer?
Ela deve:
percorrer a lista de usuários;
verificar cada usuário;
comparar o nome do usuário com o nome procurado.
O que a função deve retornar?
Se encontrar o usuário:
[
    "nome" => "debora",
    "idade" => 19,
    "ativo" => true,
]
Se NÃO encontrar:
null
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

function buscarUsuarioPorNome($usuarios, $nome) {
    foreach($usuarios as $usuario) {
        if ($usuario["nome"] == $nome) {
            return $usuario["nome"];
        } else{
             null;
        }
    }
}

$exibir = buscarUsuarioPorNome($usuarios, "marcos");

echo $exibir;