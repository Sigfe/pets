<?php
  class animais{
    public $pelo;
    public $qtd_patas;
    public $porte;
    public $especie;
    public $cor;

    public function __construct($raca, $qtd_patas, $porte,  $especie, $cor){
      
      $this->raca = $raca;
      $this->qtd_patas = $qtd_patas;
      $this->porte = $porte;
      $this->especie = $especie;
      $this->cor = $cor;

      echo("O animal da raça ".$this->raca." é da especie ".$this -> especie." e ele tem ". $this->qtd_patas. " patas, tem a coloração ".$this -> cor." seu porte é ".$this -> porte.".\n");
    }
    public function __destruct(){
      echo ("O ".$this->especie." morreu!");
    }

    public function receber_dano(){
      echo ("O animal ".$this -> raca. " recebeu um ataque.\n");
    }
    public function  raiva(){
      echo ("O ".$this -> raca."  se enfurece com o ataque, mas é derrotado.\n");
    }

  }
//De Igor Felix Silva
?>
