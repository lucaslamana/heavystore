<?php

include("conexao.php");

$query = "insert into produtos (nome, descricao, material, cor, valor, quantidade, 
  tipo) values ('$_POST[nome]', '$_POST[descricao]', '$_POST[material]',
    '$_POST[cor]', '$_POST[valor]', '$_POST[quantidade]', 'Bandeira')";
mysql_query($query);

header("location: admin-produtos.php");
exit;
?>
