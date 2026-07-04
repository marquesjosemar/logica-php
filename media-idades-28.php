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

/* 
Entrada: lista de usuarios
Processamento:
    percorrer lista
    somar idades e guardar em uma variavel
    somar qntde de usuarios e guardar em uma variavel contador
    calcular media

Saída: valor da media calculada
Padrão: media
Variável principal(is): $soma, $contador
Valor inicial: 0, 0
*/
function calcularMediaIdades($usuarios) {

    $soma = 0;
    $contador = 0;
    foreach ($usuarios as $usuario) {    
            $soma += $usuario["idade"];
            $contador++;
    }

    return $soma / $contador;
}

$res = calcularMediaIdades($usuarios);
echo $res;