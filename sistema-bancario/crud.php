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

se 
 */

function cadastrarUsuario($usuarios, $nome, $saldo) {
    
}