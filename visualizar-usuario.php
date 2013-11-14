<?php
include("verificacao-admin.php");
include("conexao.php");
?>

<html>
  <head>
    <title>Visualizar</title>
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
      <li><a href="admin-produtos.php">Produtos</a></li>
      <li><a href="admin-usuarios.php">Usu&aacute;rios</a></li>
      <li><a href="admin-historia.php">Hist&oacute;ria</a></li>
    </ul>
  </div>
  <div id="conteudo">
    <?php 
    $query = "select * from usuarios where id = '$_GET[id]'";
    $sql = mysql_query($query);
    
    $usuario = mysql_fetch_array($sql);    
    ?>
    <table id="texto" cellspacing="5">
      <tr>
        <td id="texto-titulo" colspan="2">Detalhes sobre <?php
          $nome = explode(" ", $usuario["nome"]);
          echo $nome[0];
        ?></td>
      </tr>
      <tr>
        <td><br></td>
      </tr>
      <tr>
        <td colspan="2"><i>Informa&ccedil;&otilde;es pessoais</i></td>
      </tr>
      <tr>
        <td>Nome: </td>
        <td><?php echo $usuario["nome"]; ?></td>
      </tr>
      <tr>
        <td>Sexo: </td>
        <td><?php echo $usuario["nome"] == "F" ? 'Feminino' : 'Masculino'; ?></td>
      </tr>
      <tr>
        <td>Nascimento: </td>
        <td><?php echo $usuario["nascimento"]; ?></td>
      </tr>
      <tr>
        <td>E-mail: </td>
        <td><?php echo $usuario["email"]; ?></td>
      </tr>
      <tr>
        <td>Usu&aacute;rio: </td>
        <td><?php echo $usuario["usuario"]; ?></td>
      </tr>
      <tr>
        <td><br></td>
      </tr>
      <tr>
        <td colspan="2"><i>Informa&ccedil;&otilde;es para contato</i></td>
      </tr>
      <tr>
        <td>Telefone: </td>
        <td><?php echo $usuario["fone"] == null ? 'N&atilde;o informado' : $usuario["fone"]; ?></td>
      </tr>
      <tr>
        <td>Logradouro: </td>
        <td><?php echo $usuario["logradouro"] == null ? 'N&atilde;o informado' : $usuario["logradouro"]; ?></td>
      </tr>
      <tr>
        <td>Bairro: </td>
        <td><?php echo $usuario["bairro"] == null ? 'N&atilde;o informado' : $usuario["bairro"]; ?></td>
      </tr>
      <tr>
        <td>Cep: </td>
        <td><?php echo $usuario["cep"] == null ? 'N&atilde;o informado' : $usuario["cep"]; ?></td>
      </tr>
      <tr>
        <td>Cidade: </td>
        <td><?php echo $usuario["cidade"] == null ? 'N&atilde;o informado' : $usuario["cidade"]; ?></td>
      </tr>
      <tr>
        <td>UF: </td>
        <td><?php echo $usuario["uf"] == null ? 'N&atilde;o informado' : $usuario["uf"]; ?></td>
      </tr>
    </table>
  </div>
  </body>
</html>
