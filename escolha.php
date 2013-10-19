<?php
$escolha = $_POST["escolha"];

if($escolha == "cd"){
  header("location: novo-produto.php?escolha=cd");
  exit;
}
if($escolha == "dvd"){
  header("location: novo-produto.php?escolha=dvd");
  exit;  
}
if($escolha == "camiseta"){
  header("location: novo-produto.php?escolha=camiseta");
  exit;
}
if($escolha == "bandeira"){
  header("location: novo-produto.php?escolha=bandeira");
  exit;  
}
?>
