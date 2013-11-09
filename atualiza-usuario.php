<?php
include("conexao.php");

$query = "update usuarios set nome = '$_POST[nome]', email = '$_POST[email]',
  usuario = '$_POST[usuario]', sexo = '$_POST[sexo]', nascimento = '$_POST[nascimento]'
    where id = '$_GET[id]'";

mysql_query($query);

header("location: home-usuario.php?pagina=info-pessoais");

?>
