<html>
  <head>
    <title>Contato</title>
    <link href="padrao.css" rel="stylesheet" type="text/css">
  </head>

  <body bgcolor="#000">
    <?php
    session_start();
    include ("menu.php");
    ?>       
    <div id="conteudo">

      <form>
        <table id="texto" cellspacing="5">
          <tr>
            <td>Nome</td>
            <?php if ($_SESSION["usuario"] != "") { ?>
              <td><?php echo $_SESSION["nome"]; ?></td>
            <?php } else { ?>
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

