<?php
    class Cliente {
        private $nome;
        private $cpf;
        private $email;
        private  $codigo;

        public function Cliente($nome, $cpf, $email) {
            $this->nome = $nome;
            $this->cpf = $cpf;
            $this->email = $email;
        }

        public function ObterNome($nome) { return $this->nome;}
        public function ObterCpf($cpf) { return $this->cpf;}
        public function ObterEmail($email) { return $this->email;}
        public function MudarNome($nome) { $this->nome = $nome;}
        public function MudarEmail($email) { $this->email = $email;}
    }
?>