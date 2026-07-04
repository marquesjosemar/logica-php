<?php 

/* Percorrer a lista de usuários

Se o usuário estiver ativo E tiver saldo >= 100:
    adicionar 20 ao saldo

Se o usuário estiver ativo E tiver saldo < 100:
    adicionar 10 ao saldo

Retornar a lista atualizada */

function aplicarBonusCondicional($usuarios) {

    foreach ($usuarios as $indice => $usuario) {
        
        if ($usuario["ativo"] && $usuario["saldo"] >=100) {
            $usuarios[$indice]["saldo"] += 20;
        }

        if ($usuario["ativo"] && $usuario["saldo"] <100) {
            $usuarios[$indice]["saldo"] += 10;
        }
    }

    return $usuarios;
}