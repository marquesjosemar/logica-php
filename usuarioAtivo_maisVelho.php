<?php 

function usuarioAtivoMaisVelho($usuarios)
{
    $usuarioAtivoMaisVelho = null;

    foreach ($usuarios as $usuario) {

        // usuário é ativo?
        if ($usuario["ativo"] == false) {
             continue;
        } else {
            $usuarioAtivoMaisVelho = $usuario;
        }

        // ainda não existe mais velho?
        if ($usuario["idade"] < $usuarioAtivoMaisVelho["idade"]) {
            $usuarioAtivoMaisVelho = $usuario["idade"];
        }

        // comparar idade
        if ($usuarioAtivoMaisVelho > $usuario) {
            
        }

    }

    return ...;
}