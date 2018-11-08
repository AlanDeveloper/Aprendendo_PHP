<?php

class Meta{
    private $id;
    private $nome;
    private $descricao;
    private $prioridade;

    public function __construct($nome, $descricao, $prioridade){
        $this->nome = $nome;
        $this->descricao = $descricao;
        $this->prioridade = $prioridade;
    }
    public function getId(){
        return $this->id;
    }
    public function getNome(){
        return $this->nome;
    }
    public function getDescricao(){
        return $this->descricao;
    }
    public function getPrioridade(){
        return $this->prioridade;
    }
    public function setDescricao($descricao){
        $this->descricao = $descricao;
    }
    public function setPrioridade($prioridade){
        if($prioridade>=1 && $prioridade<=5)
            $this->prioridade = $prioridade;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setId($id){
        $this->id = $id;
    }
}

// $m = new Meta("rockinrio", "ir pelo menos 1 vez ao rockinrio", 4);
// $m->setId(3);
// var_dump($m);

// $m->setPrioridade(6);
// $m->setPrioridade(5);
// $m->setNome("Rock n'Rio");
// $m->setDescricao("Ir 3 vezes no Rock n' Rio!!!");

// echo $m->getNome()." -- id --".$m->getId()."\n";
// echo $m->getDescricao()."\n";
// echo "prioridade: ".$m->getPrioridade()."\n";


?>