<?php

$usuarios = [
    [
        "nome" => "Josemar",
        "saldo" => 100
    ],
    [
        "nome" => "Fernando",
        "saldo" => 200
    ]
];

Função:// buscarUsuarioPorNome($usuario, $nome)

/* Entrada:
lista de usuarios

Processamento:
percorre a lista
se encontrar o nome procurado
retornar nome

Saída:
retornar nome procurado

Padrão:
busca

Variável principal:
$nomeEncontrado

Valor inicial:
null */

function buscarUsuarioPorNome($usuarios, $nome) {

    $usuarioEncontrado = null;
    foreach($usuarios as $usuario) {
        if ($usuario["nome"] === $nome) {
            $nomeEncontrado = $usuario;
        }
    }
     
    return $usuarioEncontrado;

}


/* Entrada:
lista de usuarios

Processamento:
percorre a lista
se encontrar o nome procurado
retornar true senão false

Saída:
retornar true ou false

Padrão:
existencia

Variável principal:
$nome

Valor inicial:
null */
function existeUsuarioPorNome($usuarios, $nome) {

    foreach ($usuarios as $usuario) {
        if ($usuario["nome"] === $nome) {
            return true;
        } 
    }
    return false;
}
/* 
Lista de usuários e idade

Percorre a lista
Se existir algum usuário com idade maior ou igual a 18:
    retorna true

Se não existir:
    retorna false */


function existeUsuarioMaiorDeIdade($usuarios) {

    foreach ($usuarios as $usuario) {
        if ($usuario["idade"] >= 18) {
            return true;
        }
    }
    return false;
}

