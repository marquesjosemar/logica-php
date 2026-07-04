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

function contarUsuariosInativosMaioresDeIdade($usuarios) {

    $contador = 0;
    foreach ($usuarios as $usuario) {
        if (!$usuario["ativo"] && $usuario["idade"] >= 18) {
            $contador++;
        }
    }

    return $contador;
}

$res = contarUsuariosInativosMaioresDeIdade($usuarios);
echo $res;