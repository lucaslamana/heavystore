<?php ?>

<html>
  <head>
    <link rel="stylesheet" href="padrao.css" type="text/css"/>
    <title>Home</title>
  </head>
  <body bgcolor="#000">

    <div id="menu-topo"><ul id="menu-lista">
        <li><a href="#">Hist&oacute;ria</a></li>
        <li><a href="produtos.php">Produtos</a></li>
        <li><a href="cadastro.php">Cadastre-se</a></li>
        <li><a href="#">Sobre</a></li>
        <li><a href="contato.php">Contato</a></li>
      </ul>

      <div id="menu-busca">
        <form method="post" style="margin: 0px">
          <table>
            <tr>
              <td><input type="text" id="campo" style="width: 200px;" name="procurar"></td>
              <td><input type="image" src="images/search.png" style="width: 18px; height: 18px; border-radius: 8px;" onclick="return alertar();" alt="Submit"></td>
            </tr>
          </table>  
        </form>
      </div>
    </div>
    <div id="cabecalho">
      <div id="cabecalho-logo">
        <a href="index.html"><img src="images/logo.jpg"/></a>
      </div>
    </div>

    <div id="conteudo">
      <div id="conteudo-esquerdo">
        <table id="texto">
          <tr>
            <td style="font-weight: bold;">Categorias</td>
          </tr>
          <tr>
            <td>Discos</td>
          </tr>
          <tr>
            <td>Camisetas</td>
          </tr>
          <tr>
            <td>Outros</td>
          </tr>
        </table>
      </div>
      <div id="conteudo-centro">
        <div id="conteudo-box"></div>
        <div id="conteudo-box"></div>
        <div id="conteudo-box"></div>
        <div id="conteudo-box"></div>
        <div id="conteudo-box"></div>
        <div id="conteudo-box"></div>
      </div>
    </div>

  </body>
</html>