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
function executeSelect(){
	global $conexao;
	$sql = "SELECT * FROM aluno ORDER BY data_cadastro DESC LIMIT 1";
	$consulta = mysqli_query($conexao, $sql);
	
	$registros = mysqli_fetch_all($consulta, MYSQLI_ASSOC);
	// echo "<pre>";
	// var_dump($registros);
	// var_dump($registros[0]['nome']);
	// print_r($registros[0]['nome']);
	// echo "</pre>";

    echo "Dados do aluno";
    echo "<pre>";
    print_r("Nome: " . $registros[0]['nome']);
    echo "<br>";
    print_r("E-mail: " . $registros[0]['email']);
    echo "<br>";
}



// session_start();


// print_r("Data de nascimento: " . $_SESSION['data']);
// echo "<br>";
// print_r("Escolaridade: " . $_SESSION['escolaridade']);
// echo "<br>";
// print_r("E-mail: " . $_SESSION['email']);
// echo "<br>";
// print_r("Telefone: " . $_SESSION['telefone']);

executeSelect();

session_start();

echo "Dados do aluno";
echo "<pre>";
print_r("Nome: " . $_SESSION['nome']);
echo "<br>";
print_r("Data de nascimento: " . $_SESSION['data']);
echo "<br>";
print_r("Escolaridade: " . $_SESSION['escolaridade']);
echo "<br>";
print_r("E-mail: " . $_SESSION['email']);
echo "<br>";
print_r("Telefone: " . $_SESSION['telefone']);

?>

<form action="home.php" method="post">
    <input type="submit" value="Voltar">
</form>
