<?php

include("conexao.php");
session_start();

$query = "select * from usuarios where usuario = '$_POST[usuario]'";
$sql = mysql_query($query);

if (mysql_num_rows($sql) > 0) {
  $usuario = mysql_fetch_object($sql);

  if ( $usuario->senha == $_POST["senha"]) {
    $_SESSION["nome"] = $usuario->nome;
    $_SESSION["senha"] = $usuario->senha;
    $_SESSION["usuario"] = $usuario->usuario;

    header("location: home-usuario.php");
    exit;
  } else {
    header("location: index.php?erro=2");
    exit;
  }
} else {
  header("location: index.php?erro=1");
  exit;
}
?>