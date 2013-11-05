<?php
include("conexao.php");
include("verificacao.php");
if ($_SESSION["usuario"] != "admin") {
  header("location: admin.php");
}
?>

<html>
  <head>
    <title>Produtos</title>
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
    <table id="texto" width="100%" border="1" bordercolor='white'>
      <tr>
        <td colspan="6"><a href="novo-produto.php" id="no-link">Novo produto</a></td>
      </tr>
      <tr>
        <th bgcolor="red" align="center">Nome</th>
        <th bgcolor="red" align="center">Descri&ccedil;&atilde;o</th>
        <th bgcolor="red" align="center">Valor</th>
        <th bgcolor="red" align="center">Tipo</th>
        <th bgcolor="red" align="center">Qtd.</th>
        <th bgcolor="red" align="center">O&ccedil;&otilde;es</th>
      </tr>
      <?php
      $query = "select * from produtos order by nome;";
      $sql = mysql_query($query);

      while ($procura = mysql_fetch_array($sql)) {
        ?>
        <tr>
          <td><?php echo $procura["nome"]; ?></td>
          <td><?php
            $texto = $procura["descricao"];
            echo strlen($texto) > 50 ? (substr($texto, 0, 50)) . "..." : $texto;
            ?></td>
          <td align="center"><?php
            $valor = $procura["valor"];
            echo "R$ " . number_format($valor, 2, ',', '.');
            ?></td>  
          <td align="center"><?php echo $procura["tipo"]; ?></td>
          <td align="center"><?php echo $procura["quantidade"]; ?></td>
          <td align="center">
            <a href="editar-produto.php?nome=<?php echo $procura["nome"]; ?>&id=<?php echo $procura["id"]; ?>"><img src="images/edit.png" width="16" height="16" border="0"></a>
            <a href="visualizar-produto.php?id=<?php echo $procura["id"] ?>"><img src="images/view.png" width="16" height="16" border="0"></a>
            <a href="excluir-produto.php?id=<?php echo $procura["id"]; ?>"><img src="images/delete.png" width="16" height="16" border="0"></a>
            <a href="incluir-foto.php?nome=<?php echo $procura["nome"] ?>&id=<?php echo $procura["id"] ?>"><img src="images/foto.png" width="20" height="20" border="0"></td>
        </tr>
            <?php } ?>
      </table>
    </div>
  </body>
</html>
