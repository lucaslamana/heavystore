<html>
  <head>
    <title>Heavy store</title>
    <link href="padrao.css" rel="stylesheet" type="text/css">
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
              <td><input type="text" id="campo-curto" name="procurar"></td>
              <td><input type="image" src="images/search.png" style="width: 18px; height: 18px; border-radius: 8px;" onclick="" alt="Submit"></td>
            </tr>
          </table>  
        </form>
      </div>
    </div>
    
    <div id="cabecalho">
      <div id="cabecalho-logo">
        <img src="images/logo.jpg"/>
      </div>
      
      <div id="cabecalho-login" align="right">
        <form method="post" action="validacao-usuario.php">
          <table id="texto">
            <tr>
              <td align="right">Usu&aacute;rio</td>
              <td><input type="text"  id="campo-curto" style="width: 150px;" name="usuario"></td>
            </tr>
            <tr>
              <td align="right">Senha</td>
              <td><input type="password" id="campo-curto" style="width: 150px;" name="senha"></td>
            </tr>
            <tr>
              <td colspan="2" align="right"><input type="submit" value="Log in" id="botao"></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
    
    <div id="conteudo"> </div>
    
  </body>
</html>