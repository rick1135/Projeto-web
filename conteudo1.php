<?php session_start(); include "functions.php";?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="description" content="Site de estudos de literatura">
    <meta name="keywords" content="literatura">
    <meta name="author" content="Pedro Manoel e Alberto Henrique">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Unidade1</title>

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
              <a class="nav-link active" href="unidades.php">Unidades<span class="sr-only">(current)</span></a>
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
    <center>
      <main role="main" style="width: 40%;">
      <h2 class="jumbotron-heading ml-4">CONTEÚDO 1</h2><br><br>
      <div class="accordion" id="accordionExample">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h2 class="mb-0">
              <button class="btn btn-link botao_collapse" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Unidade
              </button>
            </h2>
          </div>
          <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
            <div class="card-body">
              <ul type="none">
                <li>
                  <a href="#"> Definição </a>
                </li>
                <li>
                  <a href="#"> Aspectos </a>
                </li>
                <li>
                  <a href="#"> Principais autores </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed botao_collapse" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Atividades
              </button>
            </h2>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
            <div class="card-body">
              <ul type="none">
                <li>
                  <a href="#"> Exercícios propostos </a>
                </li>
                <li>
                  <a href="#"> Questões ENEM e Vestibulares </a>
                </li>
                <li>
                  <a href="#"> Exercícios - Revisão </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h2 class="mb-0">
              <button class="btn btn-link collapsed botao_collapse" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Principais Obras
              </button>
            </h2>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
            <div class="card-body">
              <ul type="none">
                <li>
                  <a href="#"> Livros </a>
                </li>
                <li>
                  <a href="#"> Filmes </a>
                </li>
                <li>
                  <a href="#"> Documentários </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </main>
  </center>
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