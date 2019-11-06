<?php 
	session_start();
	include_once 'conexao.php'; //função Conectar aqui

	$conn=Conectar(); //Recebendo o retorno da função Conectar

	$id = $_GET['id']; //não conseguimos fazer com $_GET

	$sql_delete = "DELETE FROM usuario WHERE id=$id"; //codigo SQL

	$stmt = $conn->prepare($sql_delete); //segurança contra injects

	if($stmt->execute()){     //Teste de erro
		echo 'Sucesso ao Deletar';
	}
	else{
		echo '<p>'.'Erro ao deletar';
	}
	$url = 'delete_adm.php';    //Vai pro perfil
	echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>";
	exit();

?>