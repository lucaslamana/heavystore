<?php ?>
<html>
  <head>
    <link rel="stylesheet" href="padrao.css" type="text/css"/>
    <title>Cadastro</title>
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
      <table id="texto" cellspacing="5">
        <tr>
          <td id="texto-titulo">Meu Cadastro</td>
        </tr>
        <tr>
          <td>Nome</td>
          <td><input type="text" id="campo-longo" name="nome"></td>
        </tr>
        <tr>
          <td>E-mail</td>
          <td><input type="text" id="campo-longo" name="nome"></td>
        </tr>
        <tr>
          <td>Sexo</td>
          <td><input type="radio" name="feminino" value="F">Feminino<br>
            <input type="radio" name="masculino" value="M">Masculino</td>
        </tr>
        <tr>
          <td>Nascimento</td>
          <td><input type="date" name="nascimento" id="campo-curto"></td>
        </tr>
        <tr>
          <td>Usuario</td>
          <td><input type="text" id="campo-curto" name="nome"></td>
        </tr>
        <tr>
          <td>Senha</td>
          <td><input type="password" id="campo-curto" name="nome"></td>
        </tr>
        <tr>
          <td>Confirmar senha</td>
          <td><input type="password" id="campo-curto" name="nome"></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
            <input type="submit" value="Enviar" id="botao" >
          </td>
        </tr>
      </table>
    </div>

  </body>
</html>