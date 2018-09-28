<?php
    include_once('Arma.php');

    class Soldado {
        private $tipo;
        private $escudo;
        private $vida;
        private $bonus_ataque;
        private $arma;

        public function Soldado($tipo, $escudo) {
            $this->vida = 100;
            $this->bônus_ataque = 0;
            $this->arma = null;
            
            $this->tipo = $tipo;
            $this->escudo = $escudo;
        }

        public function EstouArmado() {
            return $this->arma != null ? 'Sim' : 'Não';
        }
        
        public function ObterTipo () { return $this->tipo;}
        public function ObterEscudo () { return $this->escudo;}
        public function ObterVida () { return $this->vida;}
        public function ObterBonus_Ataque () { return $this->bônus_ataque;}
        public function ObterArma () { 
            if ($this->EstouArmado() === 'Sim') {
                return $this->arma->ObterNome();
            } else {
                return 'Nenhuma';
            }
        }

        public function MudarTipo ($tipo) { return $this->tipo = $tipo;}
        public function MudarEscudo ($escudo) { return $this->escudo = $escudo;}
        public function MudarVida ($vida) { return $this->vida = $vida;}
        public function MudarBonus_Ataque ($bonus) { return $this->bonus_ataque = $bonus;}
        public function MudarArma ($arma) {
            $this->arma = $arma;
            return $this->arma->ObterNome();
        }

        // public function EstouVivo() { return $this->vida > 0 ? 'true' : 'false';}
        public function EstouVivo() { 
            return $this->vida > 0 ? 'Sim' : 'Não';
        }

        public function Ataque($adversario, $tiros) {
            if($this->EstouVivo() === 'Sim' && $this->EstouArmado() === 'Sim') {
                $tiros = $this->arma->Atira($tiros);
                $DanoSofrido = $this->arma->ObterDano() * $tiros * ($this->bonus_ataque + 1);
                $escudo = (100 - $adversario->ObterEscudo()) / 100;
                $DanoSofrido = $DanoSofrido * $escudo;
                $adversario->MudarVida($adversario->ObterVida() - $DanoSofrido);
                if ($adversario->ObterVida() <= 0) {
                    $adversario->MudarVida(0);
                    $this->bonus_ataque += 0.05; 
                }
                return $adversario->ObterTipo() . ' : ' . $adversario->ObterVida();
            }
        }
        public function Dormir() { if ($this.EstouVivo() === 'Sim') { return $this->vida += 10;}}

        public function Recarrega($quantidade) { $this->arma->MaisMunicao($quantidade);}
    }

    $PrimeiroSoldado = new Soldado('fuzileiro', 70);
    echo '<br><br>Primeiro Soldado<br>';
    echo '<br>Vida: ' . $PrimeiroSoldado->ObterVida();
    echo '<br>Tipo: ' . $PrimeiroSoldado->ObterTipo();
    echo '<br>Escudo: ' . $PrimeiroSoldado->ObterEscudo();
    echo '<br>Bônus de Ataque: ' . $PrimeiroSoldado->ObterBonus_Ataque();
    echo '<br>Arma: ' . $PrimeiroSoldado->ObterArma();
    echo '<br>Estou vivo? ' . $PrimeiroSoldado->EstouVivo();
    echo '<br>Mudei de arma: ' . $PrimeiroSoldado->MudarArma($MinhaSegundaArma);
    $PrimeiroSoldado->Recarrega(30);
    
    $SegundoSoldado = new Soldado('guerrilheiro', 60);
    echo '<br><br>Segundo Soldado<br>';
    echo '<br>Vida: ' . $SegundoSoldado->ObterVida();
    echo '<br>Tipo: ' . $SegundoSoldado->ObterTipo();
    echo '<br>Escudo: ' . $SegundoSoldado->ObterEscudo();
    echo '<br>Bônus de Ataque: ' . $SegundoSoldado->ObterBonus_Ataque();
    echo '<br>Arma: ' . $SegundoSoldado->ObterArma();
    echo '<br>Estou vivo? ' . $SegundoSoldado->EstouVivo();
    echo '<br>Mudei de arma: ' . $SegundoSoldado->MudarArma($MinhaPrimeiraArma);
    $SegundoSoldado->Recarrega(30);
    
    
    
    echo '<br><br>' . $SegundoSoldado->Ataque($PrimeiroSoldado, 10);
    echo '<br><br>' . $SegundoSoldado->Ataque($PrimeiroSoldado, 10);
    echo '<br><br>' . $SegundoSoldado->Ataque($PrimeiroSoldado, 10);

    echo '<br><br>' . $PrimeiroSoldado->Ataque($SegundoSoldado, 10);
    echo '<br><br>' . $PrimeiroSoldado->Ataque($SegundoSoldado, 10);
    echo '<br><br>' . $PrimeiroSoldado->Ataque($SegundoSoldado, 10);


    echo '<br><br>Primeiro Soldado<br>';
    echo '<br>Vida: ' . $PrimeiroSoldado->ObterVida();
    echo '<br>Tipo: ' . $PrimeiroSoldado->ObterTipo();
    echo '<br>Escudo: ' . $PrimeiroSoldado->ObterEscudo();
    echo '<br>Bônus de Ataque: ' . $PrimeiroSoldado->ObterBonus_Ataque();
    echo '<br>Arma: ' . $PrimeiroSoldado->ObterArma();
    echo '<br>Estou vivo? ' . $PrimeiroSoldado->EstouVivo();
    echo '<br>Mudei de arma: ' . $PrimeiroSoldado->MudarArma($MinhaPrimeiraArma);
    $PrimeiroSoldado->Recarrega(30);
    
    echo '<br><br>Segundo Soldado<br>';
    echo '<br>Vida: ' . $SegundoSoldado->ObterVida();
    echo '<br>Tipo: ' . $SegundoSoldado->ObterTipo();
    echo '<br>Escudo: ' . $SegundoSoldado->ObterEscudo();
    echo '<br>Bônus de Ataque: ' . $SegundoSoldado->ObterBonus_Ataque();
    echo '<br>Arma: ' . $SegundoSoldado->ObterArma();
    echo '<br>Estou vivo? ' . $SegundoSoldado->EstouVivo();
    echo '<br>Mudei de arma: ' . $SegundoSoldado->MudarArma($MinhaSegundaArma);
    $SegundoSoldado->Recarrega(30);
    ?>
<br>
