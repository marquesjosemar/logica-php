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
        "ativo" => true,
    ],
    [
        "nome" => "luciana",
        "idade" => 3,
        "ativo" => true,
    ],
];


function buscarMaioresDeIdade($usuarios) {

$maioresDeIdade = [];

    foreach ($usuarios as $usuario) {
        if ($usuario["idade"] >= 18) {
            $maioresDeIdade[] = $usuario;
            
        }
    }
    return $maioresDeIdade;
}

$resultado = buscarMaioresDeIdade($usuarios);

var_dump ($resultado);
