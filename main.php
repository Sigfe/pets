<?php
  require_once'animais.php';
  require_once'ratel.php';

  $ratel = new ratel ("ratel", "quatro", "baixo", "texugo", "branca e preta");

  $ratel -> receber_dano();
  $ratel -> raiva();
?>
