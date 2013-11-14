<?php ?>
<html>
  <head>
    <link rel="stylesheet" href="padrao.css" type="text/css"/>
    <title>Cadastro</title>
    <script type="text/javascript" language="javascript">
      function validacao() {
        var nome = formulario.nome.value;
        var email = formulario.email.value;
        var sexo = formulario.sexo.value;
        var nascimento = formulario.nascimento.value;
        var usuario = formulario.usuario.value;
        var senha = formulario.senha.value;
        var confirmacaoSenha = formulario.confirmacaoSenha.value;

        if (nome == "") {
          alert("Campo NOME em branco");
          return false;
        }
        if (email == "") {
          alert("Campo EMAIL em branco");
          return false;
        }
        if (sexo == "") {
          alert("O campo SEXO deve ser assinalado");
          return false;
        }
        if (nascimento == "") {
          alert("Campo NASCIMENTO em branco");
          return false;
        }
        if (usuario == "") {
          alert("Campo USUARIO em branco");
          return false;
        }
        if (senha == "") {
          alert("Campo SENHA em branco");
          return false;
        }
        if (confirmacaoSenha == "") {
          alert("Campo SENHA em branco");
          return false;
        }

        if (senha != confirmacaoSenha) {
          alert("SENHA e CONFIRMAR SENHA devem ser iguais");
          return false;
        }
        return true;
      }
    </script>
  </head>
  <body bgcolor="#000">

    <div id="menu-topo"><ul id="menu-lista">
        <li><a href="historia.php">Hist&oacute;ria</a></li>
        <li><a href="produtos.php">Produtos</a></li>
        <li><a href="cadastro.php"><b>Cadastre-se</b></a></li>
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
    </div>

    <div id="conteudo">
      <form method="post" action="insere-usuario.php" name="formulario">
        <table id="texto" cellspacing="5">
          <tr>
            <td id="texto-titulo">Meu Cadastro</td>
          </tr>
          <tr>
            <td>Nome</td>
            <td><input type="text" id="campo-longo" name="nome"></td>
          </tr>
          <tr>
            <td>E-mail</td>
            <td><input type="text" id="campo-longo" name="email"></td>
          </tr>
          <tr>
            <td>Sexo</td>
            <td><input type="radio" name="sexo" value="F">Feminino<br>
              <input type="radio" name="sexo" value="M">Masculino</td>
          </tr>
          <tr>
            <td>Nascimento</td>
            <td><input type="date" id="campo-curto" name="nascimento"></td>
          </tr>
          <tr>
            <td>Usuario</td>
            <td><input type="text" id="campo-curto" name="usuario"></td>
          </tr>
          <?php if(@$_GET["erro"]==1){ ?>
          <tr>
            <td id="texto-erro" colspan="2">Este usu&aacute;rio j&aacute; existe!</td>
          </tr>
          <?php } ?>
          <tr>
            <td>Senha</td>
            <td><input type="password" id="campo-curto" name="senha"></td>
          </tr>
          <tr>
            <td>Confirmar senha</td>
            <td><input type="password" id="campo-curto" name="confirmacaoSenha"></td>
          </tr>
          <tr>
            <td>
              <input type="submit" value="Enviar" id="botao" onclick="return validacao();">
            </td>
          </tr>
        </table>
      </form>
    </div>

  </body>
</html>