<?php
include("conexao.php");
include("verificacao.php");
if ($_SESSION["usuario"] != "admin") {
  header("location: admin.php");
}
?>

<html>
  <head>
    <title>Visualizar produto</title>
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
      <li><a href="admin-produtos.php">Produtos</a></li>
      <li><a href="admin-usuarios.php">Usu&aacute;rios</a></li>
    </ul>
  </div>
  <div id="conteudo">
    <?php 
    $query = "select * from produtos where id = '$_GET[id]'";
    $sql = mysql_query($query);
    
    $produto = mysql_fetch_array($sql);    
    ?>
    <table id="texto" cellspacing="5">
      <?php if($produto["tipo"]=="Bandeira"){ ?>
      <tr>
        <td colspan="2" id="texto-titulo">Detalhes da Bandeira</td>
      </tr>
      <tr>
        <td>Nome: </td>
        <td><?php echo $produto["nome"]; ?></td>
      </tr>
      <tr>
        <td>Descri&ccedil;&atilde;o: </td>
        <td><?php echo $produto["descricao"]; ?></td>
      </tr>
      <tr>
        <td>Material: </td>
        <td><?php echo $produto["material"]; ?></td>
      </tr>
      <tr>
        <td>Cor: </td>
        <td><?php echo $produto["cor"]; ?></td>
      </tr>
      <tr>
        <td>Valor: </td>
        <td><?php echo $produto["valor"]; ?></td>
      </tr>
      <tr>
        <td>Quantidade: </td>
        <td><?php echo $produto["quantidade"]; ?></td>
      </tr>
      <?php } ?>
      <?php if($produto["tipo"]=="Camiseta"){ ?>
      <tr>
        <td colspan="2" id="texto-titulo">Detalhes da Camiseta</td>
      </tr>
      <tr>
        <td>Nome: </td>
        <td><?php echo $produto["nome"]; ?></td>
      </tr>
      <tr>
        <td>Descri&ccedil;&atilde;o: </td>
        <td><?php echo $produto["descricao"]; ?></td>
      </tr>
      <tr>
        <td>Material: </td>
        <td><?php echo $produto["material"]; ?></td>
      </tr>
      <tr>
        <td>Cor: </td>
        <td><?php echo $produto["cor"]; ?></td>
      </tr>
      <tr>
        <td>Tamanho: </td>
        <td><?php echo $produto["tamanho"]; ?></td>
      </tr>
      <tr>
        <td>Valor: </td>
        <td><?php echo $produto["valor"]; ?></td>
      </tr>
      <tr>
        <td>Quantidade: </td>
        <td><?php echo $produto["quantidade"]; ?></td>
      </tr>
      
      <?php } else if($produto["tipo"]=="CD") { ?>
      <tr>
        <td colspan="2" id="texto-titulo">Detalhes do CD</td>
      </tr>
      <tr>
        <td>Nome: </td>
        <td><?php echo $produto["nome"]; ?></td>
      </tr>
       <tr>
        <td>Descri&ccedil;&atilde;o: </td>
        <td><?php echo $produto["descricao"]; ?></td>
      </tr>
      <tr>
        <td>Valor: </td>
        <td><?php echo $produto["valor"]; ?></td>
      </tr>
      <tr>
        <td>Dura&ccedil;&atilde;o: </td>
        <td><?php echo $produto["duracao"]; ?></td>
      </tr>
      <tr>
        <td>Quantidade: </td>
        <td><?php echo $produto["quantidade"]; ?></td>
      </tr>
      <tr>
        <td valign="top">Faixas: </td>
        <td><?php $faixas = $produto["relacaomusicas"];
        echo nl2br($faixas); ?></td>
      </tr>
      <?php } else if($produto["tipo"]=="DVD") {?>
      <tr>
        <td colspan="2" id="texto-titulo">Detalhes do CD</td>
      </tr>
      <tr>
        <td>Nome: </td>
        <td><?php echo $produto["nome"]; ?></td>
      </tr>
      <tr>
        <td>Descri&ccedil;&atilede;o: </td>
        <td><?php echo $produto["descricao"]; ?></td>
      </tr>
      <tr>
        <td>Valor: </td>
        <td><?php echo $produto["valor"]; ?></td>
      </tr>
      <tr>
        <td>Dura&ccedil;&atilde;o: </td>
        <td><?php echo $produto["duracao"]; ?></td>
      </tr>
      <tr>
        <td>Quantidade: </td>
        <td><?php echo $produto["quantidade"]; ?></td>
      </tr>
      <tr>
        <td>Faixas: </td>
        <td><?php $faixas = $produto["relacaomusicas"];
        echo nl2br($faixas); ?></td>
      </tr>
      <?php } ?>
    </table>
  </div>
  </body>
</html>
