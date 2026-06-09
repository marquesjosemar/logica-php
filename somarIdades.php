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


function somarIdades($usuarios) {

$soma = 0;
    foreach($usuarios as $usuario) {
            $soma += $usuario["idade"];
    }
    return $soma;
}

$resultado = somarIdades($usuarios);

var_dump($resultado);


//somar qtde de usuarios
function somaUsuario($usuarios) {
    
    $contador = 0;
    foreach ($usuarios as $usuario) {
        $contador++;
    }

        return $contador;
}

$res = somaUsuario($usuarios);
var_dump ($res);



#calcular media das idades
function calcularMediaIdades($usuarios) {
    $res = somarIdades($usuarios)/somaUsuario($usuarios);
    return $res;
}

$media = calcularMediaIdades($usuarios);
var_dump($media);