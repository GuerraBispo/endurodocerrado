
@include('site.layouts.header')

<!-- Start Page Header area -->
	<div id="mu-page-header">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="mu-page-header-area">
						
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Page Header area -->
   <!-- Start Breadcrumb -->
	<div id="mu-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav aria-label="breadcrumb" role="navigation">
					  <ol class="breadcrumb mu-breadcrumb">
					    <li class="breadcrumb-item"><a href="{{ route('site.home')}}">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Sobre Nós</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumb -->

   <main>
   	<!-- Start About -->
		<section id="mu-about">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-about-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>Sobre Nós</h2>
										<p align="justify">ENDURO DO CERRADO OFF ROAD (Motos, Quadriciculos, UTV e Carros 4x4), já é considerado um dos maiores eventos esportivo do sul do Maranhão. O evento de caráter esportivo que une a adrenalina, emoção, lazer, passeio turísticos e ecológico sem competitividade e premiação.
											É na trilha que desafiamos o nosso corpo para que atinja  objetivos extraordinarios. Porém, é nela também que conseguimos nos conectar de alma com a natureza e todo conhecimento extraordinário que ela carrega e nos oferece.</p>
										<p align="justify">Entende-se que através do esporte é possível promover a integração social, resgatar a cidadania das comunidades locais,
											a ampliação da divulgação, <br> distribuição de renda na geração de empregos temporários durante a realização do evento (lanchonetes, hotéis, restaurante, postos de gasolina, borracharias, autopeças especializadas em motos, carros e o comercio em geral).
										</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About -->

      <!-- Start Skills -->
		<section id="mu-skills">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-skills-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>Enduro do Cerrado</h2>
										<p>O evento é realizado na cidade de Carolina MA, um lugar cheio de encantos naturais. E possui trilhas sensacionais para você que busca aventura e divesão.</p>
									</div>
								</div>
							</div>
							<!-- Start Skills Content -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-skills-content">
										<div class="row">
											<!-- start single item -->
											<div class="col-md-3">
												<div class="mu-single-skills">
													<div class="mu-skills-circle">
														<div id="circle-1" class="mu-circle" data-circle-dialWidth=15>
														    <div class="loader-bg">
														        <div class="text">10.000 +</div>
														    </div>
														</div>
													</div>
													<h3>Participantes</h3>
													<p>Pessoas que já nos visitaram</p>
												</div>
											</div>
											<!-- End single item -->
											<!-- start single item -->
											<div class="col-md-3">
												<div class="mu-single-skills">
													<div class="mu-skills-circle">
														<div id="circle-2" class="mu-circle" data-circle-dialWidth=15>
														    <div class="loader-bg">
														        <div class="text">15 +</div>
														    </div>
														</div>
													</div>
													<h3>Hotelaria</h3>
													<p>Hoteis parceiros do Enduro do cerrado.</p>
												</div>
											</div>
											<!-- End single item -->
											<!-- start single item -->
											<div class="col-md-3">
												<div class="mu-single-skills">
													<div class="mu-skills-circle">
														<div id="circle-3" class="mu-circle" data-circle-dialWidth=15>
														    <div class="loader-bg">
														        <div class="text">10 +</div>
														    </div>
														</div>
													</div>
													<h3>Alimentação</h3>
													<p>Restaurantes e Padarias</p>
												</div>
											</div>
											<!-- End single item -->
											<!-- start single item -->
											<div class="col-md-3">
												<div class="mu-single-skills">
													<div class="mu-skills-circle">
														<div id="circle-4" class="mu-circle" data-circle-dialWidth=15>
														    <div class="loader-bg">
														        <div class="text">20 +</div>
														    </div>
														</div>
													</div>
													<h3>Patrocinadores</h3>
													<p>Empresas que apoiam nosso evento.</p>
												</div>
											</div>
											<!-- End single item -->
										</div>
									</div>
								</div>
								
							</div>
							<!-- End Skills Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Skills -->
      
		<!-- Patrocinadores -->
		@include('site.patrocinadores')
		<!-- End Patrocinadores -->

   </main>

@include('site.layouts.footer')