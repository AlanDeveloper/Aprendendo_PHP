<?php
    $codigo = $_POST["codigo"];
    $nome = $_POST["nome"];
    $salario = $_POST["salario"];

    gravar($codigo, $nome, $salario);

    try {
        $gravar = fwrite($abrir, NULL);
    } catch (Exception $e) {
        echo 'Exceção capturada: ',  $e->getMessage(), "\n";
    }

    //Criamos uma função que irá gravar o conteúdo no arquivo.
    function gravar($cod, $nome, $sal) {
        $documento = "{$codigo};{$nome};{$salario}\n";
        //Variável arquivo armazena o nome e extensão do arquivo.
        $arquivo = 'funcionarios.txt';
        //Variável $abrir armazena a conexão com o arquivo e o tipo de ação
        $abrir = fopen($arquivo, "a");
        //Grava o conteúdo no arquivo aberto.
        $gravar = fwrite($abrir, $documento);
        //Fecha o arquivo.
        fclose($abrir);
        if($gravar) {
            echo "Gravado!";
            echo ler();
        } else {
            throw new Exception('Não gravado!');
        }
    }
    //Criamos uma função que irá retornar o conteúdo do arquivo.
    function ler(){
        //Variável arquivo armazena o nome e extensão do arquivo.
        $arquivo = 'funcionarios.txt';
        //Variável $abrir armazena a conexão com o arquivo e o tipo de ação.
        $abrir = fopen($arquivo, "r");
        //Lê o conteúdo do arquivo aberto.
        $conteudo = fread($abrir, filesize($arquivo));
        //Fecha o arquivo.
        fclose($abrir);
        //retorna o conteúdo.
        return '<br>' . $conteudo;
    }
?>