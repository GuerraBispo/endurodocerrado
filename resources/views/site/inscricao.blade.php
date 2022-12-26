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
					    <li class="breadcrumb-item"><a href="{{route('site.home')}}">Home</a></li>
					    <li class="breadcrumb-item active" aria-current="page">Inscrições</li>
					  </ol>
					</nav>
				</div>
			</div>
		</div>
	</div>
<!-- End Breadcrumb -->

	<!-- Start main content -->
	<main>
		<!-- Start Contact -->
		<section id="mu-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-contact-area">
							<!-- Title -->
							<div class="row">
								<div class="col-md-12">
									<div class="mu-title">
										<h2>Preencha o formulário</h2>
										<p>Contamos com a sua participação para abrilhantar o nosso evento. </p>
									</div>
								</div>
							</div>
							<!-- Start Contact Content -->
							<div class="mu-contact-content">
								<div class="row">

									<div class="col-md-12">
										<div class="mu-contact-form-area">
											<div id="form-messages"></div>
											<form id="ajax-contact" method="post" action="mailer.php"
												class="mu-contact-form">
												<div class="row">

													<div class="col-md-12">
														<div class="form-group">
															<span class="fa fa-motorcycle mu-contact-icon"></span>
															<input type="text" class="form-control"
																placeholder="Nome Piloto" id="name" name="name"
																required>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-tint mu-contact-icon"></span>
															<input type="text" class="form-control"
																placeholder="Tipo Sanguíneo" id="name" name="name"
																required>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-user mu-contact-icon"></span>
															<input type="text" class="form-control"
																placeholder="Identidade" id="name" name="name" required>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-folder-open-o mu-contact-icon"></span>
															<input type="text" class="form-control"
																placeholder="CPF ou RG" id="subject" name="subject"
																required>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-file mu-contact-icon"></span>
															<input type="text" class="form-control" placeholder="CNH"
																id="subject" name="subject" required>
														</div>
													</div>



													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-home mu-contact-icon"></span>
															<input type="text" class="form-control"
																placeholder="Endereço" id="email" name="email" required>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-map mu-contact-icon"></span>
															<input type="text" class="form-control" placeholder="Cidade"
																id="email" name="email" required>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-whatsapp mu-contact-icon"></span>
															<input type="text" class="form-control"
																placeholder="Telefone" id="email" name="email" required>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-envelope mu-contact-icon"></span>
															<input type="text" class="form-control" placeholder="Email"
																id="email" name="email" required>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-automobile mu-contact-icon"></span>
															<input type="text" class="form-control"
																placeholder="Veiculo" id="email" name="email" required>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-wpforms mu-contact-icon"></span>
															<input type="text" class="form-control" placeholder="Placa"
																id="email" name="email" required>
														</div>
													</div>


													<div class="col-md-12">
														<div class="form-group">
															<span class="fa fa-commenting mu-contact-icon"></span>
															<textarea class="form-control" placeholder="Observação"
																id="message" name="message" required></textarea>
														</div>
													</div>


												</div>

												<div class="col-md-12">
													<div class="mu-title">
														<h4>Acompanhante</h4>
													</div>
												</div>

												<div class="row">

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-user mu-contact-icon"></span>
															<input type="text" class="form-control"
																placeholder="Nome" id="name" name="name" required>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-whatsapp mu-contact-icon"></span>
															<input type="text" class="form-control"
																placeholder="WPP" id="email" name="email" required>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-whatsapp mu-contact-icon"></span>
															<input type="text" class="form-control"
																placeholder="Identidade" id="email" name="email" required>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-folder-open-o mu-contact-icon"></span>
															<input type="text" class="form-control"
																placeholder="CPF" id="subject" name="subject"
																required>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-envelope mu-contact-icon"></span>
															<input type="text" class="form-control" placeholder="Email"
																id="email" name="email" required>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-group mu-contact-icon"></span>
															<input type="text" class="form-control" placeholder="Parentesco"
																id="email" name="email" required>
														</div>
													</div>


												</div>

												<button type="submit"
													class="mu-send-msg-btn"><span>Enviar</span>
												</button>
											</form>
										</div>
									</div>

								</div>
							</div>
							<!-- End Contact Content -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- End Contact -->

		<!-- Google map -->
		<div id="mu-google-map">
			<iframe
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3508.8176744277202!2d-81.47150788457147!3d28.424757900613237!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88e77e378ec5a9a9%3A0x2feec9271ed22c5b!2sOrange+County+Convention+Center!5e0!3m2!1sen!2sbd!4v1503833952781"
				width="850" height="400" allowfullscreen></iframe>
		</div>


	</main>

@include('site.layouts.footer')