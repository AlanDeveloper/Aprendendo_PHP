<?php
    include_once('Arma.php');
    include_once('Soldado.php');
    include_once('Tropa.php');

    class Batalha {
        private $Tropa1;
        private $Tropa2;
        private $Vez;

        public function Batalha ($Tropa1, $Tropa2) {
            $this->Tropa1 = $Tropa1;
            $this->Tropa2 = $Tropa2;

            $this->Vez = 0;
        }

        public function MudarVez($vez) { return $this->Vez = $vez;}

        public function passaTurno() {
            $random = rand(0, 1);
            if($this->Vez === 0) {
                $this->MudarVez(1);
                if($random === 0) {
                    $this->Tropa1->SoldadosDormir();
                    return 'Tropa ' . $this->Tropa1->ObterNome() . ' dormiu';
                }
                if($random === 1) {
                    $random = rand(0, $this->Tropa2->ObterLista_Soldados() - 1);
                    for ($i=0; $i < $this->Tropa1->ObterLista_Soldados() - 1; $i++) { 
                        $this->Tropa1->EscolherSoldado($i)->Ataque($this->Tropa2->EscolherSoldado($random), 10);
                    }
                    $this->Tropa1->AlimentarSoldados();
                    return 'Tropa ' . $this->Tropa1->ObterNome() . ' atacou';
                }
            } else {
                $this->MudarVez(0);
                if($random === 0) { 
                    $this->Tropa2->SoldadosDormir();
                    return 'Tropa ' . $this->Tropa2->ObterNome() . ' dormiu';
                }
                if($random === 1) { 
                    $random = rand(0, $this->Tropa1->ObterLista_Soldados() - 1);
                    for ($i=0; $i < $this->Tropa2->ObterLista_Soldados() - 1; $i++) { 
                        $this->Tropa2->EscolherSoldado($i)->Ataque($this->Tropa1->EscolherSoldado($random), 10);
                    }
                    $this->Tropa2->AlimentarSoldados();
                    return 'Tropa ' . $this->Tropa2->ObterNome() . ' atacou';
                }
            }
        }
    }

    echo '<br><br>Tropa 1<br>';
    echo '<br>Nome da tropa: ' . $PrimeiraTropa->ObterNome();
    echo '<br>Alimentos: ' . $PrimeiraTropa->ObterAlimentos();
    echo '<br>' . $PrimeiraTropa->Recruta($SegundoSoldado);
    echo '<br>' . $PrimeiraTropa->Recruta($PrimeiroSoldado);
    echo '<br>Soldados: ' . $PrimeiraTropa->ObterLista_Soldados() . '<br>';
    echo '' . $PrimeiraTropa->ComprarArma($MinhaPrimeiraArma, $PrimeiraTropa->EscolherSoldado(1));
    echo '<br>' . $PrimeiraTropa->ComprarArma($MinhaPrimeiraArma, $PrimeiraTropa->EscolherSoldado(2));
    
    $SegundaTropa = new Tropa('damage', 220);
    
    echo '<br><br>Tropa 2<br>';
    echo '<br>Nome da tropa: ' . $SegundaTropa->ObterNome();
    echo '<br>Alimentos: ' . $SegundaTropa->ObterAlimentos();
    echo '<br>' . $SegundaTropa->Recruta($SegundoSoldado);
    echo '<br>' . $SegundaTropa->Recruta($PrimeiroSoldado);
    echo '<br>Soldados: ' . $SegundaTropa->ObterLista_Soldados();
    echo '<br>' . $SegundaTropa->ComprarArma($MinhaPrimeiraArma, $SegundaTropa->EscolherSoldado(0));
    echo '<br>' . $SegundaTropa->ComprarArma($MinhaPrimeiraArma, $SegundaTropa->EscolherSoldado(1));

    $Batalha = new Batalha($PrimeiraTropa, $SegundaTropa);
    echo '<br><br>Inicio da Batalha <br>';
    echo '<br>' . $Batalha->passaTurno();
    echo '<br>' . $Batalha->passaTurno();
?>