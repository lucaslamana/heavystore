<?php
include("verificacao-admin.php");
?>

<html>
  <head>
    <title>Usuarios</title>
    <link rel="stylesheet" href="padrao.css" type="text/css">
  </head>
  <body bgcolor="#000">
    <div id="cabecalho">
      <div id="cabecalho-logo">
        <a href="admin-home.php"><img src="images/logo.jpg"></a>
        <div id="cabecalho-login"></div>
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
    <div id="menu-topo">
      <ul id="menu-lista">
        <li><a href="admin-produtos.php">Produtos</a></li>
        <li><a href="admin-usuarios.php"><b>Usu&aacute;rios</b></a></li>
        <li><a href="admin-historia.php">Hist&oacute;ria</a></li>
      </ul>
    </div>

    <div id="conteudo">
      <form method="post" action="insere-admin.php">
        <table cellspacing="5" id="texto">
          <tr>
            <td>Nome</td>
            <td><input type="texto" id="campo-longo" name="nome"></td>
          </tr>
          <tr>
            <td>Usu&aacute;rio</td>
            <td><input type="text" id="campo-curto" name="usuario"></td>
          </tr>
          <?php if(@$_GET["erro"]==1){ ?>
          <tr>
            <td id="texto-erro" colspan="2">Usu&aacute;rio j&aacute; existente</td>
          </tr>
          <?php } ?>
          <tr>
            <td>Senha</td>
            <td><input type="password" id="campo-curto" name="senha"></td>
          </tr>
          <tr>
            <td>Confirma</td>
            <td><input type="password" id="campo-curto" name="confirmasenha"></td>
          </tr>
          <?php if(@$_GET["erro"]==2){ ?>
          <tr>
            <td id="texto-erro" colspan="2">Senhas n&atilde;o conferem<td>
          </tr>
          <?php } ?>
          <tr>
            <td><input type="submit" id="botao" value="Cadastrar"</td>
          </tr>
        </table>
      </form>
    </div>
  </body>
</html>
