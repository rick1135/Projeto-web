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

  <?php if (login()){ ?>
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

    <?php if(!adm()){ ?>
    <div class="display">
      <main role="main" style="width: 40%;">
        <h2 class="jumbotron-heading ml-4 display"><font style="font-family:Byom Trial;">J</font><?php usuario();?></h2><br><br>
        <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link botao_collapse" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                Alterar meus dados
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="card-body">
                <form class="form-signin form" method="post" action="editar.php">
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
                  <button class="btn btn-lg btn-primary btn-block botao" type="submit" style="width: 20%;">Editar</button>
                </form>
                <br>
                <button id="myBtn" class="botao">ADM</button>
                <!-- Modal -->
                <div id="myModal" class="modal">
                  <div class="modal-content">
                    <span class="close">&times;</span>
                    <p> Digite a senha de administrador</p>
                     <form method="post" name="form_modal" action="adm.php"><label for="inputPassword" class="sr-only">Senha</label>
                  <input type="password" id="inputPassword" name="senha" class="form-control" placeholder="Senha" style="width: 40%;" required> <br>
                  <input type="submit" class="btn btn-lg btn-primary btn-block botao" style="width: 10%;"></form>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      </main>
    </div>

    <?php } else{ ?>
    <div class="display">
      <main role="main" style="width: 40%;">
        <h2 class="jumbotron-heading ml-4 display"><font style="font-family:Byom Trial;">E</font><?php usuario();?> - ADM</h2><br><br>
        <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link botao_collapse" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Alterar meus dados
              </button>
            </h2>
          </div>
          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="card-body">
                <form class="form-signin form" method="post" action="editar.php">
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
                  <button class="btn btn-lg btn-primary btn-block botao" type="submit" style="width: 20%;">Editar</button>
                </form>
                <br>
              </div>
          </div>
        </div>
        <div class="card">
            <div class="card-header" id="headingThree">
              <h2 class="mb-0">
                <button class="btn btn-link collapsed botao_collapse" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  <a href="delete_adm.php">Deletar usuários</a>
                </button>
              </h2>
            </div>
          </div>
      </div>
      </main>
    </div>
    <?php } ?>

    <footer class="text-muted">
      <div class="container">
        <p>Site apresentado como requisito parcial na disciplina de Programação de Sistemas Web II &copy; Alberto Henrique e Pedro Manoel</p>
        <p><a href="http://www.ifbaiano.edu.br/unidades/guanambi/" target="_blank">IF Baiano - Campus Guanambi</a></p>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script>window.jQuery || document.write('<script src="/Bootstrap/js/jquery-slim.min.js"><\/script>')</script><script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="./js/modal.js"></script>
  </body>
  <?php } else {echo "Ops! Página não encontrada. <br> <a href='index.php'>Início</a>";}?>
</html>