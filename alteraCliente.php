<?php
    include('includes/conexao.php');
    $id = $_GET['id'];
    $sql = "SELECT * FROM Cliente WHERE id=$id";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
</head>
<body>
    <form action="alteraClienteExe.php" method="post">
    <fieldset>
        <legend>Cadastro de clientes</legend>
    <div>
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" 
        value="<?php
                    echo $row['nome'];
                ?>
        ">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" 
        value="<?php
                    echo $row['email'];
                ?>
        ">
        <label for="senha">Senha</label>
        <input type="text" name="senha" id="senha" 
        value="<?php
                    echo $row['senha'];
                ?>
        ">
    </div>
    <div>
        <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
    </div>
    <div>
        <button type="submit">Alterar</button>
    </div>
    </fieldset>
</form>
</body>
</html>