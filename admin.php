<html>
  <head>
    <link rel="stylesheet" href="padrao.css" type="text/css">
    <title>P&aacute;gina administativa</title>
    <script type="text/javascript" language="javascript">
      function validaCampos(){
        var usuario = formulario.usuario.value;
        var senha = formulario.senha.value;
        
        if(senha=="" && usuario==""){
          alert("Usuario ou senha invalidos!");
          return false;
        }else{
          return true;
        }
      }
    </script>
  </head>
  <body bgcolor="#000">
    
    <div id="cabecalho">
      <div id="cabecalho-logo">
        <a href="index.php"><img src="images/logo.jpg"/></a>
      </div>
      <div id="cabecalho-login" align="right">
        <form method="post" action="validacao-admin.php" name="formulario">
          <table id="texto">
            <tr>
              <td align="right">Administrador</td>
              <td><input type="text" id="campo-curto" name="usuario"></td>
            </tr>
            <tr>
              <td align="right">Senha</td>
              <td><input type="password" id="campo-curto" name="senha"></td>
            </tr>
            <tr>
              <td colspan="2" align="right"><input type="submit" value="Log in" id="botao" onclick="return validaCampos();"></td>
            </tr>
          </table>
        </form>
      </div>
    </div>
    
    <?php if(@$_GET["erro"]==1) {?>
    <div id="erro" align="right">
      <p id="texto-erro">Usu&aacute;rio inexistente!</p>
    </div>
    <?php } ?>
    
    <?php if(@$_GET["erro"]==2) {?>
    <div id="erro" align="right">
      <p id="texto-erro">Senha incorreta!</p>
    </div>
    <?php } ?>
    
  </body>
</html>