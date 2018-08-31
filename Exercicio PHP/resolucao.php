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
</body>
</html>