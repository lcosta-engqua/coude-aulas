<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro do aluno</title>
</head>
<body>
    <pre>
        <form action="cadastro.php" method="post">
            <label for="nome">Nome completo</label>
            <input type="text" name="nome" id="nome" required>
            <!-- <label for="data">Data de nascimento</label>
            <input type="date" name="data" id="" required> -->
            <label for="escolaridade">Nível de escolaridade</label>
            <select name="escolaridade" id="" required>
                <option value="nenhum">Selecione uma opção</option>
                <option value="medio">Ensimo médio</option>
                <option value="graduacao">Graduação</option>
                <option value="pos">Pós Graduação</option>
                <option value="mestrado">Mestrado</option>
                <option value="doutorado">Doutorado</option>
            </select>
            
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" required>

            <!-- <label for="telefone">Telefone</label>
            <input type="tel" name="telefone" id="" required> -->

            <input type="submit" value="Cadastrar">
            <input type="submit" value="Voltar">
        </form>
    </pre>
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
        

        function executerInsert($nome, $email, $senha){
        global $conexao;
        $sql = "INSERT INTO aluno(nome, email, senha) VALUES('$nome', '$email', '$senha')";
        
        $consulta = mysqli_query($conexao, $sql);
        var_dump($consulta);
        }
        $nome = $_POST['nome'];
        $email = $_POST['email'];

        executerInsert($nome, $email, "1234");
    ?>
</body>
</html>