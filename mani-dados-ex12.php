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

//entrada
//crie uma função
function adicionarUsuario($usuarios, $nome, $idade, $ativo) {

//Processamento
//Criar um novo usuário e adicionar à lista.
    $novoUsuario = [
        "nome" => $nome,
        "idade" => $idade,
        "ativo" => $ativo,
    ];

    $usuarios[] = $novoUsuario;

    return $usuarios;

}

$usuarioadd [] = adicionarUsuario($usuarios, "marcos", 25,true);

var_dump ($usuarioadd);

