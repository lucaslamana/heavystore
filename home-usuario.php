<?php include("verificacao.php");?>

<html>
  <head>
    <link rel="stylesheet" href="padrao.css" type="text/css"/>
    <title>Home</title>
  </head>
  <body bgcolor="#000">

    <div id="menu-topo"><ul id="menu-lista">
        <li><a href="#">Hist&oacute;ria</a></li>
        <li><a href="#">Produtos</a></li>
        <li><a href="cadastro.php">Cadastre-se</a></li>
        <li><a href="#">Sobre</a></li>
        <li><a href="contato.php">Contato</a></li>
      </ul>

      <div id="menu-busca">
        <form method="post" action="busca.php" style="margin: 0px">
          <table>
            <tr>
              <td><input type="text" id="campo-curto" name="busca"></td>
              <td><input type="image" src="images/search.png" style="width: 18px; height: 18px; border-radius: 8px;" onclick="return alertar();" alt="Submit"></td>
            </tr>
          </table>  
        </form>
      </div>
    </div>
    <div id="cabecalho">
      <div id="cabecalho-logo">
        <a href="index.php"><img src="images/logo.jpg"/></a>
      </div>
      
      <div id="cabecalho-login">
        <table id="texto">
          <tr>
            <td align="right"><?php echo "Ol&aacute; ".$_SESSION["usuario"]?></td>
          </tr>
          <tr>
            <td><a href="sair.php" id="no-link">Clique aqui</a> para sair</td>
          </tr>
        </table>
      </div>
    </div>

    <div id="conteudo">
      <div id="conteudo-esquerdo">
        <table cellspacing="5">
          <tr>
            <td id="texto-titulo">Cadastro</td>
          </tr>
          <tr>
            <td><a href="#" id="no-link">Informa&ccedil;&otilde;es Pessoais</a></td>
          </tr>
          <tr>
            <td><a href="#" id="no-link">Localiza&ccedil;&atilde;o</a></td>
          </tr>
          
        </table>
      </div>
      <div id="conteudo-centro"> </div>
    </div>

  </body>
</html>