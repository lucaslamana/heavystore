<?php

include("conexao.php");

$query = "insert into produtos (nome, descricao, valor, duracao, quantidade,
  relacaomusicas, tipo) values ('$_POST[nome]', '$_POST[descricao]', '$_POST[valor]',
    '$_POST[duracao]', '$_POST[quantidade]', '$_POST[faixas]', 'DVD')";
mysql_query($query);

header("location: admin-produtos.php?f=t");
exit;

?>
