<?php
include("verificacao.php");
if ($_SESSION["usuario"] != "admin") {
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
        <div id="cabecalho-login"></div>
      </div>
      <div id="cabecalho-login" align="right">
        <table id="texto">
          <tr>
            <td  align="right"> <?php echo "Ola " . $_SESSION["nome"] ?> </td>
          </tr>
          <tr>
            <td><a href="sair.php" id="no-link">Clique aqui </a> para sair</td>
          </tr>
        </table>
      </div>

    </div>
    <div id="menu-topo">
      <ul id="menu-lista">
        <li><a href="admin-produtos.php">Produtos</a></li>
        <li><a href="admin-usuarios.php"><b>Usu&aacute;rios</b></a></li>
      </ul>
    </div>

    <div id="conteudo">

    </div>

    <div id="rodape">

    </div>

  </body>
</html>
