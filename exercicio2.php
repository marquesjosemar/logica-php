/*
Crie um sistema simples de acesso.

Regras:

O usuário pode entrar se:

for admin
OU
tiver assinatura ativa.
*/

<?php 

$ehAdmin = false;
$assinaturaAtiva = true;
$usuarioBloqueado = false;

if(($ehAdmin || $assinaturaAtiva) && !$usuarioBloqueado) {
    echo "Pode entrar";
} else {
    echo "Acesso negado";
}

