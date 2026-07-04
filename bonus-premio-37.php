<?php


/* Percorrer todos os usuários.
Se o usuário estiver ativo, adicionar 10 ao saldo.
Se, após o bônus, o saldo ficar maior ou igual a 1000, incrementar um contador.
Retornar a quantidade de usuários que ficaram com saldo maior ou igual a 1000. */


function aplicarBonusEContarPremium($usuarios) {

    $contador = 0;
    foreach ($usuarios as $indice => $usuario) {
        if ($usuario["ativo"]) {
            $usuarios[$indice]["saldo"] += 10;
        }

        if ($usuarios[$indice]["saldo"] >= 1000) {
            $contador++;
        }
    }

    return $contador;
}

