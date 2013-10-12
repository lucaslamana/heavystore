<html>
  <head>
    <title>Contato</title>
    <link href="padrao.css" rel="stylesheet" type="text/css">
  </head>

  <body bgcolor="#000">

    <div id="menu-topo"><ul id="menu-lista">
        <li><a href="#">Hist&oacute;ria</a></li>
        <li><a href="#">Produtos</a>
          <ul><li><a href="#">Discos</a></li>
            <li><a href="#">Camisetas</a></li>
            <li><a href="#">Outros</a></li></ul>
        </li>

        <li><a href="#">Cadastre-se</a></li>
        <li><a href="#">N&oacute;s</a>
          <ul><li><a href="#">Sobre</a></li>
            <li><a href="#">Contato</a></li></ul>
        </li>
      </ul>

      <div id="menu-busca">
        <form method="post" style="margin: 0px">
          <table>
            <tr>
              <td><input type="text" style="width: 150px; padding: 0px; border-radius: 8px" name="procurar" value="Procurar"></td>
              <td><input type="image" src="images/search.png" style="width: 18px; height: 18px; border-radius: 8px;" onclick="return alertar();" alt="Submit"></td>
            </tr>
          </table>  
        </form>
      </div>
    </div>
    <div id="cabecalho-logo"><img src="images\logo.jpg"></div>

    <div id="conteudo-centro">

      <center> <form id="formulario" action="#" method="post" >
          <br><br>
          <font color ="#FFFFFF"  face="Calibri" font-size= 14px;>
          <label>Nome:  </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input name="nome" style="width: 400px; padding: 0px; border-radius: 8px" size="53" type="text"><br class="clear">
          <label>Email: </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <input name="email" style="width: 400px; padding: 0px; border-radius: 8px" size="53" type="text"><br class="clear">
          <label>Assunto: </label>&nbsp;&nbsp;&nbsp;
          <input name="assunto" style="width: 400px; padding: 0px; border-radius: 8px" size="53" type="text"><br class="clear">
          <br>
          <label>Mensagem: </label>&nbsp;
          <textarea cols="46" rows="10" name="mensagem" style="border-radius: 8px"></textarea><br class="clear">
          <br>
          <input class="botao" name="enviar" type="submit" value="Enviar" style="color: #000; font-family: Calibri; font-size: 14px; background-color: #fff; border-radius: 8px;">
          <input class="botao" name="limpar" type="reset" value="Limpar" style="color: #000; font-family: Calibri; font-size: 14px; background-color: #fff; border-radius: 8px;"><br class="clear" >
          </font>

        </form></center>

    </div>
  </body>

