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
        return $usuarios;
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
    
}
    




