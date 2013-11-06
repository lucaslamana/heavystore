<?php
include("conexao.php");
include("verificacao.php");
if ($_SESSION["usuario"] != "admin") {
  header("location: admin.php");
}
?>

<html>
  <head>
    <title>Editar</title>
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
            <td  align="right"> <?php echo "Ola " . $_SESSION["nome"] ?> </td>
          </tr>
          <tr>
            <td><a href="sair.php" id="no-link">Clique aqui </a> para sair</td>
          </tr>
        </table>
      </div>
    </div>

  </div>
  <div id="menu-topo">
    <ul id="menu-lista">
      <li><a href="admin-produtos.php"><b>Produtos</b></a></li>
      <li><a href="admin-usuarios.php">Usu&aacute;rios</a></li>
    </ul>
  </div>

  <div id="conteudo">
    <?php
    $query = "select * from produtos where id = '$_GET[id]'";
    $sql = mysql_query($query);

    $produto = mysql_fetch_array($sql);
    ?>
    <table id="texto" cellspacing="5">
      <?php if ($produto["tipo"] == "Bandeira") { ?>
        <form method="post" action="atualiza-produto.php?id=<?php echo $produto["id"]; ?>">
          <tr>
            <td id="texto-titulo" colspan="2">Bandeira</td>
          </tr>
          <tr>
            <td>Nome </td>
            <td><input type="text" id="campo-longo" name="nome" value="<?php echo $produto["nome"]; ?>"</td>
          </tr>
          <tr>
            <td  valign="top">Descri&ccedil;&atilde;o</td>
            <td><textarea rows="5" cols="32" id="campo-texto" name="descricao"><?php echo nl2br($produto["descricao"]); ?></textarea></td>
          </tr>
          <tr>
            <td>Material</td>
            <td><input type="text" id="campo-longo" name="material" value="<?php echo $produto["material"]; ?>"></td>              
          </tr>
          <tr>
            <td>Cor</td>
            <td><input type="text" id="campo-mais-curto" name="cor" value="<?php echo $produto["cor"]; ?>">
          </tr>
          <tr>
            <td>Valor</td>
            <td><input type="text" id="campo-mais-curto" name="valor" value="<?php echo $produto["valor"]; ?>">
          </tr>
          <tr>
            <td>Quantidade</td>
            <td><input type="number" id="campo-mais-curto" name="quantidade" value="<?php echo $produto["quantidade"]; ?>">
          </tr>
          <tr>
            <td><input type="submit" value="Atualizar" id="botao"></td>
          </tr>
        </form>
      <?php } else if ($produto["tipo"] == "Camiseta") { ?>
        <form method="post" action="atualiza-produto.php?id=<?php echo $produto["id"]; ?>">
          <tr>
            <td id="texto-titulo" colspan="2">Camiseta</td>
          </tr>
          <tr>
            <td>Nome: </td>
            <td><input type="text" id="campo-longo" name="nome" value="<?php echo $produto["nome"]; ?>"</td>
          </tr>
          <tr>
            <td  valign="top">Descri&ccedil;&atilde;o</td>
            <td><textarea rows="5" cols="32" id="campo-texto" name="descricao"><?php echo nl2br($produto["descricao"]); ?></textarea></td>
          </tr>
          <tr>
            <td>Material</td>
            <td><input type="text" id="campo-longo" name="material" value="<?php echo $produto["material"]; ?>"></td>              
          </tr>
          <tr>
            <td>Cor</td>
            <td><input type="text" id="campo-mais-curto" name="cor" value="<?php echo $produto["cor"]; ?>">
          </tr>
          <tr>
            <td>Tamanho</td>
            <td><input type="radio" name="tamanho" value="PP">PP <input type="radio" name="tamanho" value="P">P <input type="radio" name="tamanho" value="M">M
                <input type="radio" name="tamanho" value="PP">G <input type="radio" name="tamanho" value="P">GG <input type="radio" name="tamanho" value="M">GG</td>
          </tr>
          <tr>
            <td>Valor</td>
            <td><input type="text" id="campo-mais-curto" name="valor" value="<?php echo $produto["valor"]; ?>">
          </tr>
          <tr>
            <td>Quantidade</td>
            <td><input type="number" id="campo-mais-curto" name="quantidade" value="<?php echo $produto["quantidade"]; ?>">
          </tr>
          <tr>
            <td><input type="submit" value="Atualizar" id="botao"></td>
          </tr>
        </form>
      <?php } else if ($produto["tipo"] == "CD") { ?>
        <form method="post" action="atualiza-produto.php?id=<?php echo $produto["id"]; ?>">
          <tr>
            <td id="texto-titulo" colspan="2">CD</td>
          </tr>
          <tr>
            <td>Nome: </td>
            <td><input type="text" id="campo-longo" name="nome" value="<?php echo $produto["nome"]; ?>"</td>
          </tr>
          <tr>
            <td valign="top">Descri&ccedil;&atilde;o</td>
            <td><textarea rows="5" cols="29" id="campo-texto" name="descricao"><?php echo nl2br($produto["descricao"]); ?></textarea></td>
          </tr>
          <tr>
            <td>Valor</td>
            <td><input type="text" id="campo-mais-curto" name="valor" value="<?php echo $produto["valor"]; ?>">
          </tr>
          <tr>
            <td>Dura&ccedil;&atilde;o</td>
            <td><input type="time" id="campo-mais-curto" name="duracao" value="<?php echo $produto["duracao"]; ?>">
          </tr>
          <tr>
            <td>Quantidade</td>
            <td><input type="number" id="campo-mais-curto" name="quantidade" value="<?php echo $produto["quantidade"]; ?>">
          </tr>
          <tr>
            <td valign="top">Faixas</td>
            <td><textarea rows="8" cols="29" id="campo-texto" name="faixas"><?php echo nl2br($produto["relacaomusicas"]); ?></textarea></td>
          </tr>
          <tr>
            <td><input type="submit" value="Atualizar" id="botao"></td>
          </tr>
        </form>
      <?php } else if ($produto["tipo"] == "DVD") { ?>
        <form method="post" action="atualiza-produto.php?id=<?php echo $produto["id"]; ?>">
          <tr>
            <td id="texto-titulo" colspan="2">DVD</td>
          </tr>
          <tr>
            <td>Nome: </td>
            <td><input type="text" id="campo-longo" name="nome" value="<?php echo $produto["nome"]; ?>"</td>
          </tr>
        <?php } ?>
    </table>
  </div>
</body>
</html>
