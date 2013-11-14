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
    <?php if(@$_GET["inserido"]=="ok"){ ?>
  <div id="erro">
    <p id="texto-erro">Usu&aacute;rio inserido com sucesso</p>
  </div>
    <?php } ?>

    <div id="conteudo">
      <table width="100%" id="texto" border="1" bordercolor="white">
        <tr>
          <td colspan="6"><a href="novo-admin.php" id="no-link">Novo Administrador</a></td>
        </tr>
        <tr>
          <th bgcolor="red" align="center">Nome</th>
          <th bgcolor="red" align="center">Usu&aacute;rio</th>
          <th bgcolor="red" align="center">E-mail</th>
          <th bgcolor="red" align="center">Cidade</th>
          <th bgcolor="red" align="center">UF</th>
          <th bgcolor="red" align="center">Op&ccedil;&otilde;es</th>
        </tr>
        <?php
        include("conexao.php");

        $query = "select * from usuarios order by nome";
        $sql = mysql_query($query);

        while ($usuario = mysql_fetch_array($sql)) {
          ?>
          <tr>
            <td><?php echo $usuario["nome"]; ?></td>
            <td><?php echo $usuario["usuario"]; ?></td>
            <td><?php echo $usuario["email"]; ?></td>
            <td><?php echo (!empty($usuario["cidade"])) ? $usuario["cidade"] : "N&atilde;o informado"; ?></td>
            <td><?php echo (!empty($usuario["uf"])) ? $usuario["uf"] : "N&atilde;o informado"; ?></td>
            <td align="center">
            <a href="visualizar-usuario.php?id=<?php echo $usuario["id"]; ?>"><img src="images/view.png" width="16" height="16" border="0"></a>
            <a href="excluir-usuario.php?id=<?php echo $usuario["id"]; ?>"><img src="images/delete.png" width="16" height="16" border="0"></a></td>
          </tr>
        <?php } ?>

    </div>
  </body>
</html>
