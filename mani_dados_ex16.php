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

function buscarUsuariosInativos($usuarios) {

$listaNova = [];

foreach ($usuarios as $usuario) {
    if (!$usuario["ativo"]) {
        $listaNova[] = $usuario;
    }
}
return $listaNova;
}

$resultado = buscarUsuariosInativos($usuarios);

var_dump($resultado);

