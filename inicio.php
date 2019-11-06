<?php session_start(); include "functions.php";?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Site de estudos de literatura">
    <meta name="keywords" content="literatura">
    <meta name="author" content="Pedro Manoel e Alberto Henrique">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início</title>

    <link href="css/fontes.css" rel="stylesheet">
    <link href="img/icon1.png" rel="icon">
    <link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Fonte do Google para fornecer acessibilidade -->
    <link href="https://fonts.googleapis.com/css?family=Courgette|Merriweather" rel="stylesheet">
    <link href="css/stylesheet.css" rel="stylesheet">
    <link href="Bootstrap/css/album.css" rel="stylesheet">

    <style>
      div[style="text-align: right; position: fixed; z-index:9999999; bottom: 0;width: auto; right: 1%; cursor: pointer; line-height: 0; display:block !important;"] {
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
            <li class="nav-item active">
             <a class="nav-link" href="inicio.php">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="unidades.php">Unidades</a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="perfil.php"><font style="font-family:Byom Trial;">J</font><?php usuario();?></a>
            </li>
            <li class="nav-item">
             <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <main role="main" style="margin-top: 0">
      <section class="jumbotron text-center">
        <div class="container mt-5">
          <h1 class="jumbotron-heading">Literatura</h1>
          <p class="lead text-muted">Aproveite todo o nosso conteúdo sobre literatura.</p>
        </div>
      </section>

      <div class="album bg-light">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img src="img/iracema.jpg" width="100%" height="200rem"/><h4 class="titulo ml-2 mt-md-2 mb-0">~ Romantismo ~</h4>
                <div class="card-body">
                  <p class="card-text">O romantismo foi um movimento artístico, político e filosófico surgido nas últimas décadas do século XVIII na Europa que durou por grande parte do século XIX.</p>
                  <div class="d-flex justify-content-between align-items-center">               
                    <a href="conteudo1.php"><button class="botao">Ver</button></a>
                    <small class="text-muted">Brasil</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img src="img/venusclassicismo.jpg" width="100%" height="200rem"/><h4 class="titulo ml-2 mt-md-2 mb-0">~ Classicismo ~</h4>
                <div class="card-body">
                  <p class="card-text">O Classicismo corresponde a um movimento artístico cultural que ocorreu durante o período do Renascimento (a partir do século XV) na Europa. </p>
                  <div class="d-flex justify-content-between align-items-center">               
                    <a href="conteudo1.php"><button class="botao">Ver</button></a>
                    <small class="text-muted">Mundo</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card mb-4 shadow-sm">
                <img src="img/Gustave-Courbetr.jpg" width="100%" height="200rem"/><h4 class="titulo ml-2 mt-md-2 mb-0">~ Realismo ~</h4>
                <div class="card-body">
                  <p class="card-text">O realismo foi um movimento artístico e literário surgido nas últimas décadas do século XIX na Europa, mais especificamente na França, em reação ao romantismo. </p>
                  <div class="d-flex justify-content-between align-items-center">               
                    <a href="conteudo1.php"><button class="botao">Ver</button></a>
                    <small class="text-muted">Brasil</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>

    <footer class="text-muted">
      <div class="container">
        <p>Site apresentado como requisito parcial na disciplina de Programação de Sistemas Web II &copy; Alberto Henrique e Pedro Manoel</p>
        <p><a href="http://www.ifbaiano.edu.br/unidades/guanambi/" target="_blank">IF Baiano - Campus Guanambi</a></p>
      </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="js/funcao.js"></script>
    <script>window.jQuery || document.write('<script src="/Bootstrap/js/jquery-slim.min.js"><\/script>')</script><script src="Bootstrap/js/bootstrap.bundle.min.js"></script>
  </body>
  <?php } else {echo "Ops! Página não encontrada. <br> <a href='index.php'>Início</a>";}?>
</html>

