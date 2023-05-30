<?php

    include("conexao.php");
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $fone = $_POST['fone'];
    $senha = $_POST['senha'];
    
    $compare = "SELECT * FROM usuario WHERE email_usuario = '$email'";
    $result = mysqli_query($con, $compare);
    $row = mysqli_num_rows($result);

    if($row>0){
        echo "<h1>Usuário já cadastrado</h1>";
        echo "<a href='index.php'><h1>Voltar</h1></a>";
        exit();
    }
    else{

    echo "<h1>Dados do Usuário</h1><br>";
    echo "<h3>Nome: $nome</h3><br>";
    echo "<h3>E-mail: $email</h3><br>";
    echo "<h3>Telefone: $fone</h3><br>";
    echo "<h3>Senha: $senha</h3><br>";
    
    $sql = "insert into usuario (nome_usuario, email_usuario,fone_usuario, senha)";
    $sql .= "values ('$nome','$email','$fone','$senha')";

    echo $sql."<br>";
    $result = mysqli_query($con, $sql);
    if($result)
        echo"Dados cadastrados com sucesso!";
    else
        echo "Erro ao tentar cadastrar!" . mysqli_error($con);

    }
?>

<h5><a href = "index.php">Voltar</a></h3>