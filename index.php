<?php 
$cdg = isset($_GET['cdg']) ? $_GET['cdg'] : -1;
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
	  <!-- verificacaodos campos vazios-->	
	  <script type="text/javascript">
	  	$(document).ready(function(){
	  		//verifica se os campos foram devidamente preenchida
		  	$('#btn_cadastrar').click(function (){
	  			 var campo_vazio = false;
	  			 if( $('#_codigo').val() == ''){
	  			 	$('#_codigo').css({'border-color'  : '#FF0000'});
	  			 	campo_vazio = true; 
	  			 }
	  			 if( $('#_tipo').val() == ''){
	  			 	$('#_tipo').css({'border-color'  : '#FF0000'});
	  			 	campo_vazio = true; 
	  			 }
	  			 if( $('#_qtde').val() == ''){
	  			 	$('#_qtde').css({'border-color'  : '#FF0000'});
	  			 	campo_vazio = true; 
	  			 }
	  			 if( $('#_preco').val() == ''){
	  			 	$('#_preco').css({'border-color'  : '#FF0000'});
	  			 	campo_vazio = true; 
	  			 }
	  			
	  			 
	  			 if (campo_vazio) return false;
	  		});
	  	});	
	  </script>

  </head>
  <body>
    
  	<div class="container">
  		<div class="page-header">
	  		<center>
	  			<h1>Comercialização de mercadoria</h1>
	  		</center>
	  		<ul class="nav nav-tabs nav-justified">
			  <li role="presentation" class="active"><a href="index.php"><font size="4">Cadastrar</font></a></li>
			  <li role="presentation"><a href="compra.php"><font size="4">Compra</font></a></li>
			  <li role="presentation"><a href="venda.php"><font size="4">Venda</font></a></li>
			</ul>
  		</div>	
			

  		
  		
  		<div class="row">
  		<div class="col-sm-2"></div>
  			<div class="col-sm-8">
  			<h1>Cadastrar mercadoria</h1>
  				<form role="form" action="registromercadorias.php" method="post" id="CadastroMercadoria">
  					<div class="form-group">
		  				<label for="codigo">Código da mercadoria:</label></br>	
		  				<input type="text" class="form-control" name ="codigo"  id="_codigo">
		  			</div>
		  			
		  			<div class="form-group">
		  				<label for="tipo">Tipo da mercadoria:</label></br>	
		  				<input type="text" class="form-control" name="tipo" id="_tipo">
		  			</div>
		  			<div class="form-group">
		  				<label for="qtde">Quantidade da mercadoria:</label></br>	
		  				<input type="text" class="form-control" name = "qtde" id="_qtde">
		  			</div>
		  			<div class="form-group">
		  				<label for="preco">Preço da mercadoria:</label></br>	
		  				<input type="text" class="form-control" name= "preco" id="_preco">
		  			</div>
		  			
		  			<div class="form-group">
		  			<label >Tipo de negócio</label></br>
		  			</div>
		  			<div class="radio">
		  				<label> <input type="radio" value = "compra" name="opcoesnegocio" id = "_opcoesnegocio" checked="checked">Compra</label>
		  				<label> <input type="radio" value="venda" name="opcoesnegocio" id="_opcoesnegocio">Venda</label>
		  			</div>
		  			<button button type="submit" class="btn btn-default" id = "btn_cadastrar"> Cadastrar</button>

		  			<?php
		  				if($cdg == 1){
		  					echo "<br> Cadastrado com sucesso!";
		  				}elseif ($cdg == 0) {
		  					echo '</br> <font color = "#FF0000"> Erro ao cadastrar, código de produto existente </font>';		  				}
		  			?>

  				</form>
			</div>
  	
  			

  		</div>
  	</div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
