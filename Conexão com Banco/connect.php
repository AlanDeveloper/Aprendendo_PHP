<?php
    $codcliente = 0;
    function connect(){
        $BD = 'port=5432 dbname=venda user=postgres password=postgres';
        return pg_connect($BD);
    }

    $sql = 'select * from cliente';
    $MeuBD = connect();
    $res = pg_query($MeuBD, $sql);

    while($cliente = pg_fetch_assoc($res)) {
        
        print_r($cliente);
        echo '<h3>' . $cliente['nome'] . '</h3><br>'; 
    }
    pg_close($MeuBD);

    function DeletarCliente($id) {
        $MeuBD = connect();
        $deleta = 'delete from cliente  where codcliente = $1';
        $res = pg_query_params($MeuBD, $deleta, array($id));
        pg_close($MeuBD);
    }
    function AdicionarCliente($codcliente, $nome, $cpf, $email) {
        $MeuBD = connect();
        if($nome !== null && cpf !== null) {
            $sql2 = 'insert into cliente (codcliente, nome, cpf, email) values ($1, $2, $3, $4)';
            $vetor = array($codcliente, $nome, $cpf, $email);
            pg_query_params($MeuBD, $sql2, $vetor);
        }
        pg_close($MeuBD);
    }
    AdicionarCliente(223, 'Alan', '40027122698', '32@gmail.com');
    // DeletarCliente();
?>