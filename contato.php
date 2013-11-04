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
        <li><a href="#">Sobre</a></li>
        <li><a href="contato.php"><b>Contato</b></a></li>
      </ul>

      <div id="menu-busca">
        <form method="post" style="margin: 0px">
          <table>
            <tr>
              <td><input type="text" id="campo-curto" name="procurar"></td>
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
    </div>
    <div id="conteudo">

      <form>
        <table id="texto" cellspacing="5">
          <tr>
            <td>Nome</td>
            <?php 
            session_start();
            
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

