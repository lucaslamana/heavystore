<?php

include("conexao.php");

$foto = $_FILES["foto"]["tmp_name"];
move_uploaded_file($foto, "images/produtos/".$_FILES["foto"]["name"]);

$query = "insert into fotos (foto, produtosid, principal) values
  ('".$_FILES["foto"]["name"]."', '$_GET[id]', '$_POST[principal]')";
mysql_query($query);

header("location: incluir-foto.php?nome=$_GET[nome]&id=$_GET[id]");
exit;

?>
