<?php
	require_once('bd.class.php');

        $codigo = $_POST['codigo'];
        
        $tipo = $_POST['tipo']; 
       ;
        $quantidade = $_POST['qtde']; 
       
        $preco = $_POST['preco']; 
        
        $opcao = $_POST['opcoesnegocio']; 
	// primeiro verificar se o código cadastrado nao existe
    $consulta = "SELECT  * FROM mercadorias_cadastradas WHERE codigo = '$codigo' ";

    $objBD = new bd();

    $objBD->conecta_mysql();

   

 $sql = "insert into mercadorias_cadastradas(codigo, tipo, quantidade, preco, tipo_negocio) values('$codigo', '$tipo', '$quantidade', '$preco', '$opcao') ";

		   if(mysql_query($sql)){
		   	header("Location: index.php?cdg=1");
		   	//	echo "Produto cadastrado com sucesso";
		   } else{
		   	header("Location: index.php?cdg=0");
		   //	echo "Erro ao cadastrar, código de produto existente";
		   }
?>