<!DOCTYPE html>
<html class="corpo" lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/produtos.css">
    <link REL="SHORTCUT ICON" HREF=img\logot.png  type="image/x-icon">
    <title>Vídeo Aulas</title>
</head>
<body class="quadro1">
 <!--Menu-->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="http://localhost/venosan/inicio.php">Venosan</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="http://localhost/venosan/index.html">Inicio <span class="sr-only">(página atual)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="https://www.venosan.com.br/" target="_blank">Site Venosan</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Relatórios</a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="http://192.168.0.111:6020/sisped/relatorios.php" target="_blank">SisPed</a> <!--_blank  - abre a tela em uma nova janela-->
                <a class="dropdown-item" href="http://localhost/venosan/videos.php">Vídeo Aulas</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="https://www.lohmann-rauscher.com/en/" target="_blank">Lohmann Rauscher</a>
              </div>
            </li>
          </ul>
        </div>
</nav>

<h1 class="text-center">Aulas</h1>

<!-- Estilo dos vídeos -->
<style>
    .video-container {
        width: 100%;
        max-width: 800px;
        margin: 15px auto;
    }

    .video-container iframe {
        width: 100%;
        height: 100%;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-6 col-lg-4">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/eCJniKVR5xU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/g_sXWg1Au7I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/Q2sxL7dH7GU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/FzVhIRrQXgs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/muDnCN6y_Pg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/Cz1MGyu75oc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>

<div style="margin: 50px 0; display: flex; align-items: center; justify-content: center; width: 100%">
        <a style="display: block; text-align: center; color: #555; text-decoration: none; margin-right: 15px;" href="https://github.com/Adiles-junior/" target="_blank">
            <i class="fas fa-home" style="color: #1da1f2; margin-right: 5px;"></i>Adiles Junior ©</a>
    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
