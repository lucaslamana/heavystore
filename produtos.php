<?php include ("conexao.php"); ?>
<html>
  <head>
    <link rel="stylesheet" href="padrao.css" type="text/css"/>
    <title>Produtos</title>
  </head>
  <body bgcolor="#000">
    <?php include ("./menu.php"); ?>

    <div id="conteudo">
      <div id="conteudo-esquerdo">
        <table cellspacing="5">
          <tr>
            <td id="texto-titulo">Categorias</td>
          </tr>
          <tr>
            <td><a href="#" id="no-link">Bandeiras</a></td>
          </tr>
          <tr>
            <td><a href="#" id="no-link">Camisetas</a></td>
          </tr>
          <tr>
            <td><a href="#" id="no-link">CDs</a></td>
          </tr>
          <tr>
            <td><a href="#" id="no-link">DVDs</a></td>
          </tr>
        </table>
      </div>
      <div id="conteudo-centro" align="center">

        <?php
        $txt = "select * from produtos
          join fotos on fotos.produtosid = produtos.id
            and fotos.principal = 0
          order by produtos.id desc";
        $sql = mysql_query($txt);

        while ($dados = mysql_fetch_array($sql)) {
          ?>

          <div id="conteudo-box">
            <table width="100%">
              <tr>
                <td id="texto-titulo" style="color: #000;" align="center"><?php echo $dados["tipo"] ?></td>
              </tr>
              <tr>
                <td align="center"><a href="detalhe-produto.php?id=<?php echo $dados["id"]; ?>"><img src="images/produtos/<?php echo $dados["foto"]; ?>" width="150dx" height="150dx"></a></td>
              </tr>
              <tr>
                <td align="center"><a href="detalhe-produto.php?id=<?php echo $dados["id"]; ?>" id="no-link" style="color: #000;"><?php
                    $descricao = $dados["nome"] . " - " . $dados["descricao"];
                    echo strlen($descricao) > 30 ? (substr($descricao, 0, 28)) . "..." : $descricao;
                    ?></a></td>
              </tr>
              <tr>
                <td align="center"><?php
                  $valor = $dados["valor"];
                  echo "R$ " . number_format($valor, 2, ',', '');
                  ?></td>
              </tr>
              <tr>
                <td align="center"><a href="carrinho.php?id= <?php echo $dados["id"]; ?>"><img src="images/botao_comprar.png" width="80" height="35"/></a></td>
              </tr>
            </table>
          </div>
<?php } ?>
      </div>
    </div>

  </body>
</html>
