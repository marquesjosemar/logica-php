/*
Crie um array associativo chamado:
$produto

Com:
nome;
preço;
estoque.

Depois:
exiba cada informação usando echo.
*/

<?php
$produto = [
    "nome" => "pc",
    "preco" => "200",
    "estoque" => 23,
];

echo $produto["nome"] . PHP_EOL;
echo $produto["preco"]. PHP_EOL;

if ($produto["estoque"] > 0 ) {
    echo "Produto disponível";
} else {
    echo "Produto sem estoque";
}