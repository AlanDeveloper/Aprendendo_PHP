<?php
    switch ($_GET["prio"]) {
        case 0;
            echo "O que fazer: " . $_GET["text"] . "<br>Prioridade: Alta <br> Data: " . $_GET["dt"];
        break;
        case 1;
            echo $_GET["text"] . "Média" . $_GET["dt"];
        break;
        case 2;
            echo $_GET["text"] . "Baixa" . $_GET["dt"];
        break;
    }
?>