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


function atualizarIdade($usuarios, $nome, $novaIdade){

    foreach ($usuarios as $indice => $usuario) {
        if ($usuario["nome"]== $nome) {
            $usuarios[$indice]["idade"] = $novaIdade;
        }
    }
    return $usuarios;
}


$usuariosUp = atualizarIdade(
    $usuarios,
    "debora",
    20
);

print_r ($usuariosUp);