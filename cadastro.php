<?php ?>
<html>
  <head>
    <link rel="stylesheet" href="padrao.css" type="text/css"/>
    <title>Cadastro</title>
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
        <a href="index.html"><img src="images/logo.jpg"/></a>
      </div>
    </div>

    <div id="conteudo">
      <table align="center" id="texto">
        <tr>
          <td colspan="2" align="center">Precisamos de algumas informa&ccedil;&otilde;es para realizar seu cadastro</td>
        </tr>
        <tr>
          <td align="right">Nome</td>
          <td><input type="text" style="width: 200px; border-radius: 8px;" name="nome"></td>
        </tr>
        <tr>
          <td align="right">E-mail</td>
          <td><input type="text" style="width: 200px; border-radius: 8px;" name="nome"></td>
        </tr>
        <tr>
          <td align="right">Sexo</td>
          <td><input type="radio" name="feminino" value="F">Feminino<br>
            <input type="radio" name="masculino" value="M">Masculino</td>
        </tr>
        <tr>
          <td align="right">Nascimento</td>
          <td><input type="date" name="nascimento" style="border-radius: 8px"></td>
        </tr>
        <tr>
          <td align="right">Usuario</td>
          <td><input type="text" style="width: 150px; border-radius: 8px;" name="nome"></td>
        </tr>
        <tr>
          <td align="right">Senha</td>
          <td><input type="text" style="width: 150px; border-radius: 8px;" name="nome"></td>
        </tr>
        <tr>
          <td align="right">Confirmar senha</td>
          <td><input type="text" style="width: 150px; border-radius: 8px;" name="nome"></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="submit" value="Enviar" id="botao">
            <input type="reset" value="Limpar" id="botao">
          </td>
        </tr>
      </table>
    </div>

  </body>
</html>