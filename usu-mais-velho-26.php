<?php 

/* Entrada:
    lista de usuarios

Processamento:
    percorre a lista de usuarios
    verifica qual usuario é mais velho na lista
    salva o resultado na nova variavel

Saída:
    retorna a variavel com usuario mais velho da lista

Padrão: maior valor
Variável principal: $maisVelho
Valor inicial: null
*/

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
function usuarioMaisVelho($usuarios) {

    $maisVelho = null;
    foreach ($usuarios as $usuario) {
        //condição pra guardar o primeiro usuario na $maisVelho pra depois comparar
        if($maisVelho === null){
            $maisVelho = $usuario;
        }

        //condição pra comparar o $maisVelho atual com o usuario Atual.
        if ($usuario["idade"] > $maisVelho["idade"]) {
            $maisVelho = $usuario;
        }
    }
    return $maisVelho;
}

$res = usuarioMaisVelho($usuarios);
var_dump ($res);