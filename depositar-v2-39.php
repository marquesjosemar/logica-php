<?php 

function depositar($usuarios, $nome, $valor) {

    //validação, se for menor que zero termina a função, evitando processamento desnecessario
    if ($valor <= 0) {
        return $usuarios;
    }

    foreach ($usuarios as $indice => $usuario) {
        
        if ($usuario["nome"] === $nome) {

            //outra validação
            if ($usuario["ativo"]) {
                $usuarios[$indice]["saldo"] += $valor;
            }
            
        }
    }

    return $usuarios;
}