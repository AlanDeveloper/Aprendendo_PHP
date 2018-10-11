<?php
    $BD = "port=5432 dbname=venda user=postgres password=postgres";
    $MeuBD = pg_connect($BD);

    // echo var_dump($MeuBD);
    // print_r($MeuBD);

    $sql = 'select * from cliente';

    $res = pg_query($MeuBD, $sql);

    // var_dump(pg_fetch_all($res));
    // print_r(pg_fetch_all($res[0]['codcliente']));
    echo pg_fetch_all($res);
?>