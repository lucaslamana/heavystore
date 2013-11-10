<html>
  <head>
    <link rel="stylesheet" href="padrao.css" type="text/css"/>
    <title>Hist&oacute;ria</title>
  </head>
  <body bgcolor="#000000">
    <?php
    include ("conexao.php");
    session_start();
    include("menu.php");
    ?>


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