<html>
  <head>
    <link rel="stylesheet" href="padrao.css" type="text/css"/>
    <title>Hist&oacute;ria</title>
  </head>
  <body bgcolor="#000">
    <?php include ("conexao.php"); ?>

    <div id="menu-topo"><ul id="menu-lista">
        <li><a href="historia.php">Hist&oacute;ria</a></li>
        <li><a href="produtos.php">Produtos</a></li>
        <li><a href="cadastro.php">Cadastre-se</a></li>
        <li><a href="#">Sobre</a></li>
        <li><a href="contato.php">Contato</a></li>
      </ul>

      <div id="menu-busca">
        <form method="post" action="busca.php" style="margin: 0px">
          <table>
            <tr>
              <td><input type="text" id="campo-curto" name="busca"></td>
              <td><input type="image" src="images/search.png" style="width: 18px; height: 18px; border-radius: 8px;" onclick="return alertar();" alt="Submit"></td>
            </tr>
          </table>  
        </form>
      </div>
    </div>
    <div id="cabecalho">
      <div id="cabecalho-logo">
        <a href="index.html"><img src="images/logo.jpg"/></a>
      </div>

    </div>

    <div id="conteudo" >
      <?php
      $txt = "select texto from historia";
      $sql = mysql_query($txt);
      $t = mysql_fetch_array($sql);
      ?>
      <br><center><img src="images/heavymetal.png" height="55" width="280"/></center><br>
      <font id="texto-titulo">
      <?php
      $hist = $t["texto"];
      echo nl2br($hist);
      ?>
      </font>
    </div>

  </body>
</html>