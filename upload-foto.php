<?php

include("conexao.php");

$foto = $_FILES["foto"]["tmp_name"];
move_uploaded_file($foto, "images/produtos/".$_FILES["foto"]["name"]);

$query = "insert into fotos (foto, produtosid) values ('".$_FILES["foto"]["name"]."', '$_GET[id]')";
mysql_query($query);

header("location: admin-produtos.php");
exit;

?>
