<?php
include("verificacao.php");
if($_SESSION["usuario"]!="admin"){
  header("location: admin.php");
}
?>

<html>
  <head>
    <link rel="stylesheet" href="padrao.css" type="text/css">
  </head>
  <body bgcolor="#000">
    <div id="cabecalho">
      <div id="cabecalho-logo">
        <a href="admin-home.php"><img src="images/logo.jpg"></a>
      </div>
        <div id="cabecalho-login" align="right">
          <table id="texto">
            <tr>
              <td> <?php echo "Ola ".$_SESSION["nome"] ?> </td>
            </tr>
            <tr>
              <td align="right"><input type="button" id="botao" onclick="" value="Sair"></td>
            </tr>
          </table>
        </div>
      
    </div>
      <div id="menu-topo">
        <ul id="menu-lista">
          <li><a href="admin-produtos.php">Produtos</a></li>
          <li><a href="admin-usuarios.php">Usu&aacute;rios</a></li>
        </ul>
      </div>    
  </body>
</html>
