<?php
    include_once('funcionario.php');
    include_once('departamento.php');

    // Exercício 1 alguns testes

    // $PrimeiroFuncionario = new Funcionario('Alan', '17/01/2001', 2000);
    // echo $PrimeiroFuncionario->ObterIdade();
    // echo $PrimeiroFuncionario->RecebeAumento(200);

    // $PrimeiroDepartamento = new Departamento('Joker');
    // echo '<br>' . $PrimeiroDepartamento->AlocaFuncionario($PrimeiroFuncionario);
    // echo '<br>Primeiro funcionário: ' . $PrimeiroDepartamento->ObterFuncionario(0)->ObterNome();
    // echo '<br>' . $PrimeiroDepartamento->DesalocaFuncionario($PrimeiroFuncionario);
    // echo '<br>' . $PrimeiroDepartamento->AlocaFuncionario($PrimeiroFuncionario);
    // echo '<br>Novo gerente: ' . $PrimeiroDepartamento->MudarGerente($PrimeiroFuncionario);
    // echo '<br>' . $PrimeiroDepartamento->DesalocaFuncionario($PrimeiroFuncionario);



    // Exercício 2

    $PrimeiroFuncionario = new Funcionario('Alan', '17-01-2001', 2000);
    $SegundoFuncionario = new Funcionario('Samuel', '28/09/2002', 1800);
    $TerceiroFuncionario = new Funcionario('Leandro', '28/05/1998', 3500);
    $QuartoFuncionario = new Funcionario('Daniel', '28/03/1997', 2200);
    $QuintoFuncionario = new Funcionario('Jurema', '28/11/2003', 1500);

    $PrimeiroDepartamento = new Departamento('Joker');
    $SegundoDepartamento = new Departamento('Mkdir');

    echo '<br>' . $PrimeiroDepartamento->AlocaFuncionario($PrimeiroFuncionario);
    echo '<br>Idade do funcionário ' . $PrimeiroFuncionario->ObterNome() . ' é ' . $PrimeiroFuncionario->ObterIdade();
    echo '<br>' . $PrimeiroDepartamento->AlocaFuncionario($SegundoFuncionario);
    echo '<br>' . $PrimeiroDepartamento->AlocaFuncionario($TerceiroFuncionario);

    echo '<br>' . $SegundoDepartamento->AlocaFuncionario($QuartoFuncionario);
    echo '<br>' . $SegundoDepartamento->AlocaFuncionario($QuintoFuncionario);

    echo '<br>Novo gerente ' . $PrimeiroDepartamento->MudarGerente($PrimeiroFuncionario) . ' para o departamento ' . $PrimeiroDepartamento->ObterNome();
    echo '<br>Novo gerente ' . $SegundoDepartamento->MudarGerente($QuartoFuncionario) . ' para o departamento ' . $SegundoDepartamento->ObterNome();
    echo '<br>Novo gerente ' . $SegundoDepartamento->MudarGerente($TerceiroFuncionario) . ' para o departamento ' . $SegundoDepartamento->ObterNome();

    echo '<br>' . $PrimeiroDepartamento->DesalocaFuncionario($PrimeiroFuncionario);
    echo '<br>' . $PrimeiroFuncionario->RecebeAumento(1000);
    echo '<br>' . $SegundoDepartamento->AlocaFuncionario($PrimeiroFuncionario);

    // Exercício 3

    // echo var_dump($PrimeiroDepartamento);
    echo $PrimeiroDepartamento->Estado();
    echo $SegundoDepartamento->Estado();
    // É possível mostrar criando uma função dentro de departamento que ela requere o nome,o gerente e os funcionários, que permite retornar as características do objeto em strings
?>