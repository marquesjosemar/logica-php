<?php

$usuarios = [
    [
        "nome" => "Josemar",
        "saldo" => 100
    ],
    [
        "nome" => "Fernando",
        "saldo" => 200
    ],
    [
        "nome" => "Debora",
        "saldo" => 300
    ]
];

/* Percorre a lista
Procura usuário pelo nome

Se encontrar:
    retorna o usuário

Se não encontrar:
    retorna null 
    
    

*/

function buscarUsuarioPorNome($usuarios, $nome) {

    $usuarioEncontrado = null;
    foreach ($usuarios as $usuario) {
        
        if ($usuario["nome"] === $nome) {
            return $usuario;
        } 
        
    }

    return null;
}

/* 
percorre a lista
se existir um usuario com nome escolhido
retorna true, se não, retorna false
*/
function existeUsuarioPorNome($usuarios, $nome) {

    foreach ($usuarios as $usuario) {

        if ($usuario["nome"] === $nome) {
            return true;
        }
    }
    return false;

}

function contarUsuariosAtivos($usuarios) {

    $contador = 0;
    foreach ($usuarios as $usuario) {

        if ($usuario["ativo"]) {
            $contador++;
        }
    }

    return $contador;
}

/* Percorre a lista
Ignora usuários inativos
Soma os saldos dos usuários ativos
Retorna o total */

function somarSaldosUsuariosAtivos($usuarios) {

    $soma = 0;
    foreach ($usuarios as $usuario) {
        
        if ($usuario["ativo"]) {
            $soma += $usuario["saldo"];
        }
    }
    
    return $soma;

    
}


/* Percorre a lista

Conta quantos usuários possuem:

$usuario["saldo"] > 0

Retorna a quantidade */


function contarUsuariosComSaldoPositivo($usuarios) {

    $contador = 0;
    foreach ($usuarios as $usuario) {

        if ($usuario["saldo"] > 0) {
            $contador++;
        }
    }
    return $contador;
}


/* Percorre a lista

Procura o usuário com maior saldo

Retorna o usuário encontrado

Se a lista estiver vazia:
    retorna null */

function buscarUsuarioComMaiorSaldo($usuarios) {

    $usuarioMaiorSaldo = null;
    foreach($usuarios as $usuario) {

        if ($usuarioMaiorSaldo === null) {
            $usuarioMaiorSaldo = $usuario;
}

    }

    Return null;
}


/* 
Percorre a lista

Se encontrar o nome:
    remove o usuário

Retorna a lista
 */

function removerUsuarioPorNome($usuarios, $nome) {

    foreach ($usuarios as $indice => $usuario) {
        
        if ($usuario["nome"] === $nome) {
            unset($usuarios[$indice]);
        }
    }

    return $usuarios;
}

/* 
Percorre a lista

Encontra o usuário pelo nome

Altera:

"ativo" => false

Retorna a lista atualizada */

function desativarUsuarioPorNome($usuarios, $nome) {

    foreach ($usuarios as $indice => $usuario) {
        
        if ($usuario["nome"] === $nome) {
            $usuario[$indice]["ativo"] = "false";
        }
    }
    return $usuarios;
}


/* Percorre a lista

Encontra o usuário pelo nome

Altera:

"ativo" => true

Retorna a lista atualizada */

function ativarUsuarioPorNome($usuarios, $nome) {

    foreach ($usuarios as $indice => $usuario) {
        if ($usuario["nome"] === $nome) {
            
            $usuarios[$indice]["ativo"] = true;
        }
        
    }
    return $usuarios;
}


/* Percorre a lista

Encontra o usuário pelo nome

Soma o valor ao saldo atual

Retorna a lista atualizada */

function depositarSaldoPorNome($usuarios, $nome, $valor) {

    foreach ($usuarios as $indice => $usuario) {
        
        if ($usuario["nome"] === $nome) {
            $usuarios[$indice]["saldo"] += $valor;
        }
    }
    return $usuarios;
}

/* Percorre a lista

Encontra o usuário pelo nome

Subtrai o valor do saldo

Retorna a lista atualizada */

function sacarSaldoPorNome($usuarios, $nome, $valor) {

    foreach ($usuarios as $indice => $usuario) {
        
        if ($usuario["nome"] === $nome) {
            
            if ($usuario["saldo"] >= $valor) {
                $usuarios[$indice]["saldo"] -= $valor;
            }
        }
    }
    return $usuarios;
}


/* Procura o usuário pelo nome

Verifica se está ativo

Se estiver ativo:
    deposita o valor

Se estiver inativo:
    não faz nada

Retorna a lista */

function depositarSaldoUsuarioAtivo($usuarios, $nome, $valor) {

    foreach ($usuarios as $indice => $usuario) {
        
        if ($usuario["ativo"]) {
            $usuarios[$indice]["ativo"] += $valor;
        } else {
            return null;
        }
    }

    return $usuarios;
}