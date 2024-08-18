<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Quality Programming</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="{{asset('assets/favicon-16x16.png')}}" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/css/style.min.css')}}" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="{{route('home')}}" class="navbar-brand px-lg-4 m-0">
                <h1 class="m-0 display-4 text-uppercase text-white">QP</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="{{route('home')}}" class="nav-item nav-link active">Inicio</a>
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav mr-auto">
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Formularios</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href='/formularios/create'>Crear formularios</a>
                              <a class="dropdown-item" href='/formularios/#/edit'>Listado formularios</a>
                            </div>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Informes</a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="#">Listado de informes</a>
                              <a class="dropdown-item" href="#">otro</a>
                            </div>
                          </li>
                        </ul>
                      </div>
                    <a href="{{ route('logout') }}" class="nav-item nav-link" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();"{{ __('Logout') }}>Cerrar sesion</a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5" >
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('assets/carousel-1.jpg')}}" alt="Image" >
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h1 class="display-1 text-white m-0">Quality Programming</h1>
                        <h2 class="text-white m-0">El futuro es hoy, no pierdas el tiempo en formularios tediosos</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{asset('assets/carousel-2.jpg')}}" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h1 class="display-1 text-white m-0">Quality Programming</h1>
                        <h2 class="text-white m-0">Olvida el papel, digitalizate</h2>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="{#blog-carousel}" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Sobre Nosotros</h4>
                <h1 class="display-4">Nace en el año 2023</h1>
            </div>
            <div class="row">
                <div class="col-lg-3 py-0 py-lg-5">
                    <h1 class="mb-3">Misión</h1>
                    <h5 class="mb-3"></h5>
                    <p>Nuestra misión como empresa y equipo es la de facilitar la vida de las personas mediante el uso de la tecnología, desarrollando soluciones innovadoras enfocadas a la calidad y personalización del resultado, que proporcionen una grata experiencia de usuario, y que aporten valor y tengan un impacto positivo en el día a día de nuestra sociedad</p>
                    <a href="" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2">Conoce más</a>
                </div>
                <div class="col-lg-6 py-5 py-lg-0" style="min-height: 200px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{asset('assets/about.png')}}" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-3 py-0 py-lg-5">
                    <h1 class="mb-3">Visión</h1>
                    <p>En el año 2026 se ve posicionada como una de las mejores empresas y ser reconocida en su calidad e innovación,esto se resume en:</p>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Llegar a ser un referente como empresa de desarrollo, en los productos y servicios ofrecidos.</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Diseñar y desarrollar servicios y soluciones software diferenciales, que aporten un gran valor.</h5>
                    <a href="" class="btn btn-primary font-weight-bold py-2 px-4 mt-2">Conoce más</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Service Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Nuestos Servicios</h4>
                <h1 class="display-4">Conectarte con los clientes es nuestra misión</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="{{asset('assets/service-1.jpg')}}" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class=""></i>Informes</h4>
                            <p class="m-0">Obten informes digitales y administra tu información en la nube</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="{{asset('assets/support.png')}}" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class=""></i>Soporte Técnico & Mantenimiento</h4>
                            <p class="m-0"> Nuestra personal se encuentra especializado para ofrecerte el mejor servicio y ayudarte
                                a solucionar el inconveniente que estes presentando </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="{{asset('assets/asesoria.png')}}" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class=""></i>Asesorias</h4>
                            <p class="m-0">Obten asesoria de como manejar el software</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="{{asset('assets/member.png')}}" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class=""></i>Membresia</h4>
                            <p class="m-0">Obten tu membresia y disfruta de descuentos unicos</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Offer Start -->
    <div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom">
        <div class="container py-5">
            <h1 class="display-3 text-primary mt-3">50% OFF</h1>
            <h1 class="text-white mb-3">Oferta Especial de inaguración</h1>
            <h4 class="text-white font-weight-normal mb-4 pb-3">Oferta valida desde enero 2024</h4>
            <form class="form-inline justify-content-center mb-4">
                <div class="input-group">
                    <input type="text" class="form-control p-4" placeholder="Correo electronico" style="height: 60px;">
                    <div class="input-group-append">
                        <button class="btn btn-primary font-weight-bold px-4" type="submit">Inscribirse</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Offer End -->

    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonios</h4>
                <h1 class="display-4">Nuestros clientes dicen</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="{{asset('assets/testimonial-1.jpg')}}" alt="">
                        <div class="ml-3">
                            <h4>Cliente 1</h4>
                            <i>Ingeniero</i>
                        </div>
                    </div>
                    <p class="m-0">Excelente Software</p>
                </div>
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid" src="{{asset('assets/testimonial-3.jpg')}}" alt="">
                        <div class="ml-3">
                            <h4>Client 2</h4>
                            <i>Asesorias Internacionales</i>
                        </div>
                    </div>
                    <p class="m-0">facilita mucho el trabajo y minimiza el trabajo</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Footer Start -->
    <div class="container-fluid footer text-white mt-5 pt-5 px-0 position-relative overlay-top">
        <div class="row mx-0 pt-5 px-sm-3 px-lg-5 mt-4">
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Contactanos</h4>
                <p><i class="fa fa-map-marker-alt mr-2"></i>Colombia</p>
                <p><i class="fa fa-phone-alt mr-2"></i>+57 307 8474 733</p>
                <p class="m-0"><i class="fa fa-envelope mr-2"></i>assesor23@Qualityprogram.com</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Siganos</h4>
                <p>Amet elitr vero magna sed ipsum sit kasd sea elitr lorem rebum</p>
                <div class="d-flex justify-content-start">
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square mr-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-outline-light btn-lg-square" href="#"><i class="fab fa-instagram"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Horarios de atención</h4>
                <div>
                    <h6 class="text-white text-uppercase">Monday - Friday</h6>
                    <p>8.00 AM - 8.00 PM</p>
                    <h6 class="text-white text-uppercase">Saturday - Sunday</h6>
                    <p></p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-5">
                <h4 class="text-white text-uppercase mb-4" style="letter-spacing: 3px;">Boletin informativo</h4>
                <p>Amet elitr vero magna sed ipsum sit kasd sea elitr lorem rebum</p>
                <div class="w-100">
                    <div class="input-group">
                        <input type="text" class="form-control border-light" style="padding: 25px;" placeholder="Correo electronico">
                        <div class="input-group-append">
                            <button class="btn btn-primary font-weight-bold px-3">Inscribirse</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid text-center text-white border-top mt-4 py-4 px-sm-3 px-md-5" style="border-color: rgba(256, 256, 256, .1) !important;">
            <p class="mb-2 text-white">Copyright &copy; <a class="font-weight-bold" href="#">Luisa & Steephen</a>. All Rights Reserved.</a></p>
            <p class="m-0 text-white">Designed by <a class="font-weight-bold" href="https://htmlcodex.com">Luisa & Steephen</a></p>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
