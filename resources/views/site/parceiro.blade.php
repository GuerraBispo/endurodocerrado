@include('site.layouts.header')

<!-- Start Breadcrumb -->
	<div id="mu-breadcrumb">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<nav aria-label="breadcrumb" role="navigation">
					  <ol class="breadcrumb mu-breadcrumb">
					    <li class="breadcrumb-item"><a href="{{ route('site.home') }}">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Parceiros</li>
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
										<h2>Patrocinadores</h2>
										<p>Do Enduro do Cerrado.</p>
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
															<img src="assets/images/hotel/1.png" alt="img" style="height: 100%">
														</div>
														<div class="mu-single-team-content">
															<h3>Hotel Hilton</h3>
															<span>Parceiro</span>
															<p>Avenida BRASILIA, Carolina, CEP 65980-000, Brasil.</p>
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
															<img src="assets/images/hotel/3.png" alt="img">
														</div>
														<div class="mu-single-team-content">
															<h3>New Center Hotel</h3>
															<span>Parceiro</span>
															<p>Av. Getúlio Vargas, 1445 - Centro, Carolina - MA, 65980-000.</p>
															<ul class="mu-team-social">
																<li><a href="#"><i class="fa fa-facebook"></i></a></li>
																<li><a href="#"><i class="fa fa-whatsapp"></i></a></li>
																<li><a href="#"><i class="fa fa-instagram"></i></a></li>
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
	</main>
	
	<!-- End main content -->	


 @include('site.layouts.footer')	