<?php 
    require('back-end/meta.php');
    require('back-end/metaDAO.php');

    $banco = new MetaDAO();
    $meta = new Meta($_POST['nome'], $_POST['descricao'], $_POST['prioridade']);
    $meta->setId($_POST['id']);
    $banco->InserirMeta($meta);
?>