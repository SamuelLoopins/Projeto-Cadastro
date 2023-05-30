<?php

    include('conexao.php');
    $id_u = $_GET['id_u'];
    $sql = "SELECT * FROM usuario WHERE id_u=$id_u";
    $result = mysqli_query($con,$sql);
    $row = mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Cadastro de Usuários - IFSP</h1>
    <form action="altera_usuario_exe.php" method="post">
        <input name="id_u" type="hidden" value="<?php echo $row['id_u']?>">
        <div>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome" value="<?php echo $row['nome_usuario'];?>">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?php echo $row['email_usuario'];?>">
        </div>
        <div>
            <label for="fone">Telefone</label>
            <input placeholder="(18)99999-8888" type="tel" name="fone" id="fone" pattern="\([0-9]{2}\)[0-9]{5}-[0-9]{4}" value="<?php echo $row['fone_usuario'];?>">
        </div>
        <div>
            <label for="senha">Senha</label>
            <input type="number" name="senha" id="senha" value="<?php echo $row['senha'];?>">
        </div>
        <input type="submit" value="Salvar">
    </form>

    <a href="index.php">Voltar</a>
    
</body>
</html>