<?php
    class Usuario {
        private $nome;
        private $cpf;
        private $codigo;


        public function Usuario(string $nome, $cpf) {
            $this->nome = $nome;
            $this->cpf = $cpf;
        }
        public function ObterNome() { return $this->nome;}
        public function ObterCpf() { return $this->cpf;}
        public function ObterCodigo() { return $this->codigo;}
        public function MudarNome($nome) { $this->nome = $nome;}
        public function MudarCpf($cpf) { $this->cpf = $cpf;}
    }
?>