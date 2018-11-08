<?php 
    require('back-end/metaDAO.php');
    require('back-end/meta.php');
    
    $banco = new MetaDao();

    $meta = new Meta('Bd', 'Passar', 5);
    $meta->setId(2);
    $banco->InserirMeta($meta);
    var_dump($meta);
    

    $meta = $banco->ObterMeta(2);
    var_dump($meta);
    $meta = new Meta($meta['nome'], $meta['descricao'], $meta['prioridade']);
    $meta->setId(3);
    var_dump($meta);
    $banco->DeletarMeta(2);

    $meta = new Meta('Bd', 'Passar', 5);
    $meta->setId(1);
    $banco->InserirMeta($meta);
    $meta->setNome('Port');
    $banco->AlterarMeta($meta);
?>