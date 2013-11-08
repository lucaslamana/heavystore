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
        <a href="index.php"><img src="images/logo.jpg"/></a>
      </div>
      <div id="cabecalho-login">
        <table id="texto">
          <?php 
          session_start();
          if(@$_SESSION["nome"]!=""){ ?>
          <tr>
            <td  align="right"> <?php $first_name = explode(" ", $_SESSION["nome"]);
            echo "Ola " . $first_name[0]; ?> </td>
          </tr>
          <tr>
            <td algin=""><a href="sair.php" id="no-link">Clique aqui </a> para sair</td>
          </tr>
          <?php }else{
          ?>
          <form method="post" action="validacao-usuario.php">
            <tr>
              <td align="right">Usu&aacute;rio</td>
              <td><input type="text"  id="campo-curto" style="width: 150px;" name="usuario"></td>
            </tr>
            <tr>
              <td align="right">Senha</td>
              <td><input type="password" id="campo-curto" style="width: 150px;" name="senha"></td>
            </tr>
            <tr>
              <td colspan="2" align="right"><input type="submit" value="Log in" id="botao"></td>
            </tr>
          </form>
          <?php } ?>
        </table>
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