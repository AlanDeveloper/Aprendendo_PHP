<?php
    require('back-end/clienteDAO.php');
    require('back-end/cliente.php');
    session_start();

    $banco = new ClienteDAO();
    $cli = new Cliente($_POST['nome'], $_POST['cpf'], $_POST['email']);
    $banco->AtualizarCliente($cli, $_SESSION['codigo']);
    header('Location: principal.php');
?>