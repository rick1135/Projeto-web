<?php 
	session_start();
	include_once 'conexao.php'; //função Conectar aqui

	$conn=Conectar(); //Recebendo o retorno da função Conectar

	$email=$_POST['email'];   //dados do formulario
	$usuario=$_POST['nome'];
	$senha=md5($_POST['senha']);  //criptografia
	$turma=$_POST['turma'];

	$sql_editar = "UPDATE usuario SET email=?, usuario=?, senha=?, turma=?"; //codigo SQL

	$stmt = $conn->prepare($sql_editar); //segurança contra injects

	$stmt->bindValue(1, $email);
	$stmt->bindValue(2, $usuario);
	$stmt->bindValue(3, $senha);
	$stmt->bindValue(4, $turma);

	if($stmt->execute()){     //Teste de erro
		echo 'Sucesso ao Editar';
		$_SESSION['login'] = true;
		$_SESSION['usuario']=$usuario;
	}
	else{
		echo '<p>'.'Erro ao Editar';
	}
	$url = 'perfil.php';    //Vai pro inicio
	echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>";
	exit();

?>