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



    $a = 1;
    $b = 4;
    function soma ($a, $b) {
        return $a + $b;
    }

    function troca ($a, $b) {
        $aux = $b;
        $b = $a;
        $a = $aux;
        echo $a, $b;
    }
    // Não modifica valores iniciais das variáveis
    
    function troca2 (&$a, &$b) {
        $aux = $b;
        $b = $a;
        $a = $aux;
        echo $a, $b;
    }
    // Modifica valores iniciais das variáveis

    require(teste.php);
    include(teste.php);

    require_once(teste.php);
    include_once(teste.php);

?>