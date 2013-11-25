<?php
session_status();
include("conexao.php");

$cesta = @$_SESSION["cesta"];
$tt = @$_SESSION["tcarrinho"];

//if(empty($_SESSION["usuario"]) && empty($_SESSION["senha"])){
//  header("location: vercarrinho.php?erro=1");
//}

//if(empty($cesta["CODIGO"])){
//  header("location: vercarrinho.php?erro=2");
//}

?>
