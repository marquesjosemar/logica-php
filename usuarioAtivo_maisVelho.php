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


buscarUsuarioPorEmail($usuarios, $email)
Entrada
uma lista de usuarios e a variavel email

→ Processamento
percorre a lista de usuarios e verifica se na lista há o email solicitado em $email

→ Saída
retorna o email procurado

→ Padrão
filtro


contarUsuariosInativos($usuarios)
entrada:
uma lista de usuarios
processamento:
percorre a lista de usuarios e verifica se tem usuarios inativos, se sim, incrementa contador
saida:
valor atualizado do contador
padrão:
contagem, filtro

somarSaldoUsuariosAtivos($usuarios)
entrada:
uma lista de usuarios
processamento:
percorrer a lista de usuarios e procurar por usuarios ativos, se tiver, soma o saldo desses usuarios
saida:
retorna o valor somado
padrão:
soma
calcularMediaSalario($funcionarios)
entrada:
uma lista de funcionarios
processamento:
percorrer a lista de funcionarios e somar seus salarios e calcular a media
saida:
retornar a media salarial 
padrão:
media 

funcionarioMaiorSalario($funcionarios)
entrada:
uma lista de funcionarios
processamento:
percorrer uma lista de funcionarios, verificar dentre eles qual tem o maior salario
saida:
retornar o funcionario com maior salario
padrão:
maior...esqueci.


existeUsuarioComEmail($usuarios, $email)
entrada:
uma lista de usuarios e email
processamento:
percorrer a lista de usuarios e verificar se existe o email procurado
saida:
retorna true se encontrar e false senão
padrão:
existencia

desativarUsuario($usuarios, $nome)
entrada:
uma lista de usuarios e nome
processamento:
percorrer a lista de usuarios e verificar se existe o nome procurado, se sim, desativar.
saida:
retorna o nome desativado
padrão:
desativação

buscarFuncionariosComSalarioMaiorQue5000($funcionarios)
entrada:
uma lista de funcionarios
processamento:
percorrer a lista de funcionarios e encontrar o funcionario com salario > 5000
saida:
retornar o funcionario que ganha > 5000
padrão:
busca, filtro