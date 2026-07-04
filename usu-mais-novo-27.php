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

function usuarioMaisNovo($usuarios) {

    $maisNovo = null;

    foreach ($usuarios as $usuario) {
        if ($maisNovo === null) {
            $maisNovo = $usuario;
        }

        if ($usuario["idade"] < $maisNovo["idade"]) {
            $maisNovo = $usuario;
        }
    }

    return $maisNovo;
}

$res = usuarioMaisNovo($usuarios);
var_dump($res);