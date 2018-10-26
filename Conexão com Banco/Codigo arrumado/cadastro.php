<?php
    require('back-end/clienteDAO.php');
    require('back-end/cliente.php');

    $cliente = new Cliente();
    $banco = new ClienteDAO();

    $banco->AdicionarCliente($_POST['nome'],$_POST['cpf'],$_POST['email']);
    echo var_dump($_POST['nome']);
    // $banco->ObterClientes();
?>

<!DOCTYPE html>
<html lang="en">
<head>  
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro</title>
</head>
<body>
    <h3>Cadastro</h3>
    <for action="cadastro.php" method="post">
        <label for=""></label>
        <input type="text" name="nome" placeholder="Nome">
        <label for=""></label>
        <input type="number" name="cpf" placeholder="xxx.xxx.xxx-xx">
        <label for=""></label>
        <input type="email" name="email" placeholder="...@...">
        <button type="submit">Enviar</button>
    </form>
</body>
</html>