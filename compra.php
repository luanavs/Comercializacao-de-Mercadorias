<?php
  require_once('bd.class.php');
     
  // primeiro verificar se o código cadastrado nao existe

    $objBD = new bd();

    $objBD->conecta_mysql();

    $consulta = "SELECT * FROM mercadorias_cadastradas WHERE tipo_negocio = 'venda'";

    $resultado = mysql_query($consulta) ;

    $num_reg = mysql_num_rows($resultado);

   for($i=0; $i<$num_reg;$i++){

       if($resultado){
        $campo = mysql_fetch_array($resultado);
        $dados[$i][1] = $campo["codigo"];
        $dados[$i][2] = $campo ["tipo"];
        $dados[$i][3] = $campo ["quantidade"];
        $dados[$i][4] = $campo ["preco"];
        $dados[$i][5] = $campo ["tipo_negocio"];

      }else{
        echo 'Erro na execucao';
      }
  }
  
?>


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Comercialização de mercadorias</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- jquery -->
  <script src="jquery-3.1.1.js"></script>

    
      

    </script>
  </head>
  <body>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <div class="container">
  		  <div class="page-header">
      
        <center>
          <h1>Comercialização de mercadoria</h1>
        </center>
          <ul class="nav nav-tabs nav-justified">
          <li role="presentation" ><a href="index.php"><font size="4">Cadastrar</font></a></li>
          <li role="presentation" class="active"><a href="compra.php"><font size="4">Compra</font></a></li>
          <li role="presentation"  ><a href="venda.php"><font size="4">Venda</font></a></li>
        </ul>

      </div>
    <!-- Mostra produtos que estao a venda-->
   <div class="col-sm-4"></div>

    <div class="col-sm-4">

    <ul class="list-group">
      

        <?php 
          for($i=0; $i<$num_reg;$i++){

            echo " <li class='list-group-item list-group-item-succes'> <center><b>Código: </b>".$dados[$i][1]."</br> <b>Tipo: </b>".$dados[$i][2]."</br> <b>Quantidade: </b>".$dados[$i][3]."</br><b>Preço: </b>".$dados[$i][4]."</br> </center></li>"  ;
            
          }
         ?>
      
      
    </ul>

    </div>

	</div>

    <script src="js/bootstrap.min.js"></script>
  
  </body>
</html>
