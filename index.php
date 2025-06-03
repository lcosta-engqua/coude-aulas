<?php

echo "Hello Wold"; // strings - valores de texto

echo "<br>";

echo 2025;  // int - números inteiros
echo "<br>";
echo 10.57; // float - números com casas decimais

echo "<br>";
echo true; // bool - verdadeiro e falso
var_dump (true); // bool - verdadeiro e falso
echo "<br>";

var_dump (null); // null - sem valor
echo "<br>";
var_dump ([
	"João", 
	2025, 
	0
]); // array - multiplos valores

echo "<br>";

$nome_variavel;

$x = 6;
$y = 8;

$soma = $x + $y;

echo $soma;

echo "<br>";

$nome = "Zerrai Mundo";
$data_nascimento = "1970-01-27";
$endereco = [
	"Rua comendador",
	"Brasil Zil",
	367
];

$pessoa_array_indexado = [
	$nome, $data_nascimento, $endereco
];

var_dump($pessoa_array_indexado);
echo "<br>";
echo $pessoa_array_indexado[0];

echo "<br>";

$pessoa_array_associativo = [
	"nome" => $nome, 
	"data" => $data_nascimento, 
	"endereco" => $endereco
];

echo $pessoa_array_associativo["nome"];
echo "<br>";
echo $pessoa_array_associativo["endereco"][0];
echo "<br>";

/** Zerrai Mundo nasceu em <data>, mora no bairro tal, na rua tal, n x */

//com interpolacão
$mensagem = "{$pessoa_array_indexado[0]} nasceu em $pessoa_array_indexado[1], 
mora no bairro $endereco[1], $endereco[0] número $endereco[2]";

//com concatenação
$mensagem = $nome . " nasceu em " . $data_nascimento . " mora no " . $endereco[1] . " , na " . $endereco[0] . " " . $endereco[2];

echo $mensagem;

echo "<br>";

const NOME = "valor";

echo NOME;

echo "<br>";

//operadores aritméticos
// % mod - resto da divisão (permite identificar se um número é par ou ímpar)
// ** - potência
// ** (1/2) - raiz

//operadore de comparação
var_dump(8 == "8");
echo "<br>";
var_dump(8 != 8);
echo "<br>";
var_dump(0 === false);
echo "<br>";
var_dump(0 !== false);
echo "<br>";

//operadores lógicos
// ! - not negação
// || - ou
// && - e

//estruturaas codicionais


