<?php
include("verificacao.php");
include("conexao.php");

$query = "select * from fotos where idf = '$_GET[id]'";
$sql = mysql_query($query);

$result = mysql_fetch_array($sql);

unlink("images/produtos/".$result["foto"]);

$queryDel = "delete from fotos where idf = '$_GET[id]'";
mysql_query($queryDel);

header("location: incluir-foto.php?nome=$_GET[produto]&id=$_GET[idproduto]");
?>
