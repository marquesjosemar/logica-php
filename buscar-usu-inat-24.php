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
Entrada
lista de usuarios

Processamento
percorre a lista de usuarios
ignora usuarios ativos
salva apenas usuarios inativos na nova lista

Saída
retorna nova lista com usuarios inativos

Padrão
filtro

Variável principal
$novaLista = []

Valor inicial
[]
 */
function buscarUsuariosInativos($usuarios) {

    $novaLista = [];
    foreach ($usuarios as $usuario) {
        if (!$usuario["ativo"]) {
            $novaLista []= $usuario;
        }
    }

    return $novaLista;

}

$res = buscarUsuariosInativos($usuarios);
var_dump($res);