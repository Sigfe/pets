<?php
  //Feito por Igor Felix Silva
  require_once'animais.php';
  require_once'ratel.php';
  require_once'boi.php';

  $ratel = new ratel ("Ratel", "quatro", "baixo", "texugo", "branca e preta");

  $ratel -> setreceber_dano("grande dano");
  $ratel -> getreceber_dano();
  $ratel -> setraiva("furioso");
  $ratel -> getraiva();

  $boi = new boi ("Boi", "quatro", "grande", "bovino", "preta");
  
  $boi -> setOld("envelhece");
  $boi-> getOld();

  //Feito por Igor Felix Silva
?>
