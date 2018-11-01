<?php
    require('back-end/clienteDAO.php');

    $banco = new ClienteDAO();
    $banco->DeletarCliente($_GET['value']);
    header('Location: principal.php');
?>