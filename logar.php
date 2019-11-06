<?php
	session_start();
	include_once 'conexao.php'; //função Conectar aqui

	$conn=Conectar(); //Recebendo o retorno da função Conectar

   //dados do formulario
	$usuario=$_POST['nome'];
	$senha=md5($_POST['senha']);  //criptografia



	$sql_consulta = "SELECT * FROM usuario WHERE usuario='?' and senha='?'"; //codigo SQL

	$stmt = $conn->prepare($sql_consulta); //segurança contra injects

	$stmt->bindValue(1, $usuario);
	$stmt->bindValue(2, $senha);

	if($stmt->execute()){     //Teste de erro
		echo 'Sucesso ao Logar';
		$_SESSION['login'] = true;
		$_SESSION['usuario']=$usuario;
		$url = 'inicio.php';    //Vai pro inicio
		echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>";
		exit();
	}
	else{
		echo '<p>'.'Erro no login' . '</p>';
		$url = 'login.php';    //Vai pro inicio
		echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>";
		exit();
	}

?>