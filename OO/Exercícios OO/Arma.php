<?php
    class Arma {
        private $nome;
        private $municao;
        private $dano;
        private $preco;

        public function Arma($nome, $preco, $dano, $municao = 0) {
            $this->nome = $nome;
            $this->preco = $preco;
            $this->dano = $dano;
            $this->municao = $municao;
        }

        public function ObterNome () { return $this->nome;}
        public function ObterPreco () { return $this->preco;}
        public function ObterDano () { return $this->dano;}
        public function ObterMunicao () { return $this->municao;}

        public function MudarNome($nome) { $this->nome = $nome;}
        public function MudarPreco($preco) { $this->preco = $preco;}
        public function MudarDano($dano) { $this->dano = $dano;}

        public function Atira($quantidade) {
            if ($quantidade > $this->municao) {
                 $this->municao = 0;
            } else {
                $this->municao -= $quantidade;
            }
        }
        public function MaisMunicao($quantidade) {
            $this->municao += $quantidade;
        }
    }


    $MinhaPrimeiraArma = new Arma('m4a1', 3000, 30);
    echo 'Minha Primeira Arma<br>';
    echo '<br>Nome: ' . $MinhaPrimeiraArma->ObterNome();
    echo '<br>Dano: ' . $MinhaPrimeiraArma->ObterDano();
    echo '<br>Preco: ' . $MinhaPrimeiraArma->ObterPreco();
    echo '<br>Munição: ' . $MinhaPrimeiraArma->ObterMunicao();
    echo $MinhaPrimeiraArma->MaisMunicao(30);
    echo '<br>Comprando munição: ' . $MinhaPrimeiraArma->ObterMunicao();
    echo $MinhaPrimeiraArma->Atira(20);
    echo '<br>Munição: ' . $MinhaPrimeiraArma->ObterMunicao();

    $MinhaSegundaArma = new Arma('ak47', 3500, 35);
    echo '<br><br>Minha Segunda Arma<br>';
    echo '<br>Nome: ' . $MinhaSegundaArma->ObterNome();
    echo '<br>Dano: ' . $MinhaSegundaArma->ObterDano();
    echo '<br>Preco: ' . $MinhaSegundaArma->ObterPreco();
    echo '<br>Munição: ' . $MinhaSegundaArma->ObterMunicao();
    echo $MinhaSegundaArma->MaisMunicao(30);
    echo '<br>Comprando munição: ' . $MinhaSegundaArma->ObterMunicao();
    echo $MinhaSegundaArma->Atira(20);
    echo '<br>Munição: ' . $MinhaSegundaArma->ObterMunicao();
?>