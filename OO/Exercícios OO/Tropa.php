<?php
    include_once('Arma.php');
    include_once('Soldado.php');

    class Tropa {
        private $nome;
        private $lista_soldados;
        private $quantidade_alimentos;
        private $dinheiro;

        public function Tropa($nome, $quantidade_alimentos) {
            $this->nome = $nome;
            $this->quantidade_alimentos = $quantidade_alimentos;

            $this->lista_soldados = array();
            $this->dinheiro = 1000;
        }

        public function ObterNome () { return $this->nome;}
        public function ObterAlimentos () { return $this->quantidade_alimentos;}
        public function ObterDinheiro () { return $this->dinheiro;}
        public function ObterLista_Soldados () { return count($this->lista_soldados);}

        public function MudarNome ($nome) { return $this->nome = $nome;}
        public function MudarDinheiro ($dinheiro) { return $this->dinheiro = $dinheiro;}
        public function MudarAlimentos ($alimentos) { return $this->quantidade_alimentos = $alimentos;}

        public function ComprarComida() {
            $this->quantidade_alimentos += 100;
            $this->dinheiro -= 10;
        }

        public function Recruta($soldado) {
            array_push($this->lista_soldados, $soldado);
            return $this->lista_soldados[$this->ObterLista_Soldados() - 1]->ObterTipo() . ' recrutado';
        }
        public function Demite($soldado) {
            if(array_search($soldado, $this->lista_soldados) === false) {
                return 'Soldado não encontrado';
            } else {
                $arrayAntes = array_slice($this->lista_soldados, 0, array_search($soldado, $this->lista_soldados));
                $arrayDepois = array_slice($this->lista_soldados, array_search($soldado, $this->lista_soldados) + 1, count($this->lista_soldados));
                $this->lista_soldados = array_merge($arrayAntes, $arrayDepois);
                return $soldado->ObterTipo() . ' demitido';
            }
        }

        public function AlimentarSoldados() {
            $SoldadosAlimentados = 0;
            $SoldadosNãoAlimentados = 0;
            for ($i=0; $i < count($this->lista_soldados) ; $i++) {
                if($this->ObterAlimentos() >= 10) {
                    $this->EscolherSoldado($i)->MudarVida($this->EscolherSoldado($i)->ObterVida() + 10);
                    $this->MudarAlimentos($this->ObterAlimentos() - 10);
                    $SoldadosAlimentados++;
                } else {
                    $this->EscolherSoldado($i)->MudarVida($this->EscolherSoldado($i)->ObterVida() - 5);
                    $SoldadosNãoAlimentados++;
                }
            }
            if($SoldadosAlimentados === count($this->lista_soldados)) {
                return 'Todos soldados alimentados';
            } else {
                return 'Soldados alimetados: ' . $SoldadosAlimentados . ' Soldados não alimetandos: ' . $SoldadosNãoAlimentados;
            }
        }


        public function EscolherSoldado($soldado) {
            return $this->lista_soldados[$soldado];
        }
        public function ComprarArma($arma, $soldado) {
            if($this->ObterDinheiro() >= $arma->ObterPreco()) {
                $this->MudarDinheiro($this->ObterDinheiro() - $arma->ObterPreco());
                $soldado->MudarArma($arma);
                return $soldado->ObterTipo() . ' armado <br> Dinheiro Atual: ' . $this->ObterDinheiro();
            } else {
                return 'Dinheiro insuficiente';
            }
        }

        public function SoldadosDormir () {
            for ($i=0; $i < $this->ObterLista_Soldados(); $i++) { 
                $this->lista_soldados[$i]->Dormir();
            }
            return 'Soldados dormiram';
        }

        public function Status() {
            return '<br>Nome: ' . $this->ObterNome() . '<br>Soldados: ' . count($this->lista_soldados) . '<br>Dinheiro: ' . $this->ObterDinheiro() . '<br>Alimentos: ' . $this->ObterAlimentos();
        }
    }

    $PrimeiraTropa = new Tropa('fury', 200);
    
    echo '<br>Tropa 1<br>';
    echo '<br>Nome da tropa: ' . $PrimeiraTropa->ObterNome();
    echo '<br>Alimentos: ' . $PrimeiraTropa->ObterAlimentos();
    echo '<br>' . $PrimeiraTropa->Recruta($PrimeiroSoldado);
    echo '<br>' . $PrimeiraTropa->Demite($PrimeiroSoldado);
    echo '<br>' . $PrimeiraTropa->Demite($SegundoSoldado);
    echo '<br>' . $PrimeiraTropa->Recruta($PrimeiroSoldado);
    echo '<br>' . $PrimeiraTropa->AlimentarSoldados();
    echo '<br>Alimentos: ' . $PrimeiraTropa->ObterAlimentos();
    echo '<br>' . $PrimeiraTropa->ComprarArma($MinhaPrimeiraArma, $PrimeiraTropa->EscolherSoldado(0));
    // echo '<br>' . $PrimeiraTropa->Status();

    echo '<br>' . $PrimeiraTropa->SoldadosDormir(); 
?>