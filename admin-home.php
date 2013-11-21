<?php
include("verificacao-admin.php");
?>

<html>
  <head>
    <title>Administrador</title>
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
              <td  align="right"> <?php echo "Ola ".$_SESSION["anome"] ?> </td>
            </tr>
            <tr>
              <td><a href="sair.php" id="no-link">Clique aqui </a> para sair</td>
            </tr>
          </table>
        </div>
      
    </div>
      <div id="menu-topo">
        <ul id="menu-lista">
          <li><a href="admin-produtos.php?f=t">Produtos</a></li>
          <li><a href="admin-usuarios.php">Usu&aacute;rios</a></li>
          <li><a href="admin-historia.php">Hist&oacute;ria</a></li>
        </ul>
      </div>  
    <?php 
    if(@$_GET["info"]==1){ ?>
    <div id="erro">
      <p id="texto-erro">Hist&oacute;ria atualizada!</p>
    </div>
    <?php } ?>
  </body>
</html>
