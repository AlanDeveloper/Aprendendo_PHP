 <?php
    function Peso($planet, $number) {
        switch ($number) {
            case 1:
                echo $planet * 0.37;
                break;
            case 2:
                echo $planet * 0,88;
                break;
            case 3:
                echo $planet * 0.38;
                break;
            case 4:
                echo $planet * 2.64;
                break;
            case 5:
                echo $planet * 1.15;
                break;
            case 6:
                echo $planet * 1.17;
                break;
        };
    };
?>

<?php
    function Alto($vet) {
        $menor = 3;
        $cresmenor = 0;
        $maior = 0;
        $cresmaior = 0;
        $idade = 0;
        for ($i=0; $i < count($vet); $i++) { 
            if ($menor >= $vet[$i]["altura"]) {
                $menor = $vet[$i]["altura"];
                $cresmenor = $vet[$i]["crescimento_anual"];
            }
            if ($maior <= $vet[$i]["altura"]) {
                $maior = $vet[$i]["altura"];
                $cresmaior = $vet[$i]["crescimento_anual"];
            }
        }

        $idade = ((($maior * 100) - ($menor * 100)) / ($cresmenor - $cresmaior)) + 1;

        echo "Menor: ". $menor ." Maior: ". $maior ." Idade: ". $idade;
    };
?>
<?php
    function Fatorial($number) {
        $resultado = 1;
        for ($nb=$number; $nb > 1 ; $nb--) { 
            $resultado = $nb * $resultado;
        }
        echo $resultado;
    }
?>

<?php 
    function Mat($vet) {
        $soma = 0;
        for ($i=0; $i < count($vet); $i++) { 
            $soma = $vet[$i] + $soma;
        }
        $media = $soma / count($vet);

        echo "Soma: ". $soma ." Média: ". $media;
    }

?>

<?php
    function String($nome) {
        $array  = explode(' ', $nome);
        $final = $array[0] . ' ' .  $array[count($array) - 1];
        if (count($array) > 2) {
            $final = $array[0] . ' ';
            for ($i=1; $i < count($array) - 1 ; $i++) { 
                $final = $final . $array[$i][0] . '. ';
            }
        }
        echo $final . $array[count($array)- 1];
    }
?>
<?php
    function toCebolinha($string) {
        $saudavel = array('rr', 'r');
        $saboroso = array('l', 'l');

        $novafrase = str_replace($saudavel, $saboroso, $string);
        echo $novafrase;
    }
?>
<?php
    function Data($data) {
        $anos = substr($data, strlen($data) - 4, strlen($data));
        $meses = intval(substr($data, strlen($data) - 7, strlen($data) - 8)) * (intval($anos) * 12);
        $dias = intval(substr($data, 0, 2)) + ($meses * 30);
        echo $data . '<br>Dias: ' . $dias .'<br>Meses: '.$meses.'<br>Anos: ' . $anos; 
    }
?>

<?php 
    function Recebo($nome) {
        $velho = array('A', 'E', 'I', 'O', 'U');
        $novo = array('*', '*', '*', '*', '*');
        $frase = str_replace($velho, $novo, $nome);
        echo $frase;
    }
?>

<?php
    Após peça para o usuário digitar um nome para que seja feita uma busca
    nesse vetor (teste valores como Silva e Carlos, por exemplo). O programa deve contar e imprimir as
    ocorrências. Execute essa busca até que o usuário digite “sair” quando solicitado para inserir um
    nome.
    $vet = ['Joao Paulo Ferreira', 'Andre Carlos
    Silva', 'Carlos Alberto Andrade', 'Jeferson Andrade e Silva', 'Paulo Fernandes Moreira','Vinícius Paulo Fontoura', 'Rui Carlos Silva Ferreira', 'Joao Andrade Cardozo', 'Ana Paula Moreira', 'Carlos Figueiredo Junior'];

    $array  = explode(' ', $nome);
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Exercícios PHP</title>
</head>
<body>
    <p>Peso</p>
    <ul>
        <li>Mercúrio: <?php Peso (80, 1);?></li>
        <li>Vênus: <?php Peso (80, 2);?></li>
        <li>Marte: <?php Peso (80, 3);?></li>
        <li>Júpiter: <?php Peso (80, 4);?></li>
        <li>Saturno: <?php Peso (80, 5);?></li>
        <li>Urano: <?php Peso (80, 6);?></li>
    </ul>

    <p>
    <?php
     Alto([
        ["nome" => "Chico", "altura" => 1.50, "crescimento_anual" => 2],
        ["nome" => "Zé", "altura" => 1.10, "crescimento_anual" => 4]
    ]);
    ?></p>
    <p>Fatorial: <?php Fatorial(5);?></p>
    <p><?php Mat([5, 5, 6, 8])?></p>
    <p>Meu nome: 
    <?php String('João Marcos Cavalcante Bezerra')?></p>
    <p>Cebolinha: <?php echo toCebolinha('carro é caro')?></p>
    <p>Data <?php Data('17/01/2001')?></p>
    <p>Asterísco: <?php Recebo('EU ESTOU NA ESCOLA')?></p>
</body>
</html>