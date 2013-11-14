<?php
include("verificacao-admin.php");
?>

<html>
  <head>
    <link rel="stylesheet" href="padrao.css" type="text/css">
  </head>
  <body bgcolor="#000">

    <div id="cabecalho">
      <div id="cabecalho-logo">
        <a href="admin-home.php"><img src="images/logo.jpg"></a>
      </div>
      <div id="cabecalho-login" align="right" colspan="3">
        <table id="texto">
          <tr>
            <td  align="right"> <?php echo "Ola " . $_SESSION["anome"] ?> </td>
          </tr>
          <tr>
            <td><a href="sair.php" id="no-link">Clique aqui </a> para sair</td>
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
                <option>Op&ccedil;&otilde;es</option>
                <option value="bandeira">Bandeira</option>
                <option value="camiseta">Camiseta</option>
                <option value="cd">CD</option>
                <option value="dvd">DVD</option>
              </select>
            </td>
          </tr>
          <tr>
            <td align="right" colspan="2"><input type="submit" id="botao" value="Ok"></td>
          </tr>
        </table>
      </form>
      <table id="texto" cellspacing="3">
        <?php if (@$_GET["escolha"] == "cd") { ?>
          <form method="post" action="insere-cd.php">
            <tr>
              <td id="texto-titulo" colspan="2">CD</td>
            </tr>
            <tr>
              <td>Nome</td>
              <td><input type="text" id="campo-longo" name="nome"></td>
            </tr>
            <tr>
              <td valign="top">Descri&ccedil;&atilde;o</td>
              <td><textarea rows="5" cols="29" id="campo-texto" name="descricao"></textarea></td>
            </tr>
            <tr>
              <td>Valor</td>
              <td><input type="text" id="campo-mais-curto" name="valor">
            </tr>
            <tr>
              <td>Dura&ccedil;&atilde;o</td>
              <td><input type="time" id="campo-mais-curto" name="duracao">
            </tr>
            <tr>
              <td>Quantidade</td>
              <td><input type="number" id="campo-mais-curto" name="quantidade">
            </tr>
            <tr>
              <td valign="top">Faixas</td>
              <td><textarea rows="8" cols="29" id="campo-texto" name="faixas"></textarea></td>
            </tr>
            <tr>
              <td><input type="submit" value="Cadastrar" id="botao"></td>
            </tr>
          </form>
        <?php } else if (@$_GET["escolha"] == "dvd") { ?>
          <form method="post" action="insere-dvd.php">
            <tr>
              <td id="texto-titulo" colspan="2">DVD</td>
            </tr>
            <tr>
              <td>Nome</td>
              <td><input type="text" id="campo-longo" name="nome"></td>
            </tr>
            <tr>
              <td  valign="top">Descri&ccedil;&atilde;o</td>
              <td><textarea rows="5" cols="29" id="campo-texto" name="descricao"></textarea></td>
            </tr>
            <tr>
              <td>Valor</td>
              <td><input type="text" id="campo-mais-curto" name="valor">
            </tr>
            <tr>
              <td>Dura&ccedil;&atilde;o</td>
              <td><input type="time" id="campo-mais-curto" name="duracao">
            </tr>
            <tr>
              <td>Quantidade</td>
              <td><input type="number" id="campo-mais-curto" name="quantidade">
            </tr>
            <tr>
              <td  valign="top">Faixas</td>
              <td><textarea rows="8" cols="29" id="campo-texto" name="faixas"></textarea></td>
            </tr>
            <tr>
              <td><input type="submit" value="Cadastrar" id="botao"></td>
            </tr>
          </form>
        <?php } else if (@$_GET["escolha"] == "camiseta") { ?>
          <form method="post" action="insere-camiseta.php">
            <tr>
              <td id="texto-titulo" colspan="2">Camiseta</td>
            </tr>
            <tr>
              <td>Nome</td>
              <td><input type="text" id="campo-longo" name="nome"></td>
            </tr>
            <tr>
              <td  valign="top">Descri&ccedil;&atilde;o</td>
              <td><textarea rows="5" cols="29" id="campo-texto" name="descricao"></textarea></td>
            </tr>
            <tr>
              <td>Material</td>
              <td><input type="text" id="campo-longo" name="material"></td>              
            </tr>
            <tr>
              <td>Cor</td>
              <td><input type="text" id="campo-mais-curto" name="cor">
            </tr>
            <tr>
              <td>Tamanho</td>
              <td><input type="radio" name="tamanho" value="PP">PP <input type="radio" name="tamanho" value="P">P <input type="radio" name="tamanho" value="M">M
                <input type="radio" name="tamanho" value="PP">G <input type="radio" name="tamanho" value="P">GG <input type="radio" name="tamanho" value="M">GG</td>
            </tr>
            <tr>
              <td>Valor</td>
              <td><input type="text" id="campo-mais-curto" name="valor">
            </tr>
            <tr>
              <td>Quantidade</td>
              <td><input type="number" id="campo-mais-curto" name="quantidade">
            </tr>
            <tr>
              <td><input type="submit" value="Cadastrar" id="botao"></td>
            </tr>
          </form>
        <?php } else if (@$_GET["escolha"] == "bandeira") { ?>
          <form method="post" action="insere-bandeira.php">
            <tr>
              <td id="texto-titulo" colspan="2">Bandeira</td>
            </tr>
            <tr>
              <td>Nome</td>
              <td><input type="text" id="campo-longo" name="nome"></td>
            </tr>
            <tr>
              <td  valign="top">Descri&ccedil;&atilde;o</td>
              <td><textarea rows="5" cols="29" id="campo-texto" name="descricao"></textarea></td>
            </tr>
            <tr>
              <td>Material</td>
              <td><input type="text" id="campo-longo" name="material"></td>              
            </tr>
            <tr>
              <td>Cor</td>
              <td><input type="text" id="campo-mais-curto" name="cor">
            </tr>
            <tr>
              <td>Valor</td>
              <td><input type="text" id="campo-mais-curto" name="valor">
            </tr>
            <tr>
              <td>Quantidade</td>
              <td><input type="number" id="campo-mais-curto" name="quantidade">
            </tr>
            <tr>
              <td><input type="submit" value="Cadastrar" id="botao"></td>
            </tr>
          </form>
        <?php } ?>
      </table>
    </div>

  </body>
</html>