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

function contarUsuariosAtivos($usuarios) {
  //lista de usuarios


    $contador = 0;
    //percorrer a lista de usuarios e verifica se tem usuario ativo, se sim, incrementa contador. 
    foreach($usuarios as $usuario){
        if ($usuario["ativo"]) {
            $contador++;
        }
    };
  
  //retorna contador
    return $contador;
};
$res = contarUsuariosAtivos($usuarios);
echo $res;