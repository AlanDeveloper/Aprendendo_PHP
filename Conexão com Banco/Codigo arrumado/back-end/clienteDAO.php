<?php
    class ClienteDAO {
        public function ConectarAoBanco(){
            $BD = 'port=5432 dbname=Loja user=postgres password=postgres';
            return pg_connect($BD);
        }
        public function ObterClientes() {
            $MeuBD = $this->ConectarAoBanco();
            $res = pg_query($MeuBD, 'select * from cliente');
            while($cliente = pg_fetch_assoc($res)) {
                // print_r($cliente);
                // echo $cliente['nome'];
                echo 
                '<tr>
                    <td>' . $cliente['nome'] . '</td>
                    <td>' . $cliente['codcliente'] . '</td>
                </tr>';
            }
            pg_close($MeuBD);
        }
        public function DeletarCliente($id) {
            $MeuBD = $this->ConectarAoBanco();
            $sql = 'delete from cliente  where codcliente = $1';
            pg_query_params($MeuBD, $sql, array($id));
            pg_close($MeuBD);
        }
        public function AdicionarCliente($cli) {
            $MeuBD = $this->ConectarAoBanco();
            $sql2 = 'insert into cliente (codcliente, nome, cpf, email) values ($1, $2, $3, $4)';
            pg_query_params($MeuBD, $sql2, array(13, $cli->ObterNome(), $cli->ObterCpf(), $cli->ObterEmail()));
            // codcliente fixo, só é possível adiocionar uma vez se não mudar o número 12
            pg_close($MeuBD);
        }
    }
?>