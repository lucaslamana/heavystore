<?php

include("verificacao.php");
include("conexao.php");

$query = "select * from produtos where id = '$_GET[id]'";
$sql = mysql_query($query);

$usuario = mysql_fetch_array($sql);

if($usuario["tipo"]=="Bandeira"){
  $query = "update produtos set nome = '$_POST[nome]', descricao = '$_POST[descricao]',
    material = '$_POST[material]', cor = '$_POST[cor]', valor = '$_POST[valor]',
      quantidade = '$_POST[quantidade]' where id = '$_GET[id]'";
  mysql_query($query);
}else if($usuario["tipo"]=="Camiseta"){
  $query = "update produtos set nome = '$_POST[nome]', descricao = '$_POST[descricao]',
    material = '$_POST[material]', cor = '$_POST[cor]', tamanho = '$_POST[tamanho]',
       valor = '$_POST[valor]', quantidade = '$_POST[quantidade]' where id = '$_GET[id]'";
  mysql_query($query);
}else if($usuario["tipo"]=="CD"){
  $query = "update produtos set nome = '$_POST[nome]', descricao = '$_POST[descricao]',
     valor = '$_POST[valor]', duracao = '$_POST[duracao]', quantidade = '$_POST[quantidade]',
       relacaomusicas = '$_POST[faixas]' where id = '$_GET[id]'";
  mysql_query($query);
}else if($usuario["tipo"]=="DVD"){
  $query = "update produtos set nome = '$_POST[nome]]', descricao = '$_POST[descricao]',
     valor = '$_POST[valor]', duracao = '$_POST[duracao]', quantidade = '$_POST[quantidade]',
       relacaomusicas = '$_POST[faixas]' where id = '$_GET[id]'";
  mysql_query($query);
}

header("location: admin-produtos.php");
exit;
?>
