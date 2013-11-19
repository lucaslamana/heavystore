<?php

include("conexao.php");
include("verificacao-admin.php");

$query = "update historia set texto = '$_POST[texto]' where id = 1";
mysql_query($query);

header("location: admin-home.php?info=1");

?>
