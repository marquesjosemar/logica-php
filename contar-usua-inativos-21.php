<?php 
  $usuarios = [
    [
        "nome" => "josemar",
        "idade" => 15,
        "ativo" => true,
    ],
    [
        "nome" => "fernando",
        "idade" => 20,
        "ativo" => false,
    ],
    [
        "nome" => "debora",
        "idade" => 17,
        "ativo" => true,
    ],
    [
        "nome" => "luciana",
        "idade" => 3,
        "ativo" => true,
    ],
];


function contarUsuariosInativos($usuarios) {
//entrada
//lista de usuarios

//processamento
//percorre a lista de usuarios
//ignora usuarios ativos
//incrementa contador

//saida
//retorna valor de contador

//padrão: contagem
//variavel inicial
$contador = 0;

foreach ($usuarios as $usuario) {

    if (!$usuario["ativo"]) {
        $contador++;
    }
}

return $contador;

}

$res = contarUsuariosInativos($usuarios);
echo $res;