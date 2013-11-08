<?php
include ("conexao.php");
?>

<html>
  <head>
    <title>Heavy store</title>
    <link href="padrao.css" rel="stylesheet" type="text/css">
  </head>
  <body bgcolor="#000">

    <div id="menu-topo"><ul id="menu-lista">
        <li><a href="historia.php">Hist&oacute;ria</a></li>
        <li><a href="produtos.php">Produtos</a></li>
        <li><a href="cadastro.php">Cadastre-se</a></li>
        <li><a href="contato.php">Contato</a></li>
      </ul>

      <div id="menu-busca">
        <form method="post" action="busca.php"style="margin: 0px">
          <table>
            <tr>
              <td><input type="text" id="campo-curto" name="busca"></td>
              <td><input type="image" src="images/search.png" style="width: 18px; height: 18px; border-radius: 8px;" alt="Submit"></td>
            </tr>
          </table>  
        </form>
      </div>
    </div>

    <div id="cabecalho">
      <div id="cabecalho-logo">
        <img src="images/logo.jpg"/>
      </div>

      <div id="cabecalho-login" align="right">
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

    <div id="conteudo">
      <?php
      $query = "select * from produtos
        join fotos on fotos.produtosid = produtos.id
          and fotos.principal = 0
        where nome like '%$_POST[busca]%'";
      $sql = mysql_query($query);

      if (mysql_num_rows($sql) == 0) {
        ?>
        <p id="texto-erro">N&atilde;o foi encontrado o produto <?php echo $_POST["busca"]; ?> em nosso estoque!</p>
      <?php } else {
        while ($produto = mysql_fetch_array($sql)) {
          ?>
          <div id="conteudo-box">
            <table width="100%">
              <tr>
                <td id="texto-titulo" style="color: #000;" align="center"><?php echo $produto["tipo"] ?></td>
              </tr>
              <tr>
                <td align="center"><a href="detalhe-produto.php?id=<?php echo $produto["id"]; ?>"><img src="images/produtos/<?php echo $produto["foto"]; ?>" width="150dx" height="150dx"></a></td>
              </tr>
              <tr>
                <td align="center"><a href="detalhe-produto.php?id=<?php echo $produto["id"]; ?>" id="no-link" style="color: #000;"><?php
                    $descricao = $produto["nome"] . " - " . $produto["descricao"];
                    echo strlen($descricao) > 30 ? (substr($descricao, 0, 28)) . "..." : $descricao;
                    ?></a></td>
              </tr>
              <tr>
                <td align="center"><?php
                    $valor = $produto["valor"];
                    echo "R$ " . number_format($valor, 2, ',', '');
                    ?></td>
              </tr>
              <tr>
                <td align="center"><a href="#"><img src="images/botao_comprar.png" width="80" height="35"/></a></td>
              </tr>
            </table>
          </div>
  <?php }
} ?>
    </div>

  </body>
</html>