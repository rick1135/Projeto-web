<?php 
	session_start();
	include_once 'conexao.php'; //função Conectar aqui

	$conn=Conectar(); //Recebendo o retorno da função Conectar

	$senha=$_POST['senha'];
	$true=1;
	$usuario=$_SESSION['usuario'];

	if ($senha="10paraosdois"){
		$sql_adm = "UPDATE usuario SET adm=? WHERE usuario=?"; //codigo SQL

		$stmt = $conn->prepare($sql_adm); //segurança contra injects

		$stmt->bindValue(1, $true);
		$stmt->bindValue(2, $usuario);

		$stmt->execute();

		$url = 'perfil.php';    //Vai pro inicio
		echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>";
		exit();
	}
	else{
		echo "Error";
		$url = 'perfil.php';    //Vai pro inicio
		echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>";
		exit();
	}
?>