<?php
include("conexao.php");

$query = "update usuarios set fone = '$_POST[fone]', logradouro = '$_POST[logradouro]',
  bairro = '$_POST[bairro]', cep = '$_POST[cep]', cidade = '$_POST[cidade]',
    uf = '$_POST[uf]' where id = '$_GET[id]'";

mysql_query($query);

header("location: home-usuario.php?pagina=info-local");

?>
