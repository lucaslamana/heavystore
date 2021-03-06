<?php
include("conexao.php");
include("verificacao-admin.php");
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
            <td  align="right"> <?php echo "Ola " . $_SESSION["anome"] ?> </td>
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
      <li><a href="admin-produtos.php?f=t"><b>Produtos</b></a></li>
      <li><a href="admin-usuarios.php">Usu&aacute;rios</a></li>
      <li><a href="admin-historia.php">Hist&oacute;ria</a></li>
    </ul>
  </div>

  <div id="conteudo">
    <table id="texto" cellspacing="4" style="margin-bottom: 5px;">
      <form method="post" action="filtrar.php">
        <tr>
          <td>Filtrar por</td>
          <td><input type="text" id="campo-curto" name="filtro"></td>
          <td><input type="image" src="images/search.png" style="width: 25px; border-radius: 8px; outline: 0;" alt="Submit"></td>
        </tr>
      </form>
      <tr>
        <td colspan="2"><a href="novo-produto.php" id="no-link">Novo produto</a></td>
      </tr>
    </table>
    <table id="texto" width="100%" border="1" bordercolor='white'>
      <tr>
        <th bgcolor="red" align="center">Nome</th>
        <th bgcolor="red" align="center">Descri&ccedil;&atilde;o</th>
        <th bgcolor="red" align="center">Valor</th>
        <th bgcolor="red" align="center">Tipo</th>
        <th bgcolor="red" align="center">Qtd.</th>
        <th bgcolor="red" align="center">O&ccedil;&otilde;es</th>
      </tr>
      <?php
      if (@$_GET["f"] == "t") {
        $query = "select * from produtos order by id desc";
      }else{
        $query = "select * from produtos
          where nome like '%". $_GET["f"] ."%'
            or tipo like '%". $_GET["f"] ."%'
              order by id desc";
      }

      $sql = mysql_query($query);

      while ($produto = mysql_fetch_array($sql)) {
        ?>
        <tr>
          <td><?php echo $produto["nome"]; ?></td>
          <td><?php
      $descricao = $produto["descricao"];
      echo strlen($descricao) > 50 ? (substr($descricao, 0, 50)) . "..." : $descricao;
        ?></td>
          <td align="center"><?php
          $valor = $produto["valor"];
          echo "R$ " . number_format($valor, 2, ',', '.');
        ?></td>  
          <td align="center"><?php echo $produto["tipo"]; ?></td>
          <td align="center"><?php echo $produto["quantidade"]; ?></td>
          <td align="center">
            <a href="editar-produto.php?nome=<?php echo $produto["nome"]; ?>&id=<?php echo $produto["id"]; ?>"><img src="images/edit.png" width="16" height="16" border="0"></a>
            <a href="visualizar-produto.php?id=<?php echo $produto["id"] ?>"><img src="images/view.png" width="16" height="16" border="0"></a>
            <a href="excluir-produto.php?id=<?php echo $produto["id"]; ?>"><img src="images/delete.png" width="16" height="16" border="0"></a>
            <a href="incluir-foto.php?nome=<?php echo $produto["nome"] ?>&id=<?php echo $produto["id"] ?>"><img src="images/foto.png" width="20" height="20" border="0"></td>
              </tr>
            <?php } ?>
            </table>
            </div>
            </body>
            </html>
