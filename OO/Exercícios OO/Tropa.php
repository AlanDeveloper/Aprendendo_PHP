<?php
    class Tropa {
        private $nome;
        private $lista_soldados;
        private $quantidade_alimentos;
        private $dinheiro;

        public function Tropa($nome, $quantidade_alimentos) {
            $this->nome = $nome;
            $this->quantidade_alimentos = $quantidade_alimentos;
        }

        public function ObterNome () { return $this->nome;}
        public function ObterAlimentos () { return $this->quantidade_alimentos;}

        public function ComprarComida() {
            $this->quantidade_alimentos += 100;
            $this->dinheiro -= 10;
        }
    }

    $PrimeiraTropa = new Tropa('fury', 200);
    
    echo 'Tropa<br>';
    echo '<br>Nome da tropa: ' . $PrimeiraTropa->ObterNome();
    echo '<br>Alimentos: ' . $PrimeiraTropa->ObterAlimentos();

?>

<br>

<!-- -recruta (soldado)
-demite (soldado)
-come: cada soldado da tropa come 10 de alimentos desde que tenha alimentos
-compraArma(arma, soldado) equipa um soldado e decrementa o dinheiro
-imprimaStatus(): imprime o status da tropa
Testes: crie uma uma tropa, recrute soldados -->