<?php

    include('conexao.php');
    $id_u = $_POST['id_u'];
    $nome_usuario = $_POST['nome'];
    $email_usuario = $_POST['email'];
    $fone_usuario = $_POST['fone'];
    $senha = $_POST['senha'];

    echo "<h1>Alteração de dados </h1>";
    echo "<p>Usuário: $nome_usuario</p>";
    $sql = "UPDATE usuario SET
        nome_usuario = '$nome_usuario',
        email_usuario = '$email_usuario',
        fone_usuario = '$fone_usuario',
        senha = '$senha'
        where id_u = $id_u";

    echo $sql."<br>";
    $result = mysqli_query($con, $sql);
    if($result)
        echo"Dados alterados com sucesso!";
    else
        echo "Erro ao tentar alterar os dados: " . mysqli_error($con)."!";

?>

<a href="index.php">Voltar</a>