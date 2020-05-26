<?php
  require_once'animais.php';
  require_once'ratel.php';

  $ratel = new ratel ("ratel", "quatro", "baixo", "texugo", "branca e preta");

  $ratel -> setreceber_dano("grande dano");
  $ratel -> getreceber_dano();
  $ratel -> setraiva("furioso");
  $ratel -> getraiva();
?>
