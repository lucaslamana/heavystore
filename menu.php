<div id="menu-topo"><ul id="menu-lista">
    <li><a href="historia.php">Hist&oacute;ria</a></li>
    <li><a href="produtos.php">Produtos</a></li>
    <li><a href="cadastro.php">Cadastre-se</a></li>
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
  <div id="cabecalho-login">

    <table id="texto">
      <div style="float:right; position:relative; margin-top: 65px; margin-left: 20px;"><a href="vercarrinho.php" style="text-decoration:none; color: red">
          <img src="images/carrinho.png" width="46" height="36" /><?php echo str_pad(@$_SESSION["tcarrinho"], 2, "0", STR_PAD_LEFT); ?></a></div>
      <?php
      @session_start();
      if (@$_SESSION["nome"] != "") {
        ?>
        <tr>
          <td  align="right"> <?php
            $first_name = explode(" ", $_SESSION["nome"]);
            echo "Ola " . $first_name[0];
            ?> </td>
        </tr>
        <tr>
          <td algin=""><a href="sair.php" id="no-link">Clique aqui </a> para sair</td>
        </tr>
      <?php } else {
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
