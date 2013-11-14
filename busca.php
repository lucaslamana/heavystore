<?php
include ("conexao.php");
?>

<html>
  <head>
    <title>Heavy store</title>
    <link href="padrao.css" rel="stylesheet" type="text/css">
  </head>
  <body bgcolor="#000">

    <?php include("menu.php");?>
    
    <div id="conteudo">
      <?php
      $query = "select * from produtos
        join fotos on fotos.produtosid = produtos.id
          and fotos.principal = 0
        where nome like '%$_POST[busca]%'
          or tipo like'%$_POST[busca]%'";
      $sql = mysql_query($query);

      if (mysql_num_rows($sql) == 0) {
        ?>
        <p id="texto-erro">N&atilde;o foi encontrado o produto <?php echo $_POST["busca"]; ?> em nosso estoque!</p>
      <?php } else {
        while ($produto = mysql_fetch_array($sql)) {
          ?>
          <div id="conteudo-box">
            <table width="100%">
              <tr>
                <td id="texto-titulo" style="color: #000;" align="center"><?php echo $produto["tipo"] ?></td>
              </tr>
              <tr>
                <td align="center"><a href="detalhe-produto.php?id=<?php echo $produto["id"]; ?>"><img src="images/produtos/<?php echo $produto["foto"]; ?>" width="150dx" height="150dx"></a></td>
              </tr>
              <tr>
                <td align="center"><a href="detalhe-produto.php?id=<?php echo $produto["id"]; ?>" id="no-link" style="color: #000;"><?php
                    $descricao = $produto["nome"] . " - " . $produto["descricao"];
                    echo strlen($descricao) > 30 ? (substr($descricao, 0, 28)) . "..." : $descricao;
                    ?></a></td>
              </tr>
              <tr>
                <td align="center"><?php
                    $valor = $produto["valor"];
                    echo "R$ " . number_format($valor, 2, ',', '');
                    ?></td>
              </tr>
              <tr>
                <td align="center"><a href="#"><img src="images/botao_comprar.png" width="80" height="35"/></a></td>
              </tr>
            </table>
          </div>
  <?php }
} ?>
    </div>

  </body>
</html>