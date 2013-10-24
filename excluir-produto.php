<?php

include("conexao.php");

$query = "delete from produtos where id='$_GET[id]'";
mysql_query($query);

header("location: admin-produtos.php");
exit;

?>
