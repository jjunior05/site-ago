<div class="container-fluid nav-bar bg-light">
	<nav class="navbar navbar-expand-lg navbar-light bg-white p-3 py-lg-0 px-lg-4">
		
		<a class="navbar-brand d-flex align-items-center m-0 p-0 d-lg-none">
		</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
			<span class="fa fa-bars"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarCollapse">
			<div class=" navbar-nav me-auto">
				{{-- <a href="/" class="{{ Request::is('/') ? 'nav-item nav-link active' : 'nav-item nav-link' }}"><img class="img-fluid" src="img/logo_img.png" alt=""></a> --}}
				<a href="/" class="{{ Request::is('/') ? 'nav-item nav-link active' : 'nav-item nav-link' }}"><img class="img-fluid" src="img/logo_vazado.png" alt=""></a>
				<a href="/" class="{{ Request::is('/') ? 'nav-item nav-link active' : 'nav-item nav-link' }}">Início</a>
				<a href="/about" class="{{ Request::is('about') ? 'nav-item nav-link active' : 'nav-item nav-link' }}">Sobre</a>
				<a href="/service" class="{{ Request::is('service') ? 'nav-item nav-link active' : 'nav-item nav-link' }}">Serviços</a>
				<div class="nav-item dropdown">
					<a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Oportunidades</a>
					<div class="dropdown-menu fade-up m-0">
						<a href="/curriculo" class="dropdown-item">Trabalhe Conosco</a>
					</div>
				</div>
				<a href="/contact" class="{{ Request::is('contact') ? 'nav-item nav-link active' : 'nav-item nav-link' }}">Contato</a>
			</div>
			<div class="mt-4 mt-lg-0 me-lg-n4 py-3 px-4 bg-primary d-flex align-items-center">
				<div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 45px; height: 45px;">
					<i class="fa fa-phone-alt text-primary"></i>
				</div>
				<div class="ms-3">
					<p class="mb-1 text-white">Telefone</p>
					<h5 class="m-0 text-secondary">27 3236-9919</h5>
				</div>
			</div>
		</div>
	</nav>
</div>