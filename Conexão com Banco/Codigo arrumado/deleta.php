<?php
    require('back-end/clienteDAO.php');

    $banco = new ClienteDAO();
    $banco->DeletarCliente($_POST['codigo']);
    header('Location: principal.php'); 
?>