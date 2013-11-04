<?php ?>
<html>
  <head>
    <link rel="stylesheet" href="padrao.css" type="text/css"/>
    <title>Produtos</title>
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
              <td><input type="text" id="campo-curto" name="procurar"></td>
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
        $txt = "select * from produtos join fotos on fotos.produtosid = produtos.id
          order by produtos.id desc";
        $sql = mysql_query($txt);

        while ($dados = mysql_fetch_array($sql)) {
          ?>

          <div id="conteudo-box">
            <table>
              <tr>
                <td id="texto-titulo" style="color: #000;" align="center"><?php echo $dados["tipo"] ?></td>
              </tr>
              <tr>
                <td align="center"><a href="detalhe-produto.php?id=<?php echo $dados["id"]; ?>"><img src="images/produtos/<?php echo $dados["foto"]; ?>" width="150dx" height="150dx"></a></td>
              </tr>
              <tr>
                <td align="center"><a href="detalhe-produto.php?id=<?php echo $dados["id"]; ?>" id="no-link" style="color: #000;"><?php echo $dados["nome"] . " - " . $dados["descricao"]; ?></a></td>
              </tr>
              <tr>
                <td align="center"><?php
                  $valor = $dados["valor"];
                  echo "R$ " . number_format($valor, 2, ',', '');
                  ?></td>
              </tr>
              <tr>
                <td align="center"><a href="#"><img src="images/botao_comprar.png" width="80" height="35"/></a></td>
              </tr>
            </table>
          </div>
        <?php } ?>
      </div>
    </div>

  </body>
</html>
