<?php
include("verificacao.php");
include("conexao.php");
?>

<html>
  <head>
    <link rel="stylesheet" href="padrao.css" type="text/css"/>
    <title>Home</title>
  </head>
  <body bgcolor="#000">

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
          <tr>
            <td align="right"><?php $first_name = explode(" ", $_SESSION["nome"]);
            echo "Ola " . $first_name[0]; ?></td>
          </tr>
          <tr>
            <td><a href="sair.php" id="no-link">Clique aqui</a> para sair</td>
          </tr>
        </table>
      </div>
    </div>

    <div id="conteudo">
      <div id="conteudo-esquerdo">
        <table cellspacing="5">
          <tr>
            <td id="texto-titulo">Cadastro</td>
          </tr>
          <tr>
            <td><a href="home-usuario.php?pagina=info-pessoais" id="no-link">Informa&ccedil;&otilde;es Pessoais</a></td>
          </tr>
          <tr>
            <td><a href="home-usuario.php?pagina=info-local" id="no-link">Localiza&ccedil;&atilde;o</a></td>
          </tr>
          <tr>
            <td><a href="home-usuario.php?pagina=mudar-senha" id="no-link">Mudar a senha</a></td>
          </tr>
          <tr>
            <td><?php echo "<br/>"; ?></td>
          </tr>
          <tr>
            <td id="texto-titulo">Meus pedidos</td>
          </tr>
          <tr>
            <td><a href="home-usuario.php?pagina=ultimos-pedidos" id="no-link">Ultimos pedidos</a></td>
          </tr>
          <tr>
            <td><a href="home-usuario.php?pagina=meus-pedidos" id="no-link">Meus pedidos</a></td>
          </tr>
        </table>
      </div>
      <div id="conteudo-centro">
        <?php
        $query = "select * from usuarios where usuario = '$_SESSION[usuario]'";
        $sql = mysql_query($query);
        echo mysql_error();

        $usuario = mysql_fetch_array($sql);

        if ($_GET["pagina"] == "info-pessoais") {
          ?>
          <table id="texto" cellspacing="5">
            <tr>
              <td>Nome:</td>
              <td><?php echo $usuario["nome"]; ?></td>
            </tr>
            <tr>
              <td>E-mail:</td>
              <td><?php echo $usuario["email"]; ?></td>
            </tr>
            <tr>
              <td>Usu&aacute;rio:</td>
              <td><?php echo $usuario["usuario"]; ?></td>
            </tr>
            <tr>
              <td>Sexo: </td>
              <td><?php echo $usuario["sexo"] != "F" ? 'Masculino' : 'Feminino'; ?></td>
            </tr>
            <tr>
              <td>Nascimento:</td>
              <td><?php
                $data = $usuario["nascimento"];
                echo date('d/m/Y', strtotime($data));
                ?></td>
            </tr>
            <tr>
              <td><form method="post" action="home-usuario.php?pagina=edita-usuario">
                  <input type="submit" id="botao" value="Editar">
                </form></td>
            </tr>
          </table>
          <?php } else if ($_GET["pagina"] == "info-local") { ?>
          <table id="texto" cellspacing="5">
            <tr>
              <td>Telefone:</td>
              <td><?php echo!empty($usuario["fone"]) ? $usuario["fone"] : 'N&atilde;o informado'; ?></td>
            </tr>
            <tr>
              <td>Logradouro: </td>
              <td><?php echo !empty($usuario["logradouro"]) ? $usuario["logradouro"] : 'N&atilde;o informado'; ?></td>
            </tr>
            <tr>
              <td>Bairro: </td>
              <td><?php echo !empty($usuario["bairro"]) ? $usuario["bairro"] : 'N&atilde;o informado'; ?></td>
            </tr>
            <tr>
              <td>Cep: </td>
              <td><?php echo !empty($usuario["cep"]) ? $usuario["cep"] : 'N&atilde;o informado'; ?></td>
            </tr>
            <tr>
              <td>Cidade: </td>
              <td><?php echo !empty($usuario["cidade"]) ? $usuario["cidade"] : 'N&atilde;o informado'; ?></td>
            </tr>
            <tr>
              <td>UF: </td>
              <td><?php echo !empty($usuario["uf"]) ? $usuario["uf"] : 'N&atilde;o informado'; ?></td>
            </tr>
            <tr>
              <td><form method="post" action="home-usuario.php?pagina=edita-localizacao">
                  <input type="submit" id="botao" value="Editar">
                </form></td>
            </tr>
          </table>
          <?php } else if ($_GET["pagina"] == "edita-usuario") { ?>
          <form method="post" action="atualiza-usuario.php?id=<?php echo $usuario["id"]; ?>">
            <table id="texto" cellspacing="5">
              <tr>
                <td>Nome</td>
                <td><input type="text" id="campo-longo" name="nome" value="<?php echo $usuario["nome"]; ?>"></td>
              </tr>
              <tr>
                <td>E-mail</td>
                <td><input type="text" id="campo-longo"  name="email" value="<?php echo $usuario["email"]; ?>"></td>
              </tr>
              <tr>
                <td>Usu&aacute;rio</td>
                <td><input type="text" id="campo-curto" name="usuario" value="<?php echo $usuario["usuario"]; ?>"></td>
              </tr>
              <tr>
                <td>Sexo</td>
                <td><input type="radio" name="sexo" value="F" <?php echo $usuario["sexo"] == "F" ? 'checked' : ''; ?>>Feminino<br>
                  <input type="radio" name="sexo" value="M" <?php echo $usuario["sexo"] == "M" ? 'checked' : ''; ?>>Masculino</td>
              </tr>
              <tr>
                <td>Nascimento</td>
                <td><input type="date" id="campo-curto" name="nascimento" value="<?php echo $usuario["nascimento"]; ?>"></td>
              </tr>
              <tr>
                <td><input type="submit" id="botao" value="Atualizar"></td>
              </tr>
            </table>
          </form>
        <?php } else if($_GET["pagina"] == "edita-localizacao"){ ?>
        <form method="post" action="atualiza-endereco.php?id=<?php echo $usuario["id"];?>">
            <table id="texto" cellspacing="5">
              <tr>
                <td>Telefone</td>
                <td><input type="text" id="campo-curto" name="fone"></td>
              </tr>
              <tr>
                <td>Logradouro</td>
                <td><input type="text" id="campo-longo" name="logradouro"></td>
              </tr>
              <tr>
                <td>Bairro</td>
                <td><input type="text" id="campo-longo" name="bairro"></td>
              </tr>
              <tr>
                <td>CEP</td>
                <td><input type="text" id="campo-curto" name="cep"></td>
              </tr>
              <tr>
                <td>Cidade</td>
                <td><input type="text" id="campo-curto" name="cidade"></td>
              </tr>
              <tr>
                <td>UF</td>
                <td><select name="uf" id="campo-curto">
                      <option value="AC">Acre</option>
                      <option value="AL">Alagoas</option>
                      <option value="AM">Amazonas</option>
                      <option value="AP">Amap&aacute;</option>
                      <option value="BA">Bahia</option>
                      <option value="CE">Cear&aacute;</option>
                      <option value="DF">Distrito Federal</option>
                      <option value="ES">Espirito Santo</option>
                      <option value="GO">Goi&aacute;s</option>
                      <option value="MA">Maranh&atilde;o</option>
                      <option value="MG">Minas Gerais</option>
                      <option value="MS">Mato Grosso do Sul</option>
                      <option value="MT">Mato Grosso</option>
                      <option value="PA">Par&aacute;</option>
                      <option value="PB">Para&iacute;ba</option>
                      <option value="PE">Pernambuco</option>
                      <option value="PI">Piau&iacute;</option>
                      <option value="PR">Paran&aacute;</option>
                      <option value="RJ">Rio de Janeiro</option>
                      <option value="RN">Rio Grande do Norte</option>
                      <option value="RO">Rond&ocirc;nia</option>
                      <option value="RR">Roraima</option>
                      <option value="RS">Rio Grande do Sul</option>
                      <option value="SC">Santa Catarina</option>
                      <option value="SE">Sergipe</option>
                      <option value="SP">S&atilde;o Paulo</option>
                      <option value="TO">Tocantins</option>
                    </select></td>
              </tr>
              <tr>
                <td><input type="submit" id="botao" value="Atualizar"></td>
              </tr>
            </table>
          </form>
        <?php } else if($_GET["pagina"]=="mudar-senha"){ ?>
        <form method="post" action="atualiza-senha.php?id=<?php echo $usuario["id"]; ?>">
        <table id="texto" cellspacing="5">
          <?php if(@$_GET["erro"]==3){ ?>
          <tr>
            <td id="texto-erro" colspan="2">Senhas continuam iguais!</td>
          </t<>
          <?php } ?>
          <tr>
            <td>Senha atual</td>
            <td><input type="password" id="campo-curto" name="senha"></td>
          </tr>
          <?php if(@$_GET["erro"]==1){ ?>
          <tr>
            <td id="texto-erro" colspan="2">Senha n&atilde;o confere!</td>
          </tr>
          <?php } ?>
          <tr>
            <td>Nova senha</td>
            <td><input type="password" id="campo-curto" name="novasenha"></td>
          </tr>
          <tr>
            <td>Confirma&ccedil;&atilde;o</td>
            <td><input type="password" id="campo-curto" name="confirmasenha"></td>
          </tr>
          <?php if(@$_GET["erro"]==2){ ?>
          <tr>
            <td id="texto-erro" colspan="2">Senhas n&atilde;o conferem</td>
          </tr>
          <?php } ?>
          <tr>
            <td><input type="submit" id="botao" value="Atualizar"></td>
          </tr>
        </table>
        </form>
        <?php } else if($_GET["pagina"] == "resp-senha"){ ?>
          <p id="texto-titulo">Senha atualizada com sucesso!</p>
        <?php } ?>
      </div>
    </div>

  </body>
</html>