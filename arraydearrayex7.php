/*
Crie:

3 produtos;
cada um com:
nome;
preço;
estoque.

Depois:
percorra usando foreach;
exiba:
nome;
preço.
*/

<?php 
$produtos = [
[
    "nome" => 'notebook',
    "preco" => 200,
    "estoque" => 0,
],

[
    "nome" => 'abajour',
    "preco" => 50,
    "estoque" => 20,
],

[
    "nome" => 'forno',
    "preco" => 400,
    "estoque" => 3,
]
];

foreach($produtos as $produto){

    if (produtoDisponivel($produto)) {
        echo $produto["nome"] . PHP_EOL;
        echo $produto["preco"] . PHP_EOL;
    }
    
};



function produtoDisponivel($produto){
    if ($produto["estoque"] > 0) {
        return true;
    };
}