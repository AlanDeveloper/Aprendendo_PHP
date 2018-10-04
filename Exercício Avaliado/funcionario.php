<?php
    class Funcionario {
        private $nome;
        private $datanasc;
        private $salario;

        public function ObterNome() { return $this->nome;}
        public function ObterNasc() { return $this->datanasc;}
        public function ObterSalario() { return $this->salario;}
        public function ObterIdade() {
            $DataAtual = new DateTime();
            $datanasc = date_create($this->datanasc);
            $Idade = $DataAtual->diff($datanasc);
            return $Idade->y . ' anos';
        }

        public function MudarNome($nome) { return $this->nome = $nome;}
        
        public function Funcionario($nome, $datanasc, $salario) {
            $this->nome = $nome;
            $this->datanasc = $datanasc;
            $this->salario = $salario;
        }

        public function RecebeAumento($Aumento) {
            $this->salario = $this->ObterSalario() + $Aumento;
            return 'O funcionário ' . $this->ObterNome() . ' recebeu um aumento de ' . $Aumento;
        }
    }

?>