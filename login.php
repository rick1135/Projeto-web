<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Site de estudos de literatura">
    <meta name="keywords" content="literatura">
    <meta name="author" content="Pedro Manoel e Alberto Henrique">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Bootstrap core CSS -->
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="img/icon1.png" rel="icon">
    <link href="css/autenticacao.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Courgette|Merriweather" rel="stylesheet">
    <link href="Bootstrap/css/signin.css" rel="stylesheet">

    <style>
      div[style="text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;display:block !important;"] {
      visibility: hidden;
      }
    </style>
  </head>

  <body class="text-center">
    <div id="cabecalho"><h1 class="logotipo">Literatura</h1></div>
    <form class="form-signin form" method="post" action="logar.php">
      <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Login</h1>
      <label for="inputEmail"  class="sr-only">Usuário</label>
      <input type="text" id="inputEmail" name="nome" class="form-control" placeholder="Usuário" required autofocus>
      <label for="inputPassword" class="sr-only" >Senha</label>
      <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha" required>
      <button class="btn btn-lg btn-primary btn-block botao" type="submit">Logar</button>
      <p class="mt-5 mb-3 text-muted"> Alberto Henrique e Pedro Manoel &copy; 2019</p>
    </form>
  </body>
</html>