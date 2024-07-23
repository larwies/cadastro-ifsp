<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
        include('includes/conexao.php');
        $sql = "SELECT * FROM Cliente";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
    ?>

    <h1>Consulta de clientes</h1>
    <a href="cadastroCliente.html">Cadastrar novo cliente</a>
    <table align="center" border="1" width="700">
    <tr>
        <th>Código</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Senha</th>
        <th>Alterar</th>
        <th>Deletar</th>
    </tr>
    <?php
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['nome']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['senha']."</td>";
            echo "<td><a href='alteraCliente.php?id="
            .$row['id']."'>Alterar</a></td>";
            echo "<td><a href='deletaCliente.php?id="
            .$row['id']."'>Deletar</a></td>";
            echo "<tr>";
        }
    ?>
    </table>
</body>
</html>