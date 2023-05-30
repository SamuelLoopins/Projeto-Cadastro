<?php

    include('conexao.php');
    $id_u = $_POST['id_u'];

    echo "<h1>Usuário deletado</h1>";
    $sql = "DELETE FROM usuario where id_u = $id_u";

    echo $sql."<br>";
    $result = mysqli_query($con, $sql);
    if($result)
        echo"Dados deletados com sucesso!";
    else
        echo "Erro ao tentar deletar os dados: " . mysqli_error($con)."!";

?>

<a href="index.php">Voltar</a>