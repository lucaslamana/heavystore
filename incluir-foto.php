<?php
include("verificacao.php");
?>

<html>
  <head>
    <link rel="stylesheet" href="padrao.css" type="text/css">
    <title>Incluir foto</title>
  </head>
  <body>
  <html>
    <head>
      <link rel="stylesheet" href="padrao.css" type="text/css">
    </head>
    <body bgcolor="#000">
      <div id="cabecalho">
        <div id="cabecalho-logo">
          <a href="admin-home.php"><img src="images/logo.jpg"></a>
        </div>
        <div id="cabecalho-login" align="right">
          <table id="texto">
            <tr>
              <td  align="right"> <?php echo "Ola " . $_SESSION["nome"] ?> </td>
            </tr>
            <tr>
              <td><a href="sair.php" id="no-link">Clique aqui </a> para sair</td>
            </tr>
          </table>
        </div>
      </div>

    </div>
    <div id="menu-topo">
      <ul id="menu-lista">
        <li><a href="admin-produtos.php"><b>Produtos</b></a></li>
        <li><a href="admin-usuarios.php">Usu&aacute;rios</a></li>
      </ul>
    </div>
    <div id="conteudo">
      <form method="post" action="upload-foto.php?nome=<?php echo $_GET["nome"]?>&id=<?php echo $_GET["id"] ?>" enctype="multipart/form-data">
        <table id="texto" cellspacing="5">
          <tr>
            <td>Nome:</td>
            <td><?php echo $_GET["nome"]; ?></td>
          </tr>
          <tr>          
            <td colspan="2"><input type="file" style="width: 300px;" name="foto"></td>
          </tr>
          <tr>
            <td><input type="radio" name="principal" value="0">Principal</td>
          </tr>
          <tr>
            <td><input type="radio" name="principal" value="1">Outra</td>
          </tr>
          <tr>
            <td><input type="submit" value="Enviar" id="botao"></td>
          </tr>
        </table>
      </form>
      
      <?php
      
      include("conexao.php");
      $query = "select * from fotos where produtosid = '$_GET[id]'";
      $sql = mysql_query($query);
      
      while ($fotos = mysql_fetch_array($sql)) {
      ?>
      <div id="conteudo-fotos">
        <img src="images/produtos/<?php echo $fotos["foto"]; ?>" id="thumbnail"/>
        <a href="excluir-imagem.php?id=<?php echo $fotos["idf"]; ?>&produto=<?php echo $_GET["nome"]; ?>&idproduto=<?php echo $_GET["id"]; ?>"><img src="images/delete.png"/></a>
      </div>
     <?php } ?>
    </div>

  </body>
</html>
