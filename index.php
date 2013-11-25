<html>
  <head>
    <title>Heavy store</title>
    <link href="padrao.css" rel="stylesheet" type="text/css">
  </head>
  <body bgcolor="#000">

    <?php include("menu.php"); ?>

    <?php if (@$_GET["erro"] == 1) { ?>
      <div id="erro" align="right">
        <p id="texto-erro">Usu&aacute;rio inexistente!</p>
      </div>
    <?php } ?>

    <?php if (@$_GET["erro"] == 2) { ?>
      <div id="erro" align="right">
        <p id="texto-erro">Senha incorreta!</p>
      </div>
    <?php } ?>

    <div id="conteudo">
      <div id="conteudo-esquerdo">
        <table cellspacing="5">
          <tr>
            <td id="texto-titulo">Produtos</td>
          </tr>
          <tr>
            <td><a href="produtos.php?p=bandeiras" id="no-link">Bandeiras</a></td>
          </tr>
          <tr>
            <td><a href="produtos.php?p=camisetas" id="no-link">Camisetas</a></td>
          </tr>
          <tr>
            <td><a href="produtos.php?p=cds" id="no-link">CDs</a></td>
          </tr>
          <tr>
            <td><a href="produtos.php?p=dvds" id="no-link">DVDs</a></td>
          </tr>
          <tr>
            <td id="texto-titulo">Hist&oacute;ria</td>
          </tr>
          <tr>
            <td><a href="historia.php" id="no-link">Hist&oacute;ria do Heavy Metal</a></td>
          </tr>
          <tr>
            <td id="texto-titulo">Cadastre-se</td>
          </tr>
          <tr>
            <td><a href="cadastro.php" id="no-link">Fa&ccedil;a seu Cadastro</a></td>
          </tr>
        </table>
      </div>
      <div id="conteudo-centro">
        <p id="texto-titulo" align="center" style="margin-top: 0;">Alguns de nossos produtos</p>
        <div id="conteudo-centro-foto" align="center">
          <?php
          include("conexao.php");
          $query_num = "select * from produtos";
          $sql_num = mysql_query($query_num);
          $numero_reg = mysql_num_rows($sql_num);

          $produto_grande_id = rand(1, $numero_reg);

          $query_produto = "select * from produtos
                  join fotos on fotos.produtosid = produtos.id
                  where produtos.id= '$produto_grande_id'
                    and fotos.principal = 0";
          $sql_produto = mysql_query($query_produto);
          
          $produto_grande = mysql_fetch_array($sql_produto);
          ?>
          <a href="detalhe-produto.php?id=<?php echo $produto_grande["id"]; ?>" id="no-link"><img src="images/produtos/<?php echo $produto_grande["foto"];?>" width="400px" style="border: 2px solid red; border-radius: 8px;"></a>        </div>
        <div id="conteudo-centro-fotos-produtos">

          <table id="texto">
          <?php
          include("conexao.php");

          for ($i = 0; $i < 4; $i++) {
          ?>
              <tr>
                <td>
            <?php
            $produto_id = rand(1, $numero_reg);
                        
            if ($produto_id == $produto_grande_id) {
              $produto_id = rand(1, $numero_reg);
            }
            $query = "select * from produtos
                  join fotos on fotos.produtosid = produtos.id
                  where produtos.id= '$produto_id'
                    and fotos.principal = 0";
            $sql = mysql_query($query);
            $produto = mysql_fetch_array($sql);
            ?>
                  <a href="detalhe-produto.php?id=<?php echo $produto["id"] ?>" id="no-link"><img src="images/produtos/<?php echo $produto["foto"] ?>" style="width: 100px; height: 100px;" id="thumbnail"/></a></td>
              </tr>
          <?php } ?>
          </table>
        </div>
      </div>
    </div>

  </body>
</html>