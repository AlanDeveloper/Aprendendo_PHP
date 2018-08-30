<?php
    ini_set('display_errors', 1);
    error_reporting(E_ALL);
    $nome = "Alan Santos";
    $nascimento = "17/01/2001";
    $img = "<img src='img/php.png'></img>";

    $conteudo = "Minha primeira página php<br> By ".$nome;
    $titulo = "Página php";
    echo "<h1>Hello World</h1>";

    // echo phpinfo();

    // Estou comentando

    /*  Es
            tou
                co
                    men
                        tan
                            do
                                em
                                    blo
                                        co
    */

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titulo;?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div><p><?php echo $conteudo;?></p></div>
    <?php
        echo $img;
    ?>
    <div id="icon">
        <img class="icon" src="img/job.png" alt="CSS">
    </div>
</body>
</html>