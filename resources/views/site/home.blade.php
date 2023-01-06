@include('site.layouts.header')
	<!-- Start slider area -->
	<div id="mu-slider">
		<div class="mu-slide">
			<!-- Start single slide  -->
			<div class="mu-single-slide">
				<img src="{{ asset('assets//images/slide/1.webp')}}" alt="Enduro do Cerrado">
				<div class="mu-single-slide-content-area">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="mu-single-slide-content">
									<h1>Enduro do Cerrado</h1>
									<p>Feito sob medida para você que ama e vive e respira aventura.</p>
									<a class="mu-primary-btn" href="https://contate.me/endurodocerrado" target="_blank">Saiba mais <span class="fa fa-long-arrow-right"></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End single slide  -->

			<!-- Start single slide  -->
			<div class="mu-single-slide">
				<img src="{{ asset('assets//images/slide/2.webp') }}" alt="Enduro do Cerrado">
				<div class="mu-single-slide-content-area">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="mu-single-slide-content">
									<h1>Aventura e diversão</h1>
									<p>Se você gosta de graxa, gasolina, muita lama e um bom ronco de motor, aqui é o seu lugar!</p>
									<a class="mu-primary-btn" href="https://contate.me/endurodocerrado" target="_blank">Fale Conosco <span class="fa fa-long-arrow-right"></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End single slide  -->

			<!-- Start single slide  -->
			<div class="mu-single-slide">
				<img src="{{ asset('assets/images/slide/3.webp')}}" alt="Enduro do Cerrado">
				<div class="mu-single-slide-content-area">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="mu-single-slide-content">
									<h1>Venha se aventurar Conosco</h1>
									<p>Conheça lindas paisagens, viva momentos inesqueciveis e procure fugir desse mundo monótono, procure aventura e liberdade, porque só lá acharemos a felicidade!
									</p>
									<a class="mu-primary-btn" href="https://contate.me/endurodocerrado" target="_blank">Saiba mais <span class="fa fa-long-arrow-right"></span></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End single slide  -->
		</div>
	</div>
	<!-- End Slider area -->

	
	<!-- Start main content -->
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
										<h2>Enduro do Cerrado</h2>
										<p align="justify">O Enduro do Cerrado Off Road em Carolina Maranhão, é uma modalidade esportiva com mais de 20 anos, fazendo parte da abertura do calendário de evento do município. Com objetivo de difundir as práticas esportivas, além de fomentar o Turismo e Comercio local. Proporcionando aos participantes uma experiencias única no esporte radical.</p>
									</div>
								</div>
							</div>
							
									
							<!-- Start Feature Content -->
							<div class="row">
								<div class="col-md-6">
									<div class="mu-about-left">
										<video width="100%" height="295" style="margin-left: -40" controls>
											<source src="{{ asset('assets/video/video.mp4') }}" type="video/mp4">
										</video>
									</div>
								</div>
								<div class="col-md-6">
									<div class="mu-about-right">
										<ul>
											<li>
												<h3>Data do evento</h3>
												<p>21 e 22 de Janeiro de 2023.</p>
											</li>
											<li>
												<h3>Realização</h3>
												<p>JB Radical – Eventos e Aventurismo / Ânima Produções e eventos.</p>
											</li>
											<li>
												<h3>Organização</h3>
												<p>Samara Macedo / Elcivon Rocha / João Boneco.</p>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<!-- End Feature Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End About -->

		<!-- Call to Action -->
		<div id="mu-call-to-action">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-call-to-action-area">
							<div class="mu-call-to-action-left">
								<h2>Venha para o enduro do cerrado!</h2>
								<p>Viva aventuras inesqueciveis, em um dos lugares mais bonitos do Brasil.</p>
							</div>
							<a href="{{ route('site.formulario') }}" class="mu-primary-btn mu-quote-btn">Inscreva-se <i class="fa fa-long-arrow-right"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Patrocinadores -->
		@include('site.patrocinadores')
		<!-- End Patrocinadores -->
		<!-- Start Services -->
		<section id="mu-service">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-service-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>O que temos a oferecer</h2>
										<p>Contamos com um portifolio amblo de serviços de qualidade.</p>
									</div>
								</div>
							</div>
							<!-- Start Service Content -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-service-content">
										<div class="row">
											<!-- Start single service -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>Alimentação</h3>
														<!-- <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor commodo .</p> -->
													</div>
												</div>
											</div>
											<!-- End single service -->
											<!-- Start single service -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-bullhorn" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>Social</h3>
													</div>
												</div>
											</div>
											<!-- End single service -->
											<!-- Start single service -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-laptop" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>Midia</h3>
													</div>
												</div>
											</div>
											<!-- End single service -->
											<!-- Start single service -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-mobile" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>Segurança</h3>
													</div>
												</div>
											</div>
											<!-- End single service -->
											<!-- Start single service -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>Festas</h3>
													</div>
												</div>
											</div>
											<!-- End single service -->
											<!-- Start single service -->
											<div class="col-md-4">
												<div class="mu-single-service">
													<div class="mu-single-service-icon"><i class="fa fa-cog" aria-hidden="true"></i></div>
													<div class="mu-single-service-content">
														<h3>Atrativos</h3>
													</div>
												</div>
											</div>
											<!-- End single service -->
										</div>
									</div>
								</div>
							</div>
							<!-- End Service Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Services -->

		<!-- Start Video -->
		<div id="mu-video" style="margin-bottom: 100px;">
			<div class="row">
				<div class="col-md-6">
					<div class="mu-video-left">
						<a href="#" class="mu-video-play-btn"><i class="fa fa-play" aria-hidden="true"></i></a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="mu-video-right">
						<p>Confira na prática o que estamos falando. Enduro do cerrado em seu estado puro!</p>
					</div>
				</div>
			</div>

			<!-- Start Video Popup -->
			<div class="mu-video-popup">
				<div class="mu-video-iframe-area">
					<a class="mu-video-close-btn" href="#"><i class="fa fa-times" aria-hidden="true"></i></a>
                        <video width="520" height="295" controls>
							<source src="{{ asset('assets/video/trilha.mp4') }}" type="video/mp4">
						</video>				
				</div>
			</div>
			<!-- End Video Popup -->

		</div>
		<!-- End Video -->
		<!-- Patrocinadores -->
		@include('site.patrocinadores')
		<!-- End Patrocinadores -->
	</main>
   @include('site.layouts.footer')	
			
			
