<?php
include("verificacao-admin.php");
include("conexao.php");
?>

<html>
  <head>
    <link rel="stylesheet" href="padrao.css" type="text/css">
    <title>Hist&oacute;ria</title>
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
              <td  align="right"> <?php echo "Ola " . $_SESSION["anome"] ?> </td>
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
        <li><a href="admin-produtos.php?f=t">Produtos</a></li>
        <li><a href="admin-usuarios.php">Usu&aacute;rios</a></li>
        <li><a href="admin-historia.php"><b>Hist&oacute;ria</b></a></li>
      </ul>
    </div>
    <div id="conteudo">
      <form method="post" action="atualiza-historia.php">
        <table id="texto" cellspacing="5">
          <tr>
            <td>Hist&oacute;ria:</td>
          </tr>
          <tr>
            <td><textarea cols="70" rows="25" id="campo-texto" style="resize: none;" name="texto">
                <?php
                $query = "select * from historia";
                $sql = mysql_query($query);
                $texto = mysql_fetch_array($sql);

                echo $texto["texto"];
                ?>
              </textarea></td>
          </tr>
          <tr>
            <td><input type="submit" id="botao" value="Atualizar"></td>
          </tr>
        </table>
      </form>
    </div>

  </body>
</html>
