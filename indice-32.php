<?php 

/* 
Procura o usuário pelo nome

Verifica se está ativo

Se estiver ativo:
    adiciona 50 ao saldo

Retorna a lista */


function adicionarBonusUsuarioAtivo($usuarios, $nome) {


    foreach ($usuarios as $indice =>$usuario) {
        
        if ($usuario["nome"]===$nome && $usuario["ativo"]) {
            $usuarios[$indice]["saldo"] += 50;
        }
    }

    return $usuarios;
}

/* Procura o usuário pelo nome

Verifica se está ativo

Verifica se o saldo é menor que 100

Se as duas condições forem verdadeiras:
    adiciona 30 ao saldo

Retorna a lista */

function adicionarBonusUsuarioAtivoMenorQueCem($usuarios, $nome) {


    foreach ($usuarios as $indice =>$usuario) {
        
        if ($usuario["nome"]===$nome && $usuario["ativo"] && $usuario["saldo"] < 100) {
            $usuarios[$indice]["saldo"] += 30;
        }
    }

    return $usuarios;
}