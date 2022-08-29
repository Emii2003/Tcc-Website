<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
  </script>
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
      <div class="row m-5" id="card-login">
        <div class="col-12 col-sm-6">
          <!-- imagem na direita -->
          <section id="img">
            <img src="imagens/Happy student-amico.svg" id="imgHome" class="">
          </section>
        </div>
        <div class="col-12 col-sm-6 text-center" id="form-sign">
          <section class="col-12">
            <!-- forms -->
            <form method="POST" action="ValidarLogin.php" >
              <h1 class="mt-5" id="titulo">Login</h1>
              <div class="input-group flex-nowrap mt-4">
                <span class="input-group-text " id="icone-input">
                  <svg class="icon">
                    
                    <use xlink:href="#icon-user"></use>
                  </svg>
                </span>
                <input type="text" class="input-form" placeholder="Email" name="txtLogin" aria-label="Username"
                  aria-describedby="addon-wrapping" required>
              </div>
              <div class="input-group flex-nowrap">
                <span class="input-group-text" id="icone-input">
                  <svg class="icon">
                    <use xlink:href="#icon-lock"></use>
                  </svg>
                </span>
                <input type="text" class="input-form" placeholder="Senha" name="txtSenha" aria-label="Senha"
                  aria-describedby="addon-wrapping">
              </div>

              <div class="input-group flex-nowrap col-12">
                <label class="checkbox col-4 text-white ">
                  <input type="checkbox" value="remember-me"> Lembrar de mim
                </label>
                <label class="checkbox col-11">
                  <a href="" class="text-white"> Esqueceu sua senha ? </a>
                </label>
              </div>

              <!-- SVG -->
              <div class="d-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="icons">
                  <symbol id="icon-arrow-right" viewBox="0 0 1792 1792">
                    <path
                      d="M1600 960q0 54-37 91l-651 651q-39 37-91 37-51 0-90-37l-75-75q-38-38-38-91t38-91l293-293H245q-52 0-84.5-37.5T128 1024V896q0-53 32.5-90.5T245 768h704L656 474q-38-36-38-90t38-90l75-75q38-38 90-38 53 0 91 38l651 651q37 35 37 90z" />
                  </symbol>
                  <symbol id="icon-lock" viewBox="0 0 1792 1792">
                    <path
                      d="M640 768h512V576q0-106-75-181t-181-75-181 75-75 181v192zm832 96v576q0 40-28 68t-68 28H416q-40 0-68-28t-28-68V864q0-40 28-68t68-28h32V576q0-184 132-316t316-132 316 132 132 316v192h32q40 0 68 28t28 68z" />
                  </symbol>
                  <symbol id="icon-user" viewBox="0 0 1792 1792">
                    <path
                      d="M1600 1405q0 120-73 189.5t-194 69.5H459q-121 0-194-69.5T192 1405q0-53 3.5-103.5t14-109T236 1084t43-97.5 62-81 85.5-53.5T538 832q9 0 42 21.5t74.5 48 108 48T896 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T896 896 624.5 783.5 512 512t112.5-271.5T896 128t271.5 112.5T1280 512z" />
                  </symbol>
                </svg>
              </div>



              <div class="col-12 text-center mt-3">
                <button type="submit" class="btn" id="btnTop" >Entrar</button>
              </div>
            </form>
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
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js"
    integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js"
    integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous">
  </script>

</body>

</html>