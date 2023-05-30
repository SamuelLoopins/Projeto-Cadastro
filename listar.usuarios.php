<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="CSS/css-listarUsuarios.css">

    <title>Document</title>
</head>
<body>
    <div class = "Listas">
    <?php
    include('conexao.php');
    $sql = "SELECT * FROM usuario";
    $result = mysqli_query($con, $sql);
    //retorna uma linha
    $row = mysqli_fetch_array($result);
    ?>
    <h1 align = center>Consulta de usuários</h1>
    <table align="center" border="1" width="500">
        <tr>
            <th>Código</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Telefone</th>
        </tr>
        <?php
            do{
                echo "<tr>";
                echo "<td>".$row['id_u']."</td>";
                if($row['foto']=="")echo"<td></td>";
                else echo "<td><img src = '".$row['foto']. "' width='80' height='100'/></td>";
                echo "<td>".$row['nome_usuario']."</td>";
                echo "<td>".$row['email_usuario']."</td>";
                echo "<td>".$row['fone_usuario']."</td>";
                echo "<div class = alterar><td><a href='alterar.usuario.php?id_u=".$row['id_u']."'>Alterar</a></td></div>";
                echo "<td><a href='deletar_usuario.php?id_u=".$row['id_u']."'>Deletar</a></td>";
                echo "</tr>";
            }while($row = mysqli_fetch_array($result))
        ?>
    </table>
    </div>
    <h2 align="center" ><a href="index.php">Voltar</a></h2>
</body>
</html>