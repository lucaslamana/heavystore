<?php
      session_start();
      
      include("conexao.php");
      
      $txt = "select * from produtos where id= $_GET[id]";
      $sql = mysql_query($txt);
      $dados = mysql_fetch_array($sql);
      
      $cesta = @$_SESSION["cesta"];
	  $tt = @$_SESSION["tcarrinho"];
      
      $tam = count($cesta);
      
      if ($tam == 0) {
         $i=0;
		 $tt=1;
		 $cesta[$i]["CODIGO"] = $dados["id"];
		 $cesta[$i]["PRODUTO"] = $dados["tipo"]." - ".$dados["nome"]." - ".$dados["descricao"];
		 $cesta[$i]["PRECO"] = $dados["valor"];
		 $cesta[$i]["QTD"] = 1;    
      
      
      
      } else {
         $i=$tam;
		 $cesta[$i]["CODIGO"] = $dados["id"];
		 $cesta[$i]["PRODUTO"] = $dados["tipo"]." - ".$dados["nome"]." - ".$dados["descricao"];
		 $cesta[$i]["PRECO"] = $dados["valor"];
		 $cesta[$i]["QTD"] = 1;
		 $tt = $tt + $cesta[$i]["QTD"];
      
      
      }

       $_SESSION["cesta"] = $cesta;
	   $_SESSION["tcarrinho"] = $tt;
       
       header("location: vercarrinho.php");
       exit;



?>