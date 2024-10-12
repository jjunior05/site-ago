<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    @include('utils.title')
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/icon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<style>
    /* Alinha a logo no topo */
    .logo {
        margin-top: 0;
        /* Ajusta o espaçamento superior */
        max-width: 100%;
        /* Garante que a logo ocupe 100% da largura disponível */
        height: auto;
        /* Mantém a proporção da logo */
    }

    /* Garantir responsividade */
    @media (max-width: 768px) {
        .navbar-brand img {
            width: 80%;
            /* Ajuste conforme necessário para telas menores */
            margin: 0 auto;
            /* Centraliza a logo no modo mobile */
        }

        .top-bar {
            text-align: center;
            /* Centraliza o texto e ícones no mobile */
        }
    }
</style>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    @include('utils.topbar')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('utils.nav')
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            @foreach ($imageUrlsMainSlide as $imageUrl)
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{ $imageUrl }}" alt="">
                    <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(0, 0, 0, .4);">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-10 col-lg-8">
                                    <h5 class="text-white text-uppercase mb-3 animated slideInDown">Serviços residencial
                                        e empresarial</h5>
                                    <h1 class="display-3 text-white animated slideInDown mb-4">Eficiência em gestão de
                                        serviços terceirizados.</h1>
                                    {{-- <p class="fs-5 fw-medium text-white mb-4 pb-2">Vero elitr justo clita lorem. Ipsum
                                        dolor at sed stet sit diam no. Kasd rebum ipsum et diam justo clita et kasd
                                        rebum sea elitr.</p> --}}
                                    {{-- <a href=""
                                        class="btn btn-primary py-md-3 px-md-5 me-3 animated slideInLeft">Read More</a>
                                    <a href="" --}}
                                    {{-- class="btn btn-secondary py-md-3 px-md-5 animated slideInRight">Free Quote</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!-- Carousel End -->


    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                @foreach ($imageUrlsServices as $imageUrl)
                    <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.1s">
                        <div class="overflow-hidden">
                            <img class="img-fluid w-100 h-100" src="{{ $imageUrl }}" alt="">
                        </div>
                        <div class="d-flex align-items-center justify-content-between bg-light p-4">
                            <h5 class="text-truncate me-3 mb-0">Residential Plumbing</h5>
                            <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0"
                                href=""><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-secondary text-uppercase">Sobre a AGO Terceirazação</h6>
                    {{-- <h1 class="mb-4">We Are Trusted Plumbing Company Since 1990</h1> --}}
                    <p class="mb-4">AGO Terceirização é uma empresa especializada em prestação de serviços de limpeza
                        e conservação, portaria, serviços administrativos, facilities e na seleção e
                        recrutamento para terceirização de mão-de-obra, consciente de sua reponsabilidade
                        social e mercadológica na gestão de pessoas e de serviços profissionais.
                        Desde 2019 atuando como prestadora de serviços na área de limpeza e conservação,
                        portaria, segurança patrimonial, serviços administrativos e facilities, a se encontra
                        consolidada no mercado, buscando sempre o aperfeiçoamento de suas atividades e
                        o constante crescimento.
                        A empresa atende clientes da administração pública (federal, estadual e municipal) e
                        da iniciativa privada e está presente em todo o território nacional com profissionais
                        qualificados. </p>
                    <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Missão</p>
                    <p class="mb-4">Satisfazer plenamente os clientes internos e externos, por meio de atendimento
                        ágil
                        e serviços de qualidade, buscando profissionais motivados e comprometidos. </p>
                    <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Valores</p>
                    <p class="mb-4">
                        – Comprometimento com os resultados <br />
                        – Aprendizagem <br />
                        – Disciplina <br />
                        – Valorização do ser humano <br />
                        – Eficiência <br />
                        – Presteza </p>
                    {{-- <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Quality services at affordable prices</p>
                    <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Immediate 24/ 7 emergency services</p> 
                     <div class="bg-primary d-flex align-items-center p-4 mt-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt fa-2x text-primary"></i>
                        </div>
                         <div class="ms-3">
                            <p class="fs-5 fw-medium mb-2 text-white">Emergency 24/7</p>
                            <h3 class="m-0 text-secondary">+012 345 6789</h3>
                        </div> 
                    </div> --}}
                </div>
                {{-- <div class="col-lg-6 pt-4" style="min-height: 500px;">
                    <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/about-1.jpg" style="object-fit: cover; padding: 0 0 50px 100px;" alt="">
                        <img class="position-absolute start-0 bottom-0 img-fluid bg-white pt-2 pe-2 w-50 h-50" src="img/about-2.jpg" style="object-fit: cover;" alt="">
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Fact Start -->
    @includeIf('layouts.fact')
    <!-- Fact End -->


    <!-- Service Start -->
    <div class="container-fluid py-5 px-4 px-lg-0">
        <div class="row g-0">
            <div class="col-lg-3 d-none d-lg-flex">
                <div class="d-flex align-items-center justify-content-center bg-primary w-100 h-100">
                    <h1 class="display-3 text-white m-0" style="transform: rotate(-90deg);">Desde 2019 no
                        mercado</h1>
                </div>
            </div>
            <div class="col-md-12 col-lg-9">
                <div class="ms-lg-5 ps-lg-5">
                    <div class="text-center text-lg-start wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="text-secondary text-uppercase">Nossos Serviços</h6>
                        <h1 class="mb-5">Conheça os Nossos Serviços</h1>
                    </div>
                    <div class="owl-carousel service-carousel position-relative wow fadeInUp" data-wow-delay="0.1s">
                        <div class="bg-light p-4">
                            <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                                style="width: 75px; height: 75px;">
                                <i class="fa fa-water fa-2x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Limpeza e Conservação</h4>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Escritórios
                            </p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Consultórios
                            </p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Condomínios
                            </p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Comerciais
                            </p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Industriais
                            </p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Empresas
                            </p>
                            <p class="text-primary fw-medium"><i
                                    class="fa fa-check text-success me-2"></i>Supermercados</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Shoppings
                            </p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Hospitais
                            </p>
                        </div>
                        <div class="bg-light p-4">
                            <div class="d-flex align-items-center justify-content-center border border-5 border-white mb-4"
                                style="width: 75px; height: 75px;">
                                <i class="fa fa-chevron-right fa-2x text-primary"></i>
                            </div>
                            <h4 class="mb-3">Serviços de Facilities</h4>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Zeladores
                            </p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Porteiros
                            </p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Vigilância
                            </p>
                            <p class="text-primary fw-medium"><i
                                    class="fa fa-check text-success me-2"></i>Recepcionista</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Serviços
                                Administrativos</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Jardineiro
                            </p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Copeiros
                            </p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Lavadores
                            </p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Auxiliar de
                                Serviços Gerais</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Auxiliar
                                Logístico</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Auxiliar de
                                Produção</p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Motorista
                            </p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Manobrista
                            </p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Conferente
                            </p>
                            <p class="text-primary fw-medium"><i class="fa fa-check text-success me-2"></i>Estoquista
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Booking Start -->
    <div class="container-fluid my-5 px-0">
        <div class="video wow fadeInUp" data-wow-delay="0.1s">
            {{-- <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
                <span></span>
            </button>

            <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content rounded-0">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- 16:9 aspect ratio -->
                            <div class="ratio ratio-16x9">
                                <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always" allow="autoplay"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <h1 class="text-white mb-4">Contato</h1>
            <h3 class="text-white mb-0">Entre em contato conosco, será um prazer respondê-lo</h3>
        </div>
        <div class="container position-relative wow fadeInUp" data-wow-delay="0.1s" style="margin-top: -6rem;">
            <!-- Contact Start -->
            <div class="container-xxl py-5">
                <div class="container">
                    <div class="row g-3">
                        {{-- <div class="col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                            <h6 class="text-secondary text-uppercase">Contato</h6>
                            <h1 class="mb-4">Envie sua dúvida</h1>
                        </div> --}}
                        <div class="bg-light p-5 h-100 d-flex align-items-center">
                            <form action="{{ route('send_contact') }}" class="mt-6 space-y-6" method="POST">
                                @csrf
                                <div class="row g-3">
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="name" name="nome"
                                                required placeholder="Your Name">
                                            <label for="name">Seu Nome</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" id="email" name="email"
                                                required placeholder="Seu E-mail">
                                            <label for="email">Seu E-mail</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="phone" name="phone"
                                                required placeholder="Seu Celular">
                                            <label for="email">Seu celular</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="subject" name="subject"
                                                required placeholder="Assunto">
                                            <label for="subject">Assunto</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" required placeholder="Escreva aqui a sua mensagem" name="message" id="message"
                                                style="height: 150px"></textarea>
                                            <label for="message">Messagem</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3" type="submit">Enviar
                                            Mensagem</button>
                                    </div>
                                    <div class="col-12 mt-5">
                                        @if (session('success_contato'))
                                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                            <div class="alert alert-success" role="alert" style="color: green;">
                                                {{ session('success_contato') }}
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact End -->
        </div>
    </div>
    <!-- Booking End -->


    <!-- Team Start -->
    @include('layouts.team')
    <!-- Team End -->


    <!-- Testimonial Start -->
	@include('layouts.comment_clients')
    <!-- Testimonial End -->


    <!-- Footer Start -->
    @include('layouts.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    {{-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#phone').mask('(00) 00000-0000');
        });
    </script>
</body>

</html>
