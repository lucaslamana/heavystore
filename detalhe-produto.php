<?php ?>
<html>
  <head>
    <link rel="stylesheet" href="padrao.css" type="text/css"/>
    <title>Detalhes Produtos</title>
  </head>
  <body bgcolor="#000">

    <?php include ("conexao.php"); ?>

    <div id="menu-topo"><ul id="menu-lista">
        <li><a href="historia.php">Hist&oacute;ria</a></li>
        <li><a href="produtos.php"><b>Produtos</b></a></li>
        <li><a href="cadastro.php">Cadastre-se</a></li>
        <li><a href="#">Sobre</a></li>
        <li><a href="contato.php">Contato</a></li>
      </ul>

      <div id="menu-busca">
        <form method="post" style="margin: 0px">
          <table>
            <tr>
              <td><input type="text" id="campo" style="width: 200px;" name="procurar"></td>
              <td><input type="image" src="images/search.png" style="width: 18px; height: 18px; border-radius: 8px;" onclick="return alertar();" alt="Submit"></td>
            </tr>
          </table>  
        </form>
      </div>
    </div>
    <div id="cabecalho">
      <div id="cabecalho-logo">
        <a href="index.php"><img src="images/logo.jpg"/></a>
      </div>
    </div>

    <div id="conteudo">
      <?php
      $txt = "select * from produtos join fotos on fotos.produtosid = produtos.id where produtos.id= $_GET[id] and fotos.principal=0";
      $sql = mysql_query($txt);
      $dados = mysql_fetch_array($sql);
      ?>

      <div id="conteudo-detalhe">
        <br>
        <img id="grande" src="images/produtos/<?php echo $dados["foto"]; ?> " width="400dx" height="400dx" border="0" style="border: 2px solid red;border-radius: 8px;">
        <br>
        <br>
        <?php
        $txt = "select * from fotos where produtosid = '$_GET[id]'";
        $sqlf = mysql_query($txt);
        while ($foto = mysql_fetch_object($sqlf)) {
          ?>
        <a href="#" onclick="document.getElementById('grande').src='images/produtos/<?php echo $foto->foto; ?>'"><img src="images/produtos/<?php echo $foto->foto; ?>" width="70" border="0" style="border: 2px solid red;border-radius: 8px; margin-left: 10px;" /></a>
        <?php } ?>
      </div>    

      <div id="conteudo-detalhe" >
        <form id="texto-detalhe">
          <table id="texto-detalhe" width="120%">
            <tr>
              <td align="center"><a href="#"><img src="images/botao_comprar.png" width="90" height="40"/></a></td>
              <td align="center"><?php
                $valor = $dados["valor"];
                echo "Valor: " . " R$ " . number_format($valor, 2, ',', '');
                ?> </td>
            </tr>
          </table>
          <br>
          Detalhes do Produto
          <br><br>              
          <?php echo $dados["tipo"]; ?>
          <br>
          <?php echo $dados["nome"]; ?>
          <br>
          <?php echo $dados["descricao"]; ?>
          <br>
          <?php echo $dados["cor"] ?>
          <br>
          <?php echo $dados["material"] ?>
          <br>
          <?php echo $dados["tamanho"] ?>
          <br>
          <?php
          $relmusc = $dados["relacaomusicas"];
          echo nl2br($relmusc)
          ?>
          <br>
        </form>
      </div>

    </div>

  </body>
</html>