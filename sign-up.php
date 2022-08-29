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
    <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
    <!-- Fontes -->
    <link rel="stylesheet" href="https://use.typekit.net/kgw6nxx.css">
    <title>TCC</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
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
                    <a class="nav-link">Contato</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </header>
    <main>
        <div class="container mt-5">
            <div class="row" id="card-Cadastro">
                <div class="col-12 col-sm-4" id="Cadastro">
                    <!-- imagem na direita -->
                    <h1 class="d-flex justify-content-center" id="titulo">Bem vindo!</h1>     
                    <h3 id="subtitulo">Acesse sua conta agora mesmo.</h3>
                    <div class="col-12 text-center mt-3">
                        <a href="login.html"><button class="btn" id="btnTop">Entrar</button></a>
                    </div>
                </div>
                <div class="col-12 col-sm-8 text-center">
                    <section class="col-12" id="form-sign-up">
                        <h1 class="d-flex justify-content-center" id="titulo">Crie sua conta</h1>
                        
                        <div class="input-group flex-nowrap d-flex justify-content-center">
                            <input type="text" class="input-form" id="input-cadastro" placeholder="Nome" aria-label="Username" aria-describedby="addon-wrapping">
                        </div>
                        <div class="input-group flex-nowrap d-flex justify-content-center">
                            <input type="text" class="input-form" id="input-cadastro" placeholder="Email" aria-label="Email" aria-describedby="addon-wrapping">
                        </div>
                        <div class="input-group flex-nowrap d-flex justify-content-center">
                            <input type="password" class="input-form" id="input-cadastro" placeholder="Senha" aria-label="Senha" aria-describedby="addon-wrapping">
                        </div>
                        <div class="col-12 text-center mt-3">
                            <a href="#"><button class="btn" id="btnTop">Criar Conta</button></a>
                        </div>
                        
                    </section>
            </div>
        </div>
    </main>
    
    <footer class="footer-section">
        <div class="container">
            <div class="footer-content pt-5 pb-5">
                <div class="row">
                    <div class="col-xl-4 col-lg-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <h2 class="text-white">LOGO</h2>
                            </div>
                            <div class="footer-text">
                                <p>Garça é uma microempresa de desenvolvimento de sites,
                                    que busca tornar a vida de estudos dos jovens atuais mais simplificada e menos estressante, 
                                    com o foco em um aprendizado completo e inteligente.</p>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6 mb-50">
                        <div class="footer-widget">
                            <div class="footer-widget-heading">
                                <h3>Contate-nos</h3>
                            </div>
                            <div class="footer-text mb-25">
                                <p>Envie um email nos contando seu feedback da sua experiencia utilizando nosso site e GreenLibrary.</p>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="text" placeholder="Email Address">
                                    <button >
                                        <img  src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAABkklEQVRIie3VvWsUQRgH4CeJ4BGipLGTFBZ+YJtaQtoYjCD+ARFSxsrGKgSElLFPoyBY2OVIa0CFBLFUuKRKqqBFTGwOP+4sZhc2w+3u3XoXguQHb3Pv3Dy7s7OznOc/yAim8Bx7eDdIrIa7WMM3tDO1129sFLN4iaMIy9ZqP7AreIQ6mjlQK+pNVcUmsIB1/MzB0vqBVwneFpb9Qi/YNTzG+8wkZbWLB04u+1o32G0s4XOXULY2kpX5Ev0+U4ZuVsDS57ksLGc96h0Lu70wHyqgR5hL/r/cof+6DJVc2Yse0B3h0cA9nffBw27gNAvKd24d48n4G/jeYUwTl3uB4Q4OOkzWwgqGk3GX5G/E9V7RNFexnZnoGPcz/SG8yUHbmK8Kw0XhPWzgVtRbKkB/CyfcPyd+JWbxpwDe7Aca5zoOC9A2FvuN1pSfai3hBMvNcFEzJ01slYz5hP0Kc5emho/y7/jpINA0E/iaA98cJAzT+BWhjUGjaZ5E8LPTgoeEL1AKT54WDGPCJ/VtciHnOTv5C+oR7Pjc+gqDAAAAAElFTkSuQmCC"></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-area">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                        <div class="copyright-text">
                            <p>Copyright &copy; 2022, All Right Reserved By Garça</p>
                        </div>
                    </div>
                    <div class="col-xl-6 col-l-6 d-none d-lg-block text-right">
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Sobre Nos</a></li>
                                <li><a href="#">Projeto</a></li>
                                <li><a href="#">Contato</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>


<!-- Bootstrap scripts -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>

</body>
</html>