<html>
  <head>
    <title>Contato</title>
    <link href="padrao.css" rel="stylesheet" type="text/css">
  </head>

  <body bgcolor="#000">

    <div id="menu-topo"><ul id="menu-lista">
        <li><a href="historia.php">Hist&oacute;ria</a></li>
        <li><a href="produtos.php">Produtos</a></li>
        <li><a href="cadastro.php">Cadastre-se</a></li>
        <li><a href="contato.php"><b>Contato</b></a></li>
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
        <a href="index.php"><img src="images\logo.jpg"></a>
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

      <form>
        <table id="texto" cellspacing="5">
          <tr>
            <td>Nome</td>
            <?php             
            if($_SESSION["usuario"]!= "") { ?>
            <td><?php echo $_SESSION["nome"]; ?></td>
            <?php  }else{ ?>
            <td><input type="text" id="campo-longo"></td>
            <?php } ?>
          </tr>
          <tr>
            <td>E-mail</td>
            <td><input type="text" id="campo-longo"></td>
          </tr>
          <tr>
            <td>Assunto</td>
            <td><input type="text" id="campo-longo"></td>
          </tr>
          <tr>
            <td  valign="top">Mensagem</td>
            <td><textarea rows="5" cols="32" id="campo-texto"></textarea></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><input type="submit" value="Enviar" id="botao">
              <input type="reset" value="Limpar" id="botao"></td>
          </tr>
        </table>
      </form>
    </div>
  </body>

