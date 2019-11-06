<?php session_start(); 
 session_destroy(); //Destroi aa sessoes zerando o login
?><!-- Pagina de Logout -->
<!DOCTYPE html>
<html>
<head>
  <title>Logout</title>
</head>
<body>

<?php 
$url = 'index.php';    //vai pro inicio
echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>";
?>

</body>
</html>