<?php 

/* 1. Encontrar remetente e destinatário (usar índice)

2. Calcular taxa de 2% sobre o valor

3. Valor real que o destinatário recebe:
   valor - taxa

4. Verificar se remetente tem saldo suficiente (valor total)

5. Se tiver:
    - descontar valor total do remetente
    - adicionar valor líquido ao destinatário

6. Retornar a lista atualizada */

function transferirComTaxa($usuarios, $remetente, $destinatario, $valor) {

    $indiceRemetente = null;
    $indiceDestinatario = null;
    foreach ($usuarios as $indice => $usuario) {
        
        if ($usuario["nome"] === $remetente) {
            $indiceRemetente = $indice;
        }

        if ($usuario["nome"] === $destinatario) {
            $indiceDestinatario = $indice;
        }
    }

    $taxa = $valor * 0.02;
    $valorReal = $valor - $taxa;

    if ($remetente["saldo"]) {
        $usuarios[$indiceRemetente]["saldo"] - $taxa;
        $usuarios[$indiceDestinatario]["saldo"] += $valorReal;
    }
        return $usuarios;
}