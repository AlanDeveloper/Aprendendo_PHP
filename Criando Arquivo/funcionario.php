<?php
    $codigo = $_POST["codigo"];
    $nome = $_POST["nome"];
    $salario = $_POST["salario"];

    $documento = "{$codigo};{$nome};{$salario}\n";
    $arquivo = 'funcionarios.txt';
    $abrir = fopen($arquivo, "a");
    $gravar = fwrite($abrir, $documento);

    if($gravar) {
        echo "Gravado!";
    } else {
        throw new Exception('Não gravado!');
    }

    try {
        $gravar = fwrite($abrir, NULL);
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }
?>