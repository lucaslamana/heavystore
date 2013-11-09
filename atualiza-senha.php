<?php

include("conexao.php");

if($_POST["novasenha"] == $_POST["senha"]){
  header("location: home-usuario.php?pagina=mudar-senha&erro=3");
  exit;
}

if($_POST["novasenha"] != $_POST["confirmasenha"]){
  header("location: home-usuario.php?pagina=mudar-senha&erro=2");
  exit;
}

$query = "select * from usuarios where id = '$_GET[id]' and senha = '$_POST[senha]'";
$sql = mysql_query($query);

if(mysql_num_rows($sql)>0){
  $query = "update usuarios set senha = '$_POST[novasenha]' where id = '$_GET[id]'";
  mysql_query($query);
  
  header("location: home-usuario.php?pagina=resp-senha");
}else{
  header("location: home-usuario.php?pagina=mudar-senha&erro=1");
  exit;
}

?>
