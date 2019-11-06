<?php session_start(); include "functions.php";?>
<!doctype html>
<html lang="pt-br">
   <head>
    <meta charset="UTF-8">
    <meta name="description" content="Site de estudos de literatura">
    <meta name="keywords" content="literatura">
    <meta name="author" content="Pedro Manoel e Alberto Henrique">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>

    <link href="css/fontes.css" rel="stylesheet">
    <link href="img/icon1.png" rel="icon">
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonte do Google para fornecer acessibilidade -->
    <link href="https://fonts.googleapis.com/css?family=Courgette|Merriweather" rel="stylesheet">
    <link href="css/stylesheet.css" rel="stylesheet">
    <link href="Bootstrap/css/album.css" rel="stylesheet">

    <style>
      div[style="text-align: right;position: fixed;z-index:9999999;bottom: 0; width: 100%;cursor: pointer;line-height: 0;display:block !important;"] {
      visibility: hidden;
      }
    </style>
  </head>

  <?php if (login()==true && adm()==true){ ?>
  <body>
    <header>
      <nav class="navbar navbar-expand-md navbar-dark fixed-top" id="cabecalho">
        <a class="navbar-brand" href="inicio.php"><h3 class="titulo">Literatura</h3></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <a class="nav-link" href="inicio.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="unidades.php">Unidades</a>
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="perfil.php"><font style="font-family:Byom Trial;">J</font><?php usuario();?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <div class="display">
      <main role="main">
        <h2 class="jumbotron-heading ml-4">USUÁRIOS</h2><br><br>
        <?php 

          $conn= Conectar();

          $consulta = "SELECT * FROM usuario";
          $stmt = $conn->prepare($consulta);
          $stmt->execute();

          $usuario = $stmt->fetchAll(PDO::FETCH_OBJ);
        ?>
        <div class="card-body">
              <table class="table table-bordered">
                  <tr>
                      <th>Id</th>
                      <th>Nome</th>
                      <th>Email</th>
                      <th>Senha</th>
                      <th>Turma</th>
                      <th>Ação</th>
                  </tr>
                  <?php foreach($usuario as $user): ?>
                      <tr>
                          <td><?= $user->id; ?></td>
                          <td><?= $user->usuario; ?></td>
                          <td><?= $user->email; ?></td>
                          <td><?= $user->senha; ?></td>
                          <td><?= $user->turma; ?></td>
                          <td>
                              <a onclick="return confirm('Tem certeza que deseja excluir usuario?')" href="delete.php?id=<?= $user->id ?>" class="btn btn-danger">Excluir</a>
                          </td>

                      </tr>
                  <?php endforeach; ?>
              </table>
          </div>
      </main>
    </div>

    <footer class="text-muted">
      <div class="container">
        <p>Site apresentado como requisito parcial na disciplina de Programação de Sistemas Web II &copy; Alberto Henrique e Pedro Manoel</p>
        <p><a href="http://www.ifbaiano.edu.br/unidades/guanambi/" target="_blank">IF Baiano - Campus Guanambi</a></p>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script>window.jQuery || document.write('<script src="/Bootstrap/js/jquery-slim.min.js"><\/script>')</script><script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
  <?php } else {echo "Ops! Página não encontrada. <br> <a href='index.php'>Início</a>";}?>
</html>

