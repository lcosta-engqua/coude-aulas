<?php

try{
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'banco_coude22');

    $conexao = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

}catch(Exception $e){
    die("Não foi possível conectar ao banco de dados!<br>" 
        . $e -> getMessage());
}

// echo "<pre>";
// var_dump($conexao);

function executerInsert($nome, $email, $senha){
	global $conexao;
	$sql = "INSERT INTO usuarios_aula(nome, email, senha) VALUES('$nome', '$email', '$senha')";
	
	$consulta = mysqli_query($conexao, $sql);
	var_dump($consulta);
}

executerInsert("Teste", "teste@teste", "1234");

function executeSelect(){
	global $conexao;
	$sql = "SELECT nome FROM usuarios_aula LIMIT 1";
	$consulta = mysqli_query($conexao, $sql);
	
	$registros = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
	echo "<pre>";
	var_dump($registros);
	var_dump($registros[0]['nome']);
	echo "</pre>";
}

executeSelect();


