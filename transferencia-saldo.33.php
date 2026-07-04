<?php 

/* 1. Encontrar usuário remetente
2. Encontrar usuário destinatário
3. Verificar se remetente tem saldo suficiente
4. Se tiver:
      - desconta do remetente
      - adiciona no destinatário
5. Retorna a lista atualizada */


function transferirSaldo($usuarios, $remetente, $destinatario, $valor) {

    foreach ($usuarios as $indice => $usuario) {
        if ($usuario["remetente"] === $rementente && $usuario["saldo"] > $valor) {
            $usuarios[$indice]["saldo"]--;
        }
        $usuarios[$indice]["saldo"]++;
    }
}

/* Procurar usuário pelo nome

Verificar se está ativo

Verificar se saldo >= 50

Se tudo for verdadeiro:
    sacar 50

Retornar a lista */
function sacarCinquentaSePossivel($usuarios, $nome) {
    
    foreach ($usuarios as $indice => $usuario) {
        
        if ($usuario["nome"]===$nome && $usuario["ativo"] && $usuario["saldo"] >= 50) {
            $usuario[$indice]["saldo"] -= 50;
        }
    }
}

/* Procurar usuário pelo nome

Se encontrar:
    retornar o saldo

Se não encontrar:
    retornar null */

    function buscarSaldoPorNome($usuarios, $nome) {

        foreach($usuarios as $usuario) {
            if ($usuario["nome"]===$nome) {
            return $usuario["saldo"];
            }
        }

        return null;

    }