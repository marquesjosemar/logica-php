<?php

/* cadastrarUsuario($usuarios, $nome, $saldo)
Regras
•	Não permitir nome vazio. 
•	Não permitir saldo negativo. 
•	Não permitir cadastrar dois usuários com o mesmo nome. 
•	Todo novo usuário começa: 
o	ativo = true 
o	status = "comum" 
•	Retornar a lista atualizada. 


•  Qual é o objetivo? 
Inserir novo usuário na lista
•  O que preciso descobrir? 
A lista está vazia? Nome está preenchido? Saldo preenchido?
•  O que será alterado? 
A lista de usuarios
•  O que será retornado?
A lista atualizada
Qual é o tipo da função?
atualizaçao
Precisa de índice?
sim
Existe busca?
sim
Escreva o algoritmo.
recebe a lista de usuarios
cria variavel $novoUsuario
lista vazia? nome vazio? saldo é maior ou igual a zero 
se não tiver vazio percorre a lista
verifica se nome já existe na lista
se existir, retorna usuarios
se não, $novoUsuario = {ativo = true 
o	status = "comum"  }
usuarios recebe $novoUsuario
sai do laço
retorna lista atualizada


REGRA OFICIAL:
Nome não pode ser vazio.
Saldo inicial deve ser maior ou igual a zero.
Não permitir dois usuários com o mesmo nome.
Novo usuário começa:
ativo = true
status = "comum"
Em caso de sucesso:
retorna a lista atualizada.
Em caso de erro:
retorna uma mensagem.
se 

Recebe usuários
↓
Nome vazio?
↓
Saldo negativo?
↓
Percorre lista
↓
Nome já existe?
↓
Sim
↓
Retorna erro

Não
↓
Cria novo usuário
↓
Adiciona ao array
↓
Retorna lista
 */

function cadastrarUsuario($usuarios, $nome, $saldo) {
    if (empty($nome) || $saldo < 0 ) {
        return $usuarios;
    } else {

        $novoUsuario = [
        "nome" => $nome,
        "saldo" => $saldo,
        "ativo" => true,
        "status" => "comum"
        ];
        foreach ($usuarios as $usuario) {
            if ($usuario["nome"] === $nome ) {
             return "nome ja existe";
            }
        } 

        $usuarios[] = $novoUsuario;
        return $usuarios;

    }
}  
    

/* Sprint 2
Nova tarefa

Implementar a função:

depositar($usuarios, $nome, $valor)

Regras
O nome não pode estar vazio.
O valor do depósito deve ser maior que zero.
O usuário deve existir.
O usuário deve estar ativo.
Se tudo estiver correto:
adicionar o valor ao saldo.
Em caso de erro:
retornar uma mensagem.
Em caso de sucesso:
retornar a lista atualizada.

Quero que você siga nosso padrão
1. Qual é o objetivo?
- atualizar saldo
2. O que preciso descobrir?
- lista vazia? nome existe? valor > 0?
3. O que será alterado?
- saldo usuario
4. O que será retornado?
- lista atualizada
5. Qual é o tipo da função?
- atualização
6. Precisa de índice?
- sim
7. Existe busca?
- sim
8. Escreva o algoritmo.
recebe: usuarios, nome, valor
nome vazio? valor > 0? 
retorna usuarios
se não
percorre a lista
verifica se usuario encontrado
se sim, verifica se está ativo
se sim, usuario['saldo] += $saldo
retorna lista atualizada
se não, retorna mensagem de erro


9. Escreva a função em PHP. */
    
function depositar($usuarios, $nome, $valor) {

    if (empty($nome) || $valor <=0) {
        return "usuario ou valor invalido";
    }

    foreach ($usuarios as $indice => $usuario) {
        
        if ($usuario["nome"] === $nome) {
            if (!$usuario["ativo"]) {
                return "usuario inativo";
                
            } else {
                $usuarios[$indice]["saldo"] += $valor;
                return $usuarios;
            }
        } 
    }
    return "usuario não encontrado";
}
    
/* Recebe: $usuarios, $nome e $valor.
O nome não pode estar vazio.
O valor deve ser maior que 0.
Procurar o usuário pelo nome.
Se não encontrar, retornar "Usuário não encontrado".
Se encontrar, verificar se está ativo.
Se estiver inativo, retornar "Usuário inativo".
Verificar se o saldo é suficiente.
Se o saldo for menor que o valor do saque, retornar "Saldo insuficiente".
Se tudo estiver correto, diminuir o saldo e retornar a lista atualizada. 

1. Qual é o objetivo?
atualizar o saldo de usuario

2. O que ela recebe?
usuarios, nome, valor

3. O que ela precisa encontrar?
o usuario

4. O que será alterado?
o saldo do usuario

5. Quais validações iniciais são necessárias?
nome vazio? saldo disponivel?

6. Depois de encontrar o usuário, quais regras devem ser verificadas?
verificar se está ativo
verificar se saldo é suficiente

7. O que a função pode retornar?
a lista de usuarios atualizada ou mensagem de erro


-------ALGORITIMO -------------
Recebe usuários, nome e valor.
Se nome for vazio ou valor <= 0
    retorna erro.
Percorre a lista.
Se encontrar o usuário
    Se estiver inativo
        retorna "Usuário inativo".
    Se o saldo for insuficiente
        retorna "Saldo insuficiente".
    Atualiza o saldo.
    Retorna a lista atualizada.
Se terminar o foreach
    Retorna "Usuário não encontrado".
*/


function sacar($usuarios, $nome, $valor) {

    if (empty($nome) || $valor <=0) {
        return "nome inexistente ou valor menor que zero";
    }

    foreach ($usuarios as $indice => $usuario) {
        if ($usuario["nome"] === $nome) {
            if (!$usuario["ativo"]) {
                return "usuario inativo";
            }
            if ($usuario["saldo"] < $valor) {
                return "saldo insuficiente";
            }

            $usuarios[$indice]["saldo"] -= $valor;
            return $usuarios;
        }
    }

    return "usuario não encontrado";

}

//FUNÇÃO TRANSFERIR

/* Função: transferir()

Regras

A função recebe:

$usuarios
$remetente
$destinatario
$valor

Ela deve:

Validar os dados recebidos.
Encontrar o remetente.
Encontrar o destinatário.
Verificar se ambos estão ativos.
Verificar se o remetente possui saldo suficiente.
Retirar o valor do remetente.
Adicionar o valor ao destinatário.
Retornar a lista atualizada.

1. Qual é o objetivo?
- atualizar saldo de remetente e destinatario

2. O que ela recebe?
- lista de usuarios, remetente, destinatario, valor

3. O que ela precisa encontrar?
- remetente, destinatario

4. O que será alterado?
- valor entre remetente e destinatario

5. Quais validações iniciais são necessárias?
remetente vazio? destinatario vazio? 
(Antes do foreach.)

6. Depois de encontrar os usuários, quais regras devem ser verificadas?
- se ambos estão ativos
- remetente possui saldo suficiente

7. O que a função pode retornar?
- lista atualizada

ALGORITMO:
Recebe usuários, remetente, destinatário e valor.
Valida os parâmetros.
Percorre a lista procurando o remetente.
Se encontrar
    guarda o índice.
Percorre a lista procurando o destinatário.
Se encontrar
    guarda o índice.
Se o remetente não foi encontrado
    retorna erro.
Se o destinatário não foi encontrado
    retorna erro.
Se o remetente estiver inativo
    retorna erro.
Se o destinatário estiver inativo
    retorna erro.
Se o saldo do remetente for insuficiente
    retorna erro.
Subtrai o valor do remetente.
Adiciona o valor ao destinatário.
Retorna a lista atualizada.*/

function transferir($usuarios, $remetente, $destinatario, $valor) {

    if (empty($remetente) || empty($destinatario) || $valor <= 0) {
        return "dados invalidos";
    }

    $indiceRemetente = null;
    $indiceDestinatario = null;
    foreach ($usuarios as $indice => $usuario) {
        if ($usuario["nome"] ===$remetente) {
                $indiceRemetente = $indice;
        } 
    }

    

     foreach ($usuarios as $indice => $usuario) {
        if ($usuario["nome"] ===$destinatario) {
                $indiceDestinatario = $indice;
        }
        
     } 
     
    if ($indiceRemetente === null || $indiceDestinatario === null) {
        return "Remetente ou Destinatario não encontrado";
    }
    if (!$usuarios[$indiceRemetente]["ativo"] || !$usuarios[$indiceDestinatario]["ativo"]) {
        return "Usuario não ativo";
    }

    if ($usuarios[$indiceRemetente]["saldo"] < $valor) {
        return "saldo insuficiente";
    } else {
        $usuarios[$indiceRemetente]["saldo"] -= $valor;
    }

    
    $usuarios[$indiceDestinatario]["saldo"] += $valor;
    

    return $usuarios;
}


/* 
Função: buscarUsuario()

Regras

A função recebe:

$usuarios
$nome

Ela deve:

Validar o nome.
Procurar o usuário.
Se encontrar, retornar o usuário.
Se não encontrar, retornar uma mensagem de erro.

Observe que agora não vamos retornar a lista inteira. Vamos retornar apenas um usuário.

Etapa 1 – Análise

Responda apenas estas perguntas.

1. Qual é o objetivo?
- retornar um usuario
2. O que ela recebe?
-usuarios, nome
3. O que ela precisa encontrar?
- usuario
4. O que será alterado?
nada
5. Quais validações iniciais são necessárias?
-lista vazia? nome vazio?
6. O que a função pode retornar? 
- o usuario procurado
*/

function buscarUsuario($usuarios, $nome) {

    if (empty($nome)) {
        return "digite um nome";
    }

    foreach ($usuarios as $usuario) {
        
        if ($usuario["nome"] === $nome) {
            return $usuario;
        }
    }

    return "usuario não encontrado";
}