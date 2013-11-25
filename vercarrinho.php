<?php
session_start();
@$cesta = $_SESSION["cesta"];
$tam = count($cesta);
?>

<html>
  <head>
    <title>Carrinho</title>
    <link href="padrao.css" rel="stylesheet" type="text/css" />
  </head>

  <body bgcolor="#000000">
    <?php include("conexao.php"); ?>    
    <?php include("menu.php"); ?>
    <div id="erro">
      <?php if(@$_GET["erro"]==1){ ?>
      <p id="texto-erro" align="right">Voc&ecirc; precisa estar logado para finalizar uma compra</p>
      <?php } else if(@$_GET["erro"]==2){?>
      <p id="texto-erro" align="right">A cesta de compras est&aacute; vazia!</p>
      <?php } ?>
    </div>
    <div id="conteudo">
      <table align="center" width="99%" border="0" cellspacing="3" cellpadding="3" id="texto">
        <tr>
          <td align="center" bgcolor="#000000" style=" color: red; font-weight: bold; font-size: 24px">Produto</td>
          <td align="center" bgcolor="#000000" style=" color: red; font-weight: bold; font-size: 24px">Qtde</td>
          <td align="center" bgcolor="#000000" style=" color: red; font-weight: bold; font-size: 24px">Valor Unit&aacuterio</td>
          <td align="center" bgcolor="#000000" style=" color: red; font-weight: bold; font-size: 24px">Valor Total</td>
        </tr>
        <?php
        $total = 0;
        for ($i = 0; $i < $tam; $i++) {
          ?>
          <tr>
            <td bgcolor="#333333"style="color: white">&nbsp;<a href="excluir-item-carrinho.php?"><img src="images/delete.png" width="12"/></a>&nbsp;&nbsp;<?php echo $cesta[$i]["PRODUTO"]; ?></td>
            <td align="center" bgcolor="#333333"><input type="number" style="width: 35px;" value="<?php echo $cesta[$i]["QTD"]; ?>" name="qtde<?php echo $cesta[$i]["CODIGO"]; ?>" /> &nbsp; &nbsp; <a href="#"><img src="images/atualizar.png" width="16"  /></td>
            <td align="center" bgcolor="#333333" style="color: white">R$ <?php echo number_format($cesta[$i]["PRECO"], 2, ",", "."); ?></td>
            <td align="center" bgcolor="#333333" style="color: white">R$ <?php
              $subtotal = $cesta[$i]["QTD"] * $cesta[$i]["PRECO"];
              echo number_format($subtotal, 2, ",", ".");
              $total = $total + $subtotal;
              ?></td>
          </tr>
        <?php } ?>
        <tr>
          <td colspan="3" align="right" valign="middle" bgcolor="#333333" style="font-size: 15px; font-weight: bold;color: white">CEP: <input type="text" maxlength="5" width="7" name="pt1" style="width: 45px;" /> - <input type="text" maxlength="3" width="5" name="pt2" style="width: 35px;" /> <input type="submit" value="calcular" style="font-size:11px;" /> </td>
          <td align="center" bgcolor="#333333" style="font-size: 15px; font-weight: bold;">&nbsp;</td>
        </tr>
        <tr><td colspan="3" align="right" valign="middle" bgcolor="#000000" style="font-size: 24px;font-weight: bold;color: red ">Total: </td><td align="center" bgcolor="#000000" style="font-size: 24px; font-weight: bold;color: red">R$ <?php echo number_format($total, 2, ",", "."); ?></td></tr>
      </table>

      <div  style="float: left; position:relative; margin-top: 15px; width: 95%; text-align:right;">
        <a href="produtos.php?p=todos"><img src="images/botao_continuar.png" width="159" height="45" border="0" /></a>
        <a href="finalizar-compra.php"><img src="images/botao_finalizar.png" width="159" height="45" /></a>
      </div>
    </div>
  </body>
</html>