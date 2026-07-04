<?php 
/* 
ENTRADA: 

VALIDAÇÃO:

PROCESSAMENTO:

SAÍDA
*/
function depositar($usuarios, $nome, $valor) {

    foreach($usuarios as $indice => $usuario) {
        if (!$usuarios && !$usuario["nome"] && !$valor > 0) {
            break;
        } else {
            $usuarios[$indice]["saldo"] += $valor;
        }
    }

    return $usuarios;

}