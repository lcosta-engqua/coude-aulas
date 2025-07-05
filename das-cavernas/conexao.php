<?php

try{
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASS', '');
    define('DB_NAME', 'das_cavernas');
    $conexao = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
}catch(Exception $e){
    die("Não foi possível conectar ao banco de dados!<br>" 
        . $e -> getMessage());
}

// echo "<pre>";
// var_dump($conexao);

if(!empty($_POST['nome']) && !empty($_POST['email']){
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    session_start();
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $senha = '1234';

function executerInsert($nome, $email, $senha){
	global $conexao;
	$sql = "INSERT INTO aluno(nome, email, senha) VALUES('$nome', '$email', '$senha')";
	
	$consulta = mysqli_query($conexao, $sql);
	var_dump($consulta);
}

executerInsert($nome, $email);

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


