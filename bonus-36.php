<?php

/* Percorrer a lista de usuários

Se o usuário estiver ativo:
    adicionar 10 ao saldo
    contar +1 usuário atualizado

Se o usuário NÃO estiver ativo:
    não fazer nada

Retornar a quantidade de usuários que receberam bônus */

function aplicarBonusEClassificar($usuarios) {

$contador = 0;

    foreach ($usuarios as $indice => $usuario) {

        if ($usuario["ativo"]) {
            $usuarios[$indice]["saldo"] += 10;
            $contador++;
        } else {
            return null;
        }
    }
    return $contador;

}


function listarUsuariosAtivos($usuarios) {

    $usuariosAtivos = [];

    foreach ($usuarios as $usuario) {

        $usuarios[] = $usuariosAtivos;

    }

    return $usuariosAtivos;
}