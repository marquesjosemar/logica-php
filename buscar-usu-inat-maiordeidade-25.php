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

function buscarUsuariosInativosMaioresDeIdade($usuarios) {

    $novaLista = [];
    foreach ($usuarios as $usuario) {
        if (!$usuario["ativo"] && $usuario["idade"] > 18) {
            $novaLista []= $usuario;
        }
    }

    return $novaLista;
}

$res = buscarUsuariosInativosMaioresDeIdade($usuarios);
var_dump($res);