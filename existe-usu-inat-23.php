<?php 

  $usuarios = [
    [
        "nome" => "josemar",
        "idade" => 15,
        "ativo" => true,
    ],
    [
        "nome" => "fernando",
        "idade" => 20,
        "ativo" => false,
    ],
    [
        "nome" => "debora",
        "idade" => 17,
        "ativo" => false,
    ],
    [
        "nome" => "luciana",
        "idade" => 3,
        "ativo" => true,
    ],
];
/*  ENTRADA:
    lista de usuarios

    PROCESSAMENTO:
    percorre a lista
    ignora usuarios ativos

    SAÍDA:
    retorna true ou false

    PADRÃO: existencia
    VARIAVEL INICIAL:
    VALOR VARIAVEL:
 */

function existeUsuarioInativo($usuarios) {
    foreach ($usuarios as $usuario) {
        if (!$usuario["ativo"]) {
            return true;
        }
    }
    return false;
}

$res = existeUsuarioInativo($usuarios);
var_dump($res);