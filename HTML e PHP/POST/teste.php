<?php

    if (!empty($_POST['text'])) {
        echo 'Postei: ' . $_POST['text'];
    } else {
        echo 'Não postei';
    }

    // $_GET['text'] = 'nada';
    // echo $_GET['text'];
?>