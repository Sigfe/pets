<?php
  //Feito por Igor Felix Silva
  class animais{
    public $pelo;
    public $qtd_patas;
    public $porte;
    public $especie;
    public $cor;

    public function __construct($raca, $qtd_patas, $porte,  $especie, $cor){
      echo("Um animal é criado!\n");
      
      $this->raca = $raca;
      $this->qtd_patas = $qtd_patas;
      $this->porte = $porte;
      $this->especie = $especie;
      $this->cor = $cor;

      echo("O animal é um ".$this->especie." é da raca ".$this -> raca." e ele tem ". $this->qtd_patas. " patas, tem a coloração ".$this -> cor." seu porte é ".$this -> porte.".\n");
    }
    public function __destruct(){
      echo ("Morreu o animal: " .$this-> raca ."\n");
    }

    public function setreceber_dano($dano){
      $this->receber_dano = $dano;
    }
    public function getreceber_dano(){
      echo ("O animal ".$this -> raca. " em uma disputa, recebeu um ".$this -> receber_dano.".\n");
    }
    
    public function setraiva($grr){
      $this -> raiva = $grr;
    }
    public function  getraiva(){
      echo ("O ".$this -> raca."  fica completamente ".$this->raiva. ", mas é derrotado.\n");
    }

    public function setOld ($old){
      $this -> old = $old;
    }
    public function getOld(){
      echo ("O ".$this -> raca." ".$this -> old ." com o tempo.\n");
    }
  }
  //Feito por Igor Felix Silva
?>
