<?php
    class Departamento {
        private $nome;
        private $gerente;
        private $lista_funcionario;

        public function ObterNome() { return $this->nome;}
        public function ObterGerente() { return $this->gerente;}

        public function MudarNome($nome) { $this->nome = $nome;}
        public function MudarGerente($gerente) {
            if(array_search($gerente, $this->lista_funcionario) !== false) {
                $this->gerente = $gerente;
                return 'true';
                // return $gerente->ObterNome();
            } else {
                return 'false';
                // return 'não encontrado';
            } 
        }

        public function Departamento($nome) {
            $this->nome = $nome;

            $this->gerente = null;
            $this->lista_funcionario = array();
        }

        public function AlocaFuncionario($funcionario) {
            array_push($this->lista_funcionario, $funcionario);
            return 'Funcionário ' . $funcionario->ObterNome() . ' alocado no departamento ' . $this->ObterNome();
        }
        public function ObterFuncionario($posicao) {
            return $this->lista_funcionario[$posicao];
        }
        public function DesalocaFuncionario($funcionario) {
            if(array_search($funcionario, $this->lista_funcionario) !== false) {
                $resultado = 'Funcionário ' . $funcionario->ObterNome() . ' desalocado';
                if($funcionario === $this->gerente) { $this->gerente = null;$resultado = $resultado . ' e departamento sem gerente';}
                $arrayAntes = array_slice($this->lista_funcionario,0, array_search($funcionario, $this->lista_funcionario));
                $arrayDepois = array_slice($this->lista_funcionario, array_search($funcionario, $this->lista_funcionario) + 1, count($this->lista_funcionario));
                $this->lista_funcionario = array_merge($arrayAntes, $arrayDepois);

                return $resultado;
            } else {
                return 'Funcionário não encontrado';
            }
        }


        public function Estado() {
            if($this->gerente === null) { 
                $gerente = 'Nenhum';
            } else {
                $gerente = $this->ObterGerente()->ObterNome();
            }
            return '<br><br>Nome do departamento: ' . $this->ObterNome() . '<br>Gerente: ' . $gerente . '<br>Número de funcionários: ' . count($this->lista_funcionario);
        }
    }

?>