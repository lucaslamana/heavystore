<?php include ("conexao.php"); ?>
<html>
  <head>
    <link rel="stylesheet" href="padrao.css" type="text/css"/>
    <title>Produtos</title>
  </head>
  <body bgcolor="#000">

    <div id="menu-topo"><ul id="menu-lista">
        <li><a href="historia.php">Hist&oacute;ria</a></li>
        <li><a href="produtos.php"><b>Produtos</b></a></li>
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
        $txt = "select * from produtos
          join fotos on fotos.produtosid = produtos.id
            and fotos.principal = 0
          order by produtos.id desc";
        $sql = mysql_query($txt);

        while ($dados = mysql_fetch_array($sql)) {
          ?>

          <div id="conteudo-box">
            <table width="100%">
              <tr>
                <td id="texto-titulo" style="color: #000;" align="center"><?php echo $dados["tipo"] ?></td>
              </tr>
              <tr>
                <td align="center"><a href="detalhe-produto.php?id=<?php echo $dados["id"]; ?>"><img src="images/produtos/<?php echo $dados["foto"]; ?>" width="150dx" height="150dx"></a></td>
              </tr>
              <tr>
                <td align="center"><a href="detalhe-produto.php?id=<?php echo $dados["id"]; ?>" id="no-link" style="color: #000;"><?php
                $descricao = $dados["nome"] . " - " . $dados["descricao"];
                echo strlen($descricao) > 30 ? (substr($descricao, 0, 28)) . "..." : $descricao;
                ?></a></td>
              </tr>
              <tr>
                <td align="center"><?php
                  $valor = $dados["valor"];
                  echo "R$ " . number_format($valor, 2, ',', ''); ?></td>
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
