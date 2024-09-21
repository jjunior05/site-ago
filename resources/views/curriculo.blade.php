<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    @include('utils.title')
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

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


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Trabalhe Conosco</h1>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="row">
                        <h6 class="text-primary text-uppercase">Envie o seu currículo</h6>
                    </div>

                    <div class="bg-light p-5 h-100 d-flex align-items-center">
                        <form action="{{ route('add_curriculo') }}" class="mt-6 space-y-6" method="POST"
                            enctype="multipart/form-data">
                            @csrf
							<div class="row g-3">
								<div class="rol-12 mb-20">
									<div class="form-floating">
										<input type="text" class="form-control" name="nome" required ="nome" placeholder="Nome">
										<label for="subject">Nome</label>
									</div>
								</div>
								<div class="rol-12 mb-20">
									<div class="form-floating">
										<input type="text" class="form-control" name="atuacao" required id="atuacao" placeholder="Atuação">
										<label for="subject">Área de atuação</label>
									</div>
								</div>
							</div>
                            <div class="row g-6">
                                <div class="col-md-12">
                                    <div class="form-floating">
                                        <div class="mb-8">
                                            <input class="form-control" name="curriculo_doc" required type="file"
                                                id="formFile">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 mt-5">
                                    <button class="btn btn-primary w-100 py-3" type="submit">Enviar</button>
                                </div>
                                <div class="col-12 mt-5">
									@error('curriculo_doc')
										<div class="alert alert-danger mt-2" role="alert" style="color: red;">
											{{ $message }}
										</div>
									@enderror
									
                                    @if (session('success_curriculo'))
                                        <x-input-error class="mt-2" :messages="$errors->get('name')" />
                                        <div class="alert alert-success" role="alert" style="color: green;">
                                            {{ session('success_curriculo') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    @include('layouts.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i
            class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
