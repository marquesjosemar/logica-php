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
function somarIdadesUsuariosAtivos($usuarios) {
    //filtro
    //$soma = 0;
    $soma=0;
    foreach($usuarios as $usuario) {
        if ($usuario["ativo"]) {
            $soma += $usuario["idade"];
        }
    }
    return $soma;
}

$res = somarIdadesUsuariosAtivos($usuarios);
echo $res;