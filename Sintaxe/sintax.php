<?php 
    Define (SEXTA, "Dia de hoje");


    // Tipo de variável
    $var = 9;
    echo gettype($var);
    var_dump($var);
    if (is_int($var))  echo "Inteiro !!!";
    if (gettype($var) === "integer")  echo "Não seii !!!";
 

    $var2 = NULL;
    echo is_null($var2); // 1 mesma coisa que true

    $vet = [2, 4, 6];
    $vet2 = ["pos1" => 45]; // "pos1" nome da posição, 45 valor da posição
    var_dump($vet2);
    
    echo ($vet[0] + $vet2["pos1"]);

    $i = 0;
    while ($i < 10) {echo $i++;}
?>