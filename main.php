<?php
  require_once'animais.php';
  require_once'ratel.php';

  $ratel = new ratel ("texugo", "quatro", "baixo", "ratel", "branca e preta");

  $ratel -> receber_dano();
  $ratel -> raiva();
?>
