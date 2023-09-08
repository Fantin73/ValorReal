<?php
    session_start(); 
    
    if (isset($_SESSION['id'])) {
        $id_user = $_SESSION['id']; 
    }

    require_once('evento/conexao.php');
    date_default_timezone_set('America/Sao_Paulo');

    $database = new Database();
    $db = $database->conectar();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Puppy kitty</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <link href="favicon.ico" rel="icon">

 
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Quicksand:wght@600;700&display=swap" rel="stylesheet"> 

   
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

   
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/lightbox.min.css" rel="stylesheet">
    <link href="css/owl.carousel.min.css" rel="stylesheet">


    <link href="css/bootstrap.min.css" rel="stylesheet">

   
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
   
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    
 
  
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-4 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="index.php" class="navbar-brand p-0">
            <img class="img-fluid me-3" src="imagens/logovalor.png" alt="Icon">
            <h1 class="  brand-text">Valor Real</h1>

        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse py-4 py-lg-0" id="navbarCollapse">
            <div class="navbar-nav ms-auto">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.php" class="nav-item nav-link wh">Sobre</a>
                
                <div class="nav-item dropdown">
                    
                </div>
                <a href="contact.php" class="nav-item nav-link">Contato</a>
            </div>
            <?php 
            if (!isset($_SESSION['id'])) {
            echo '
            <a href="login.php" class="btn btn-primary">Logar<i class="fa fa-arrow-right ms-3"></i></a>
        </div>'; 
            }
        ?>
            <?php 
            if (isset($_SESSION['id'])) {
            echo '
            <a href="vip.php" class="btn btn-primary">Vip<i class="fa fa-arrow-right ms-3"></i></a>
        </div>'; 
            }
        ?>
    </nav>
 
    <div class="container-fluid footer p-0 mb-5">
        <div class="row g-0 flex-column-reverse flex-lg-row">
            <div class="col-lg-6 p-0 wow fadeIn" data-wow-delay="0.1s">
                <div class="header-bg h-100 d-flex flex-column justify-content-center p-5">
                    <h1 class="display-4 text-light mb-5">Quem somos?</h1>
                    <div class="d-flex align-items-center pt-4 animated slideInDown">
                        <a href="" class="btn btn-primary py-sm-3 px-3 px-sm-5 me-5">Read More</a>
                        <button type="button" class="btn-play" data-bs-toggle="modal"
                            data-src="youtubefuturo" data-bs-target="#videoModal">
                            <span></span>
                        </button>
                        <h6 class="text-white m-0 ms-4 d-none d-sm-block">Video animado valor real.</h6>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <div class="owl-carousel header-carousel">
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="imagens/cash1.gif" alt="">
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="imagens/cash2.png" alt="">
                    </div>
                    <div class="owl-carousel-item">
                        <img class="img-fluid" src="imagens/cash3.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div class="modal modal-video fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content rounded-0">
                <div class="modal-header">
                    <h3 class="modal-title" id="exampleModalLabel">Youtube Video</h3>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                   
                    <div class="ratio ratio-16x9">
                        <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                            allow="autoplay"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                
               
            </div>
        </div>
    </div>
   
  
   
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
               
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex align-items-center py-4 px-4 px-sm-5">
                        <i class="fa fa-3x fa-mobile-alt text-white"></i>
                        <div class="ms-4">
                            <p class="text-white mb-0">Ligue para funcões específicas.</p>
                            <h2 class="text-white mb-0">+55 14 99187-7240</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gy-5 gx-4">
                <h1>Nossas ferramentas:</h1>
               
            </div>
        </div>
    </div>
   
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 mb-5 align-items-end wow fadeInUp" data-wow-delay="0.1s">
               
              
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row g-4">
                    <div class="col-12">
    <a class="animal-item" href="vip.php">
        <div class="position-relative">
            <img class="img-fluid" src="imagens/cash2.png" alt="">
            <div class="animal-text p-4">
                <p class="text-white small text-uppercase mb-0">Ecopatinhas</p>
                <h5 class="text-white mb-0">Flor</h5>
            </div>
        </div>
    </a>
</div>

<div class="col-12">
    <a class="animal-item" href="vip.php">
        <div class="position-relative">
            <img class="img-fluid" src="imagens/cash2.png" alt="">
            <div class="animal-text p-4">
                <p class="text-white small text-uppercase mb-0">Ecopatinhas</p>
                <h5 class="text-white mb-0">Flor</h5>
            </div>
        </div>
    </a>
</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="row g-4">
                    <div class="col-12">
    <a class="animal-item" href="vip.php">
        <div class="position-relative">
            <img class="img-fluid" src="imagens/cash2.png" alt="">
            <div class="animal-text p-4">
                <p class="text-white small text-uppercase mb-0">Ecopatinhas</p>
                <h5 class="text-white mb-0">Flor</h5>
            </div>
        </div>
    </a>
</div>
<div class="col-12">
    <a class="animal-item" href="vip.php">
        <div class="position-relative">
            <img class="img-fluid" src="imagens/cash2.png" alt="">
            <div class="animal-text p-4">
                <p class="text-white small text-uppercase mb-0">Ecopatinhas</p>
                <h5 class="text-white mb-0">Flor</h5>
            </div>
        </div>
    </a>
</div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-4">
                    <div class="col-12">
    <a class="animal-item" href="vip.php">
        <div class="position-relative">
            <img class="img-fluid" src="imagens/cash2.png" alt="">
            <div class="animal-text p-4">
                <p class="text-white small text-uppercase mb-0">Ecopatinhas</p>
                <h5 class="text-white mb-0">Flor</h5>
            </div>
        </div>
    </a>
</div>
<div class="col-12">
    <a class="animal-item" href="vip.php">
        <div class="position-relative">
            <img class="img-fluid" src="imagens/cash2.png" alt="">
            <div class="animal-text p-4">
                <p class="text-white small text-uppercase mb-0">Ecopatinhas</p>
                <h5 class="text-white mb-0">Flor</h5>
            </div>
        </div>
    </a>
</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <div class="container-xxl footer visiting-hours  wow fadeInUp" data-wow-delay="0.1s">
        <div class="container footer">
            <div class="row footer">
                
                <div class="col-md-6 text-light wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 text-white mb-5">Informações de contato.</h1>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>Local</td>
                                <td>Senac Bauru</td>
                            </tr>
                            <tr>
                                <td>Valor Real</td>
                                <td>Senac Bauru</td>
                            </tr>
                           
                            <tr>
                                <td>Suporte</td>
                                <td>
                                    <p class="mb-2">+55 (14) 99187-7240</p>
                                    <p class="mb-0">darruizhomeoffice@gmail.com</p>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

  
    <div class="container-xxl py-5">
        <div class="container">
            <h1 class="display-5 text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">Idealizadores</h1>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">

                
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="imagens/Darruiz.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Engenheiro de software do grupo responsável pelo desenvolvimento da plataforma e construção do MVC/Business Model.</p>
                        <h5 class="mb-1">João Darruiz</h5>
                        <span class="fst-italic">Engenheiro de software</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="imagens/Isabella.jpeg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Designer e markting do grupo, fez toda a estrutura de divulgação de nosso projeto.</p>
                        <h5 class="mb-1">Isabella Pascale</h5>
                        <span class="fst-italic">Designer</span>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="imagens/lean.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Organizou todo o grupo e apresentações a terceiros.</p>
                        <h5 class="mb-1">Guilherme Leandrin</h5>
                        <span class="fst-italic">Marketing</span>
                    </div>
                </div> 
                <div class="testimonial-item text-center">
                    <img class="img-fluid rounded-circle border border-2 p-2 mx-auto mb-4" src="imagens/Dimitri.jpg" style="width: 100px; height: 100px;">
                    <div class="testimonial-text rounded text-center p-4">
                        <p>Entrou em contato com ongs para fechar trabalhos em conjunto.</p>
                        <h5 class="mb-1">Dimitri</h5>
                        <span class="fst-italic">Organizador</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
  
    <div class="custom-footer">
    <div class="container py-5">
    
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="cnrt" href="https://github.com/organizations/ValorReal/">Valor Real</a>, desenvolvido por João Darruiz.
                </div>
               
            </div>
        </div>
    </div>
</div>

   


   
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/easing.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/counterup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/lightbox.min.js"></script>


    <script src="js/main.js"></script>
</body>

</html>