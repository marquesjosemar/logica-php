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
        "ativo" => false,
    ],
    [
        "nome" => "luciana",
        "idade" => 3,
        "ativo" => true,
    ],
];

function somarIdadesUsuariosInativos($usuarios) {
//entrada
//lista de usuarios

//processamento
//percorre a lista 
//ignora usuarios ativos
//se tiver usuarios inativos
//variavel soma recebe e acumla valor de usuario inativo

//saida
//retorna valor de soma

/* 
Padrão: soma
Variável principal: soma
Valor inicial: 0
*/
    $soma = 0;
    foreach($usuarios as $usuario){
        if (!$usuario["ativo"]) {
            $soma += $usuario["idade"];
        }
    }
  return $soma;
}

$res = somarIdadesUsuariosInativos($usuarios);
echo $res;