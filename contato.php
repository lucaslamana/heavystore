<html>
  <head>
    <title>Contato</title>
    <link href="padrao.css" rel="stylesheet" type="text/css">
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
              <td><input type="text" style="width: 150px; padding: 0px; border-radius: 8px" name="procurar" value="Procurar"></td>
              <td><input type="image" src="images/search.png" style="width: 18px; height: 18px; border-radius: 8px;" onclick="return alertar();" alt="Submit"></td>
            </tr>
          </table>  
        </form>
      </div>
    </div>
    <div id="cabecalho">
      <div id="cabecalho-logo">
        <a href="index.html"><img src="images\logo.jpg"></a>
      </div>
    </div>
    <div id="conteudo-centro">

      <form>
        <table id="texto" align="center">
          <tr>
            <td align="right">Nome</td>
            <td><input type="text" style="width: 200px; border-radius: 8px;">
          </tr>
          <tr>
            <td align="right">E-mail</td>
            <td><input type="text" style="width: 200px; border-radius: 8px;">
          </tr>
          <tr>
            <td align="right">Assunto</td>
            <td><input type="text" style="width: 200px; border-radius: 8px;">
          </tr>
          <tr>
            <td align="right">Mensagem</td>
            <td><textarea rows="10" cols="22" style="border-radius: 8px;"></textarea>
          </tr>
          <tr>
            <td colspan="2" align="center"><input type="submit" value="Enviar" id="botao">
              <input type="reset" value="Limpar" id="botao"></td>
          </tr>
        </table>
      </form>
    </div>
  </body>

