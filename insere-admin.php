<?php
include("conexao.php");

$uquery = "select * from administrador where usuario = '$_POST[usuario]'";
if(mysql_num_rows(mysql_query($uquery))>0){
  header("location: novo-admin.php?erro=1");
  exit;
}

if($_POST["senha"]!=$_POST["confirmasenha"]){
  header("location: novo-admin.php?erro=2");
  exit;
}

$query = "insert into administrador (nome, usuario, senha) values ('$_POST[nome]',
  '$_POST[usuario]','$_POST[senha]')";
mysql_query($query);

header("location: admin-usuarios.php?inserido=ok")

?>
