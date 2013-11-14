<?php

include("conexao.php");

$uquery = "select * from usuarios where usuario = '$_POST[usuario]'";
if(mysql_num_rows(mysql_query($uquery))>0){
  header("location: cadastro.php?erro=1");
  exit;
}

$query = "insert into usuarios (nome, email, usuario, senha, sexo, nascimento)
  values ('$_POST[nome]', '$_POST[email]', '$_POST[usuario]', '$_POST[senha]',
    '$_POST[sexo]', '$_POST[nascimento]')";

mysql_query($query);

session_start();

$_SESSION["nome"] = $_POST["nome"]->nome;
$_SESSION["senha"] = $_POST["senha"]->senha;
$_SESSION["usuario"] = $_POST["usuario"]->usuario;

header("location: home-usuario.php");
exit;

?>
