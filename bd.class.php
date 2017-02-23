<?php 
	class bd{
		//host 
		private $host = 'localhost';
		//usuario
		private $user = 'root';
		// senha
		private $password = '';
		// banco de dados
		private $database = 'comercializacao_de_mercadorias';

		public function conecta_mysql(){
			$con = mysql_connect($this->host, $this->user, $this->password) or die("Problema ao conectar no servidor" .mysql_error());
			mysql_select_db($this->database) or die("Erro ao selecionar o banco de dados" .mysql_error());
				mysql_query("SET NAMES 'utf8'");
				mysql_query("SET character_set_connection=utf8");
				mysql_query("SET character_set_client=utf8");
				mysql_query("SET character_set_results=utf8");

			return $con;
		}
	}
?>