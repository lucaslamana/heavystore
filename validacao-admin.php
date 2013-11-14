<?php

include('conexao.php');
session_start();

$query = "select * from administrador where usuario = '$_POST[usuario]'";
$sql = mysql_query($query);

if (mysql_num_rows($sql) > 0) {
  $usuario = mysql_fetch_object($sql);

  if ($usuario->senha == $_POST["senha"]) {
    $_SESSION["asenha"] = $usuario->senha;
    $_SESSION["anome"] = $usuario->nome;
    $_SESSION["ausuario"] = $usuario->usuario;

    header("location: admin-home.php");
    exit;
  } else {
    header("location: admin.php?erro=2");
    exit;
  }
} else {
  header("location: admin.php?erro=1");
  exit;
}

?>