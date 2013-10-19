<?php include("verificacao.php"); ?>

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
      
    </div>
      <div id="menu-topo">
        <ul id="menu-lista">
          <li><a href="admin-produtos.php">Produtos</a></li>
          <li><a href="admin-usuarios.php">Usu&aacute;rios</a></li>
        </ul>
      </div>
    
    <div id="conteudo">
      <table id="texto" cellspancing="5" width="100%">
        <tr>
          <td colspan="2"><a href="novo-produto.php" id="no-link">Novo produto</a></td>
        </tr>
        <tr>
          <td bgcolor="red" align="center">Nome</td>
          <td bgcolor="red" align="center">Descri&ccedil;&atilde;o</td>
          <td bgcolor="red" align="center">Valor</td>
          <td bgcolor="red" align="center">O&ccedil;&otilde;es</td>
        </tr>
      </table>
    </div>
    
    <div id="rodape">
      
    </div>
    
  </body>
</html>
