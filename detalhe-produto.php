<?php ?>
<html>
  <head>
    <link rel="stylesheet" href="padrao.css" type="text/css"/>
    <title>Detalhes Produtos</title>
  </head>
  <body bgcolor="#000">

    <?php include ("conexao.php"); ?>

    <div id="menu-topo"><ul id="menu-lista">
        <li><a href="#">Hist&oacute;ria</a></li>
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

      <div id="conteudo-detalhe">
        <?php
        $txt = "select * from produtos join fotos on fotos.produtosid = produtos.id where produtos.id= $_GET[id]";
        $sql = mysql_query($txt);
        $dados = mysql_fetch_array($sql);
        ?><center>
          <?php echo $dados["tipo"]; ?>
          <br>
          <?php echo $dados["nome"]; ?>
          <br>
          <?php echo $dados["descricao"]; ?>
          <br>
          <?php echo "R$ " . $dados["valor"] . ",00"; ?>
          <br>
          <?php echo $dados["tamanho"] ?>
          <br>
          <?php echo $dados["relacaomusicas"] ?>
          <br></center>
      </div>
      <div id="conteudo-detalhe">
        <br><center>
          <img src="images/produtos/<?php echo $dados["foto"]; ?> " width="400dx">
          <br></center>
      </div>
    </div>

  </body>
</html>