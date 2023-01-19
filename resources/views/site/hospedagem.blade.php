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
					    <li class="breadcrumb-item"><a href="{{ route('site.home') }}">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Hospedagens</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumb -->

    	<!-- Start main content -->
	<main>
		
		<!-- Start Portfolio -->
		<section id="mu-portfolio">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-portfolio-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>Hospedagens</h2>
										<p>Conforto, qualidade e econômia.</p>
									</div>
								</div>
							</div>

								<!-- Start Team Content -->
								<div class="row">
									<div class="col-md-12">
										<div class="mu-team-content">
											<div class="row">
												<!-- start single item -->
												<div class="col-md-6">
													<div class="mu-single-team">
														<div class="mu-single-team-img">
															<img src="assets/images/hotel/hilton.webp" alt="img">
														</div>
														<div class="mu-single-team-content">
															<h3>Hotel Hilton</h3>
															<span>Parceiro</span>
															<p>Av Brasília, 741 Centro, Carolina, Maranhão 65980-000 Brasil.</p>
															<ul class="mu-team-social">
																<li><a href="#"><i class="fa fa-facebook"></i></a></li>
																<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
																<li><a href="#"><i class="fa fa-instagram"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<!-- End single item -->

												<!-- start single item -->
												<div class="col-md-6">
													<div class="mu-single-team">
														<div class="mu-single-team-img">
															<img src="assets/images/hotel/araca.webp" alt="img">
														</div>
														<div class="mu-single-team-content">
															<h3>Hotel Araçás</h3>
															<span>Parceiro</span>
															<p>Avenida Getulio Vargas 1247, Carolina, Maranhão 65980-000 Brasil.</p>
															<ul class="mu-team-social">
																<li><a href="https://www.facebook.com/hotelaracas" target='_blank'><i class="fa fa-facebook"></i></a></li>
																<li><a href="https://api.whatsapp.com/send?phone=5599991604929" target='_blank'><i class="fa fa-whatsapp"></i></a></li>
																<li><a href="https://www.instagram.com/hotelaracas/" target='_blank'><i class="fa fa-instagram"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<!-- End single item -->

												<!-- start single item -->
												<div class="col-md-6">
													<div class="mu-single-team">
														<div class="mu-single-team-img">
															<img src="assets/images/hotel/belosono.webp" alt="img" style="">
														</div>
														<div class="mu-single-team-content">
															<h3>Pousada Belo Sono</h3>
															<span>Parceiro</span>
															<p>Rua Cidade Grajau, 201 Centro, Carolina, Maranhão 65980-000 Brasil.</p>
															<ul class="mu-team-social">
																<li><a href="https://www.facebook.com/pousadabelosono" target='_blank'><i class="fa fa-facebook"></i></a></li>
																<li><a href="https://wa.me/5599991911017" target='_blank'><i class="fa fa-whatsapp"></i></a></li>
																<li><a href="https://www.instagram.com/pousadabelosono/" target='_blank'><i class="fa fa-instagram"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<!-- End single item -->

												<!-- start single item -->
												<div class="col-md-6">
													<div class="mu-single-team">
														<div class="mu-single-team-img">
															<img src="assets/images/hotel/hotelcris.webp" alt="img" style="">
														</div>
														<div class="mu-single-team-content">
															<h3>Hostel e Cachaçaria da Cris</h3>
															<span>Parceiro</span>
															<p>Rua Gomes de Sousa, 1127, Carolina, CEP 65980-000, Brasil.</p>
															<ul class="mu-team-social">
																<li><a href="https://api.whatsapp.com/send?1=pt_BR&phone=5599982167000" target='_blank'><i class="fa fa-whatsapp"></i></a></li>
																<li><a href="https://www.instagram.com/hosteldacris/" target='_blank'><i class="fa fa-instagram"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<!-- End single item -->

												<!-- start single item -->
												<div class="col-md-6">
													<div class="mu-single-team">
														<div class="mu-single-team-img">
															<img src="assets/images/hotel/buriti.webp" alt="img" style="">
														</div>
														<div class="mu-single-team-content">
															<h3>Hostel Buriti</h3>
															<span>Parceiro</span>
															<p>Av. Elías Barros, 45, Carolina - MA, 65980-000.</p>
															<ul class="mu-team-social">
																<li><a href="https://api.whatsapp.com/send?phone=5599988273573" target='_blank'><i class="fa fa-whatsapp"></i></a></li>
																<li><a href="https://www.instagram.com/hotelburiti_carolina_ma/" target='_blank'><i class="fa fa-instagram"></i></a></li>
															</ul>
														</div>
													</div>
												</div>
												<!-- End single item -->
												
												
												
												<!-- End single item -->
											</div>
										</div>
									</div>
									
								</div>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Portfolio -->

        @include('site.patrocinadores')
		
	

	</main>
	
	<!-- End main content -->	

@include('site.layouts.footer')