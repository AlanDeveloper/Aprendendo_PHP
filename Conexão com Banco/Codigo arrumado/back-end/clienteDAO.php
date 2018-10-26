<?php
    class ClienteDAO {
        
        public function ConectarAoBanco(){
            $BD = 'port=5432 dbname=venda user=postgres password=postgres';
            return pg_connect($BD);
        }
        public function ObterClientes() {
            $MeuBD = $this->ConectarAoBanco();
            $sql = 'select * from cliente';
            $res = pg_query($MeuBD, $sql);
            while($cliente = pg_fetch_assoc($res)) {
                // print_r($cliente);
                echo $cliente['nome']; 
            }
            pg_close($MeuBD);
        }
        public function DeletarCliente($id) {
            $MeuBD = $this->ConectarAoBanco();
            $deleta = 'delete from cliente  where codcliente = $1';
            $res = pg_query_params($MeuBD, $deleta, array($id));
            pg_close($MeuBD);
        }
        public function AdicionarCliente($nome, $cpf, $email) {
            $MeuBD = $this->ConectarAoBanco();
            $sql = 'insert into cliente (nome, cpf, email) values ($1, $2, $3, $4)';
            $vetor = array($nome, $cpf, $email, $cod);
            pg_query_params($MeuBD, $sql, $vetor);
            pg_close($MeuBD);
        }
    }
?>