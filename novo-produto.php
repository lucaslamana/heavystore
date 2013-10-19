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
            <td> <?php echo "Ola " . $_SESSION["nome"] ?> </td>
          </tr>
          <tr>
            <td align="right"><input type="button" id="botao" onclick="" value="Sair"></td>
          </tr>
        </table>
      </div>
    </div>

    <div id="conteudo">
      <form method="post" action="escolha.php">
        <table id="texto">
          <tr>
            <td>Produto</td>
            <td>
              <select id="campo-curto" name="escolha">
                <option value="cd">CD</option>
                <option value="dvd">Op2</option>
                <option value="camiseta">Op3</option>
                <option value="bandeira">Op4</option>
              </select>
            </td>
          </tr>
          <tr>
            <td align="right" colspan="2"><input type="submit" id="botao" value="Ok"></td>
          </tr>
        </table>
      </form>
      <form method="post" action="#">
        <table id="texto" cellspacing="3">
          <?php if (@$_GET["escolha"] == "cd") { ?>
            <tr>
              <td id="texto-titulo" colspan="2">CD</td>
            </tr>
            <tr>
              <td>Nome</td>
              <td><input type="text" id="campo-longo" name="nome"></td>
            </tr>
            <tr>
              <td>Descri&ccedil;&atilde;o</td>
              <td><textarea rows="5" cols="29" style="border-radius: 8px; outline: 0;"></textarea></td>
            </tr>
            <tr>
              <td>Valor</td>
              <td><input type="text" id="campo-mais-curto" name="valor">
            </tr>
            <tr>
              <td>Dura&ccedil;&atilde;o</td>
              <td><input type="text" id="campo-mais-curto" name="duracao">
            </tr>
            <tr>
              <td>Quantidade</td>
              <td><input type="number" id="campo-mais-curto" name="quantidade">
            </tr>
            <tr>
              <td>Faixas</td>
              <td><textarea rows="8" cols="29" style="border-radius: 8px; outline: 0;"></textarea></td>
            </tr>
            <tr>
              <td><input type="submit" value="Cadastrar" id="botao"></td>
            </tr>
          <?php } else if (@$_GET["escolha"] == "dvd") { ?>
            <tr>
              <td>DVD</td>
            </tr>
          <?php } else if (@$_GET["escolha"] == "camiseta") { ?>
            <tr>
              <td>Camiseta</td>
            </tr>
          <?php } else if (@$_GET["escolha"] == "bandeira") { ?>
            <tr>
              <td>Bandeira</td>
            </tr>
          <?php } ?>
        </table>
      </form>
    </div>

  </body>
</html>