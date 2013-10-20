<?php

include("conexao.php");
$query = "insert into usuarios (nome, email, usuario, senha, sexo, nascimento)
  values ('$_POST[nome]', '$_POST[email]', '$_POST[usuario]]', '$_POST[senha]',
    '$_POST[sexo]', '$_POST[nascimento]')";

mysql_query($query);

session_start();

$_SESSION["nome"] = $_POST["nome"]->nome;
$_SESSION["senha"] = $_POST["senha"]->senha;
$_SESSION["usuario"] = $_POST["usuario"]->usuario;

header("location: home-usuario.php");
exit;

?>
