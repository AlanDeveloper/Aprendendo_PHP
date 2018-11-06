<?php 
    class MetaDao {
        private $meta;

        private function ConectarAoBanco() {
        $banco = 'port=5432 dbname=bdmeta user=postgres password=postgres';
            return pg_connect($banco);
        }
        public function InserirMeta($meta) {
            $MeuBD = $this->ConectarAoBanco();
            $sql = 'insert into meta (id, nome, descricao, prioridade) values ($1, $2, $3, $4)';
            pg_query_params($MeuBD, $sql, array($meta->getId(), $meta->getNome(), $meta->getDescricao(), $meta->getPrioridade()));
            pg_close($MeuBD);
        }
        public function DeletarMeta($id) {
            $MeuBD = $this->ConectarAoBanco();
            $sql = 'delete from meta where id = $1';
            pg_query_params($MeuBD, $sql, array($id));
            pg_close($MeuBD);
        }
        public function ObterMeta($id) {
            $MeuBD = $this->ConectarAoBanco();
            $res = pg_query($MeuBD, 'select * from meta');
            $meta = array();
            while($mt = pg_fetch_assoc($res)) {
                if ($mt['id'] == $id){
                    echo $mt['id'];
                    $meta = ['nome' => $mt['nome'],
                            'descricao' => $mt['descricao'],
                            'prioridade' => $mt['prioridade']
                    ];
                }
            }
            pg_close($MeuBD);
            return $meta;
        }
        public function AlterarMeta($meta) {
            $MeuBD = $this->ConectarAoBanco();
            $sql = 'update meta set nome = $1, descricao = $2, prioridade = $3
            where id =' . $meta->getId();
            pg_query_params($MeuBD, $sql, array($meta->getNome(), $meta->getDescricao(), $meta->getPrioridade())); 
            pg_close($MeuBD);
        }
    }
?>