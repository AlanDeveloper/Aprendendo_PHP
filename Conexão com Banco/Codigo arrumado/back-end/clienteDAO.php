<?php
    class ClienteDAO {
        private function ConectarAoBanco(){
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
        public function ObterCliente($codigo) {
            $MeuBD = $this->ConectarAoBanco();
            $res = pg_query($MeuBD, 'select * from cliente');
            $cli = array();
            while($cliente = pg_fetch_assoc($res)) {
                if ($cliente['codcliente'] === $codigo){
                    $cli = ['nome' => $cliente['nome'],
                            'cpf' => $cliente['cpf'],
                            'email' => $cliente['email']
                    ];
                }
            }
            pg_close($MeuBD);
            return $cli;
        }
        public function DeletarCliente($id) {
            $MeuBD = $this->ConectarAoBanco();
            $sql = 'delete from cliente  where codcliente = $1';
            pg_query_params($MeuBD, $sql, array($id));
            pg_close($MeuBD);
        }
        public function AdicionarCliente($cli) {
            $MeuBD = $this->ConectarAoBanco();
            $sql = 'insert into cliente (nome, cpf, email) values ($1, $2, $3)';
            pg_query_params($MeuBD, $sql, array($cli->ObterNome(), $cli->ObterCpf(), $cli->ObterEmail()));
            pg_close($MeuBD);
        }
        public function AtualizarCliente($cli, $codigo) {
            $MeuBD = $this->ConectarAoBanco();
            $sql = 'update cliente set nome = $1, cpf = $2, email = $3
            where codcliente =' . $codigo;
            pg_query_params($MeuBD, $sql, array($cli->ObterNome(), $cli->ObterCpf(), $cli->ObterEmail())); 
            pg_close($MeuBD);
        }
    }
?>