<?php
include("verificacao.php");
include("conexao.php");
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

  </div>
  <div id="menu-topo">
    <ul id="menu-lista">
      <li><a href="admin-produtos.php">Produtos</a></li>
      <li><a href="admin-usuarios.php">Usu&aacute;rios</a></li>
    </ul>
  </div>

  <div id="conteudo">
    <table id="texto" width="100%" border="1" bordercolor='white'>
      <tr>
        <td colspan="5"><a href="novo-produto.php" id="no-link">Novo produto</a></td>
      </tr>
      <tr>
        <th bgcolor="red" align="center">Nome</th>
        <th bgcolor="red" align="center">Descri&ccedil;&atilde;o</th>
        <th bgcolor="red" align="center">Valor</th>
        <th bgcolor="red" align="center">Quantidade</th>
        <th bgcolor="red" align="center">O&ccedil;&otilde;es</th>
      </tr>
      <?php
      $query = "select * from produtos order by nome;";
      $sql = mysql_query($query);

      while ($procura = mysql_fetch_array($sql)) {
        ?>
        <tr>
          <td><?php echo $procura["nome"]; ?></td>
          <td><?php echo $procura["descricao"]; ?></td>
          <td align="center"><?php echo "R$ " . $procura["valor"] . ",00"; ?></td>
          <td align="center"><?php echo $procura["quantidade"]; ?></td>
          <td align="center">
            <a href="#"><img src="images/edit.png" width="16" height="16" border="0"></a>
            <a href="#"><img src="images/view.png" width="16" height="16" border="0"></a>
            <a href="#"><img src="images/delete.png" width="16" height="16" border="0"></a></td>
        </tr>
      <?php } ?>
    </table>
  </div>
</body>
</html>
