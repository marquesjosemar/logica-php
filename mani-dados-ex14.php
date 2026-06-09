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
function removerUsuario($usuarios, $nome)
{
    foreach ($usuarios as $indice => $usuario) {
        if ($usuario["nome"] == $nome) {
            unset($usuarios[$indice]);
        }    
    }

    return $usuarios;
}

$usuarioDeletado = removerUsuario($usuarios,"fernando");

var_dump($usuarioDeletado);
