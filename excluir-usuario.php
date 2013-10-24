<?php

include("conexao.php");

$query = "delete from usuarios where id='$_GET[id]'";
mysql_query($query);

header("location: admin-usuario.php");
exit;

?>
