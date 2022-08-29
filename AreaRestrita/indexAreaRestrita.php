<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <!-- CSS Puro -->
    <link rel="stylesheet" type="text/css" href="../css/style.css" media="screen" />
    <title>TCC</title>
</head>
<body>
      <?php
    	include_once("valida-sentinela.php");
      ?> 
    <!-- Navegacao -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
              <!-- <a class="navbar-brand" href="#"><img src="imagens/logo2.jpg" class="img-responsive" style="width: 80px;height: 40px;"></a> -->
              <a class="navbar-brand" href="#">LOGO</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav pe-5">
                  <li class="nav-item pe-5">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item pe-5">
                    <a class="nav-link" href="#">Sobre Nós</a>
                  </li>
                  <li class="nav-item pe-5">
                    <a class="nav-link" href="#">Projeto</a>
                  </li>
                  <li class="nav-item pe-5">
                    <a class="nav-link disabled">Contato</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>

    <main>
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-5 text-center">
                    <section class="col-12">
                        <h1 class="text-center justify-content-center" style="margin-top: 20vh;">Lorem ipsum dolor </h1>
                        <h5 class="text-center mt-4 p-2">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto obcaecati,</h5>
                        <div class="col-12 text-center mt-3">
                            <a href = "../logout.php"><button class="btn" id="btnTop">APERTA AQUI</button></a>

                        </div>
                    </section>
                </div>
                <div class="col-12 col-sm-7">
                    <!-- imagem na direita -->
                    <section class="right-side mx-5">
                            <img src="../imagens/home.svg" id="imgHome">
                    </section>
                </div>
            </div>
        </div>
    </main>


<!-- Bootstrap scripts -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
</body>
</html>