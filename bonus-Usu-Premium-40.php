<?php 

// "Os usuários premium recebem um bônus de R$100, mas apenas se estiverem ativos."

function bonusUsuariosPremium($usuarios) {

    if ($usuarios != null) {
        
        foreach ($usuarios as $indice => $usuario) {
            if ($usuario["status"] === "premium" && $usuario["ativo"]) {
                $usuarios[$indice]["saldo"] += 100;
            }
        }
        return $usuarios;
    }
}


/* Recebe a lista, $nome e $valor
Lista está vazia? 
nome vazio?
Valor vazio?

Percorre a lista
Verifica se usuário escolhido existe e se está ativo
Verifica se saldo é maior que $valor
Se sim, diminui $valor do saldo

Retorna lista atualizada
 */

function saque($usuarios, $nome, $valor) {

    if (empty($usuarios) && empty($nome) && empty($valor)) {
        return $usuarios;
    }

    foreach ($usuarios as $indice => $usuario) {
        if ($usuario["nome"] === $nome && $usuario["ativo"]) {
            if ($usuario["saldo"] > $valor) {
                $usuarios[$indice]["saldo"] -=$valor;
            }
        }
    }

    return $usuarios;

}