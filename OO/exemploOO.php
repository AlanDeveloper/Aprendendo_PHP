<?php

    Class Cachorro {
        // public $nome;
        private $nome;
        private $idade;
        private $raca;
    
        function Cachorro($nome='Desconhecido') {
            $this->nome = $nome;
        }

        // function MudarIdade($idade) { // Set
        //     if ($idade > 0 ) $this->idade = $idade;
        // }

        // function ObterIdade() { // Get
        //     return $this->idade;
        // }


        function Mudar($nome = null, $idade = null, $raca = null) {
            if ($nome != null) $this->nome = $nome;
            if ($idade != null) $this->idade = $idade;
            if ($raca != null) $this->raca = $raca;
        }

        function Obter($nome, $idade, $raca) {
            return 'Nome: ' . $this->nome . '<br> Idade: ' . $this->idade . '<br>Raça: ' . $this->raca;
        }

        function Late() {
            $ss = 'au au';
            if($this->idade > 10) $ss.= ' cof cof';
            return $ss;
        }

        function Aniversario() {
            $this->idade = $this->idade + 1;
        }
    }


    $MeuPrimeiroCachorro = new Cachorro('Scoby');
    // $MeuPrimeiroCachorro->idade = -0.1;
    // $MeuPrimeiroCachorro->MudarIdade(-0.1);
    // $MeuPrimeiroCachorro->MudarIdade(2);
    // echo $MeuPrimeiroCachorro->ObterIdade();
    
    
    $MeuSegundoCachorro = new Cachorro('Messi');
    $MeuSegundoCachorro->Mudar('Messi2', 11, null);
    $MeuSegundoCachorro->Mudar('Messi3', null, 'Salsicha');
    
    echo $MeuSegundoCachorro->Obter();

    $MeuSegundoCachorro->Aniversario();
    echo '<br><br>' . $MeuSegundoCachorro->Obter();
    // $MeuSegundoCachorro->MudarIdade(12);
    
    // Alterar acesso para que não seja alterado o valor
?>
