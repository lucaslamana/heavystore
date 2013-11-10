<?php
session_start();
?>
<html>
  <head>
    <link rel="stylesheet" href="padrao.css" type="text/css"/>
    <title>Detalhes Produtos</title>
  </head>
  <body bgcolor="#000">

    <?php include ("conexao.php"); ?>
    <?php include ("./menu.php"); ?>

    <div id="conteudo">
      <?php
      $txt = "select * from produtos join fotos on fotos.produtosid = produtos.id where produtos.id= $_GET[id] and fotos.principal=0";
      $sql = mysql_query($txt);
      $dados = mysql_fetch_array($sql);
      ?>
      <?php if (@$dados[tipo] == "CD") { ?>

        <div id="conteudo-detalhe">
          <br/>
          <img id="grande" src="images/produtos/<?php echo $dados["foto"]; ?> " width="400dx" height="400dx" border="0" style="border: 2px solid red;border-radius: 8px;">
          <br/>
          <?php
          $txt = "select * from fotos where produtosid = '$_GET[id]'";
          $sqlf = mysql_query($txt);
          while ($foto = mysql_fetch_object($sqlf)) {
            ?>
            <a href="#" onclick="document.getElementById('grande').src = 'images/produtos/<?php echo $foto->foto; ?>'"><img src="images/produtos/<?php echo $foto->foto; ?>" width="70" border="0" style="border: 2px solid red;border-radius: 8px; margin-left: 10px;" /></a>
          <?php } ?>
        </div>    

        <div id="conteudo-detalhe" >
          <form id="texto-detalhe">
            <font style="color: red"><h2>Detalhes do Produto</h2></font>

            <?php echo $dados["tipo"] . " - " . $dados["nome"]; ?>
            <br/><br/>
            <?php echo $dados["descricao"]; ?>
            <br/><br/>
            <?php echo "Faixas:" ?>
            <br/>
            <?php
            $relmusc = $dados["relacaomusicas"];
            echo nl2br($relmusc)
            ?>          
            <br/>
            <h2><?php
              $valor = $dados["valor"];
              echo "Valor: " . " R$ " . number_format($valor, 2, ',', '');
              ?></h2>
            <br/>
            <center><a href="carrinho.php?id= <?php echo $dados["id"]; ?>"><img src="images/botao_comprar.png" width="100" height="50"/></a></center>

            <br/>
          </form>
        </div>

      <?php } else if (@$dados[tipo] == "DVD") { ?>

        <div id="conteudo-detalhe">
          <br/>
          <img id="grande" src="images/produtos/<?php echo $dados["foto"]; ?> " width="400dx" height="400dx" border="0" style="border: 2px solid red;border-radius: 8px;">
          <br/>
          <?php
          $txt = "select * from fotos where produtosid = '$_GET[id]'";
          $sqlf = mysql_query($txt);
          while ($foto = mysql_fetch_object($sqlf)) {
            ?>
            <a href="#" onclick="document.getElementById('grande').src = 'images/produtos/<?php echo $foto->foto; ?>'"><img src="images/produtos/<?php echo $foto->foto; ?>" width="70" border="0" style="border: 2px solid red;border-radius: 8px; margin-left: 10px;" /></a>
          <?php } ?>
        </div>    

        <div id="conteudo-detalhe" >
          <form id="texto-detalhe">
            <font style="color: red"><h2>Detalhes do Produto</h2></font>

            <?php echo $dados["tipo"] . " - " . $dados["nome"]; ?>
            <br/><br/>
            <?php echo $dados["descricao"]; ?>
            <br/><br/>
            <?php echo "Faixas:" ?>
            <br/>
            <?php
            $relmusc = $dados["relacaomusicas"];
            echo nl2br($relmusc)
            ?>          
            <br/>
            <h2><?php
              $valor = $dados["valor"];
              echo "Valor: " . " R$ " . number_format($valor, 2, ',', '');
              ?></h2>
            <br/>
            <center><a href="carrinho.php?id= <?php echo $dados["id"]; ?>"><img src="images/botao_comprar.png" width="100" height="50"/></a></center>
            <br/>
          </form>
        </div>      

      <?php } else if (@$dados[tipo] == "Camiseta") { ?>

        <div id="conteudo-detalhe">
          <br/>
          <img id="grande" src="images/produtos/<?php echo $dados["foto"]; ?> " width="400dx" height="400dx" border="0" style="border: 2px solid red;border-radius: 8px;">
          <br/>
          <?php
          $txt = "select * from fotos where produtosid = '$_GET[id]'";
          $sqlf = mysql_query($txt);
          while ($foto = mysql_fetch_object($sqlf)) {
            ?>
            <a href="#" onclick="document.getElementById('grande').src = 'images/produtos/<?php echo $foto->foto; ?>'"><img src="images/produtos/<?php echo $foto->foto; ?>" width="70" border="0" style="border: 2px solid red;border-radius: 8px; margin-left: 10px;" /></a>
          <?php } ?>
        </div>

        <div id="conteudo-detalhe" >
          <form id="texto-detalhe">
            <font style="color: red"><h2>Detalhes do Produto</h2></font>

            <?php echo $dados["tipo"] . " - " . $dados["nome"]; ?>
            <br/><br/>
            <?php echo $dados["descricao"]; ?>
            <br/><br/>
            <?php echo "Cor: " . $dados["cor"] ?>
            <br/>
            <?php echo "Material: " . $dados["material"] ?>         
            <br/>
            <?php echo "Tamanho: " . $dados["tamanho"] ?>
            <br/>
            <h2><?php
              $valor = $dados["valor"];
              echo "Valor: " . " R$ " . number_format($valor, 2, ',', '');
              ?></h2>
            <br/>
            <center><a href="carrinho.php?id= <?php echo $dados["id"]; ?>"><img src="images/botao_comprar.png" width="100" height="50"/></a></center>
            <br/>
          </form>
        </div>

      <?php } else if (@$dados[tipo] == "Bandeira") { ?>

        <div id="conteudo-detalhe">
          <br/>
          <img id="grande" src="images/produtos/<?php echo $dados["foto"]; ?> " width="400dx" height="400dx" border="0" style="border: 2px solid red;border-radius: 8px;">
          <br/>
          <?php
          $txt = "select * from fotos where produtosid = '$_GET[id]'";
          $sqlf = mysql_query($txt);
          while ($foto = mysql_fetch_object($sqlf)) {
            ?>
            <a href="#" onclick="document.getElementById('grande').src = 'images/produtos/<?php echo $foto->foto; ?>'"><img src="images/produtos/<?php echo $foto->foto; ?>" width="70" border="0" style="border: 2px solid red;border-radius: 8px; margin-left: 10px;" /></a>
          <?php } ?>
        </div>

        <div id="conteudo-detalhe" >
          <form id="texto-detalhe">
            <font style="color: red"><h2>Detalhes do Produto</h2></font>
            <?php echo $dados["tipo"] . " - " . $dados["nome"]; ?>
            <br/><br/>
            <?php echo $dados["descricao"]; ?>
            <br/><br/>
            <?php echo $dados["cor"] ?>
            <br/>
            <?php echo $dados["material"] ?>         
            <br/>
            <?php echo $dados["tamanho"] ?>
            <br/>
            <h2><?php
              $valor = $dados["valor"];
              echo "Valor: " . " R$ " . number_format($valor, 2, ',', '');
              ?></h2>
            <br/>
            <center><a href="carrinho.php?id= <?php echo $dados["id"]; ?>"><img src="images/botao_comprar.png" width="100" height="50"/></a></center>
            <br/>
          </form>
        </div>
      <?php } ?>
    </div>
  </body>
</html>