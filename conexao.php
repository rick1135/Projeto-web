<?php
	// Dados para acesso ao Banco de Dados do sistema.


	function Conectar(){

		$dsn = 'mysql:host=127.0.0.1;dbname=literatura';
	    $user = 'root';
	    $password = '';      //parametros
		try { //teste

			$pdo = new PDO($dsn, $user, $password, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); //conexao PDO
		} 

		catch (PDOExeption $ex){ //teste
	            echo 'Error: '. $ex->getMessage();
	            return false;
	        }

		return $pdo; //retorno da função Conecta
	}

	Conectar();

?>