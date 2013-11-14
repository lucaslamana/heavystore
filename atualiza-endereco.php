<?php
include("conexao.php");

if(!ereg("(([0-9]{2}.)?([0-9]{4,5})[-]([0-9]{4}))", $_POST["fone"])){
  header("location: home-usuario.php?pagina=edita-localizacao&invalido=1");
  exit;
}

if(!ereg("(([0-9]{2}[.])([0-9]{3}[-])([0-9]{3}))", $_POST["cep"])){
  header("location: home-usuario.php?pagina=edita-localizacao&invalido=2");
  exit;
}

$query = "update usuarios set fone = '$_POST[fone]', logradouro = '$_POST[logradouro]',
  bairro = '$_POST[bairro]', cep = '$_POST[cep]', cidade = '$_POST[cidade]',
    uf = '$_POST[uf]' where id = '$_GET[id]'";

mysql_query($query);

header("location: home-usuario.php?pagina=info-local");

?>
