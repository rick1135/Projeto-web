<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Site de estudos de literatura">
    <meta name="keywords" content="literatura">
    <meta name="author" content="Pedro Manoel e Alberto Henrique">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>


    <!-- Bootstrap core CSS -->
    <link href="https://fonts.googleapis.com/css?family=Courgette|Merriweather" rel="stylesheet">
    <link href="img/icon1.png" rel="icon">
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/autenticacao.css" rel="stylesheet">
    <link href="Bootstrap/css/signin.css" rel="stylesheet">

    <style>
      div[style="text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;display:block !important;"] {
      visibility: hidden;
      }
    </style>
  </head>

  <body class="text-center">
    <div id="cabecalho"><h1 class="logotipo">Literatura</h1></div>
    <form class="form-signin form" method="post" action="cadastrar.php">
      <h1 class="h3 mb-3 font-weight-normal">Cadastro</h1>
      <label for="inputEmail" class="sr-only">Email</label>
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
      <label for="inputEmail" class="sr-only">Usuário</label>
      <input type="text" id="inputEmail" name="nome" class="form-control" placeholder="Nome de usuário" required autofocus>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha" required>
      <div class="form-group">
        <select id="inputState" name="turma" class="form-control">
          <option disabled selected>Turma</option>
          <option>3AII</option>
          <option>3BA</option>
          <option>3CA</option>
          <option>3AB</option>
        </select>
      </div>
      <button class="btn btn-lg btn-primary btn-block botao" type="submit">Cadastrar</button>
      <p class="mt-5 mb-3 text-muted"> Alberto Henrique e Pedro Manoel &copy; 2019</p>
    </form>
  </body>
</html>