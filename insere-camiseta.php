<?php

include("conexao.php");

$query = "insert into produtos (nome, descricao, material, cor, tamanho, valor,
  quantidade, tipo) values ('$_POST[nome]', '$_POST[descricao]', '$_POST[material]',
    '$_POST[cor]', '$_POST[tamanho]', '$_POST[valor]', '$_POST[quantidade]',
      'Camiseta')";
mysql_query($query);

header("location: admin-produtos.php");
exit;

?>
