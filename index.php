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

    </div>

  </body>
</html>