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
        <form method="post" style="margin: 0px">
          <table>
            <tr>
              <td><input type="text" style="width: 150px; padding: 0px; border-radius: 8px;" name="procurar" value="Procurar"></td>
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
        <!--Boas vindas usuário, botão para sair -->
      </div>
    </div>

    <div id="conteudo">
      <div id="conteudo-esquerdo"> </div>
      <div id="conteudo-centro"> </div>
    </div>

  </body>
</html>