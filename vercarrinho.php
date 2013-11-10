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
    <div id="conteudo">
      <table align="center" width="95%" border="0" cellspacing="3" cellpadding="3" style="background-color: white">
        <tr>
          <td align="center" bgcolor="#333333" style=" color: #fff; font-weight: bold;">Produto</td>
          <td align="center" bgcolor="#333333" style=" color: #fff; font-weight: bold;">Qtde</td>
          <td align="center" bgcolor="#333333" style=" color: #fff; font-weight: bold;">Valor Unit&aacuterio</td>
          <td align="center" bgcolor="#333333" style=" color: #fff; font-weight: bold;">Valor Total</td>
        </tr>
        <?php
        $total = 0;
        for ($i = 0; $i < $tam; $i++) {
          ?>
          <tr>
            <td bgcolor="#EBEBEB"><?php echo $cesta[$i]["PRODUTO"]; ?></td>
            <td align="center" bgcolor="#EBEBEB"><input type="text" style="width: 35px;" value="<?php echo $cesta[$i]["QTD"]; ?>" name="qtde<?php echo $cesta[$i]["CODIGO"]; ?>" /> &nbsp; &nbsp; <img src="images/atualizar.jpg" width="16"  /></td>
            <td align="center" bgcolor="#EBEBEB">R$ <?php echo number_format($cesta[$i]["PRECO"], 2, ",", "."); ?></td>
            <td align="center" bgcolor="#EBEBEB">R$ <?php
              $subtotal = $cesta[$i]["QTD"] * $cesta[$i]["PRECO"];
              echo number_format($subtotal, 2, ",", ".");
              $total = $total + $subtotal;
              ?></td>
          </tr>
        <?php } ?>
        <tr>
          <td colspan="3" align="right" valign="middle" bgcolor="#E8E8E8" style="font-size: 15px; font-weight: bold;">CEP: <input type="text" maxlength="5" width="7" name="pt1" style="width: 45px;" /> - <input type="text" maxlength="3" width="5" name="pt2" style="width: 35px;" /> <input type="submit" value="calcular" style="font-size:11px;" /> </td>
          <td align="center" bgcolor="#EBEBEB" style="font-size: 15px; font-weight: bold;">&nbsp;</td>
        </tr>
        <tr><td colspan="3" align="right" valign="middle" bgcolor="#CCCCCC" style="font-size: 15px; font-weight: bold;">Total: </td><td align="center" bgcolor="#CCCCCC" style="font-size: 15px; font-weight: bold;">R$ <?php echo number_format($total, 2, ",", "."); ?></td></tr>
      </table>

      <div  style="float: left; position:relative; margin-top: 15px; width: 95%; text-align:right;">
        <a href="produtos.php"><img src="images/botao_continuar.png" width="159" height="45" border="0" /></a>
        &nbsp;&nbsp;&nbsp;&nbsp;<img src="images/botao_finalizar.png" width="159" height="45" />
      </div>
    </div>
  </body>
</html>