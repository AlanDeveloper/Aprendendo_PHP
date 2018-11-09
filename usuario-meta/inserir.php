<?php 
    require('back-end/meta.php');
    require('back-end/metaDAO.php');

    $banco = new MetaDAO();
    $meta = new Meta($_POST['nome'], $_POST['descricao'], $_POST['prioridade']);
    $dt = new DateTime($_POST['dtprevisao']);
    // $meta->setPrevisao(Date($_POST['data'], ''));
    $meta->setPrevisao($dt->format('Y-m-d H:i:s'));
    $banco->InserirMeta($meta, $_POST['cpf']);

    $meta->getPrevisao();
?>