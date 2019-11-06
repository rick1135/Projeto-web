<?php
function login(){ //FUNÇÃO PARA SABER SE FOI FEITO LOGIN OU NÃO. ELA RECEBE UM SESSION DO PROCESSO DE LOGIN.
    if (!isset($_SESSION['login']) || $_SESSION['login'] !== true)
    {
      return false;
    }
  return true;

  }

  function usuario(){ //DEFINE A VARIAVEL LOGADO PARA RECEBER O USUARIO
   
   if (isset($_SESSION['usuario'])){
    $logado=$_SESSION['usuario'];
    echo $logado;
  }
  else {
    echo "Usuário";
  }
  }

  function adm(){
  include_once 'conexao.php'; //função Conectar aqui

  $conn=Conectar(); //Recebendo o retorno da função Conectar

  $usuario=$_SESSION['usuario'];
   //dados do formulario
  $sql_consulta = "SELECT adm FROM usuario WHERE usuario='?'"; //codigo SQL

  $stmt = $conn->prepare($sql_consulta); //segurança contra injects

  $stmt->bindValue(1, $usuario);

  $stmt->execute();
  $stmt->bindColumn('adm', $adm);
  $adm = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($adm['adm']==1){     //Teste de erro
      return true;
    }
    else{
      return false;
    }
  }

?>