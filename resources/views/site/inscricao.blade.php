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

											<form  method="post" action="{{ route('site.formulario') }}" 
												class="mu-contact-form">
												@csrf
												<div class="row">

													<div class="col-md-12">
														<div class="form-group">
															<span class="fa fa-motorcycle mu-contact-icon"></span>
															<input type="text" class="form-control"
																placeholder="Nome Piloto" name="nome"
																required>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-tint mu-contact-icon"></span>
															<input type="text" class="form-control"
																placeholder="Tipo Sanguíneo" name="sangue"
																required>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-user mu-contact-icon"></span>
															<input type="text" class="form-control"
																placeholder="Identidade"  name="identidade" required>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-folder-open-o mu-contact-icon"></span>
															<input type="text" class="form-control"
																placeholder="CPF ou RG"  name="cpf"
																required>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-file mu-contact-icon"></span>
															<input type="text" class="form-control" placeholder="CNH"
																 name="cnh" required>
														</div>
													</div>



													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-home mu-contact-icon"></span>
															<input type="text" class="form-control"
																placeholder="Endereço"  name="endereco" required>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-map mu-contact-icon"></span>
															<input type="text" class="form-control" placeholder="Cidade"
																 name="cidade" required>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-whatsapp mu-contact-icon"></span>
															<input type="text" class="form-control"
																placeholder="Telefone" name="telefone" required>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-envelope mu-contact-icon"></span>
															<input type="email" class="form-control" placeholder="Email"
																 name="email" required>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-automobile mu-contact-icon"></span>
															<input type="text" class="form-control"
																placeholder="Veiculo"  name="veiculo" required>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-wpforms mu-contact-icon"></span>
															<input type="text" class="form-control" placeholder="Placa"
																 name="placa" required>
														</div>
													</div>


													<div class="col-md-12">
														<div class="form-group">
															<span class="fa fa-commenting mu-contact-icon"></span>
															<textarea class="form-control" placeholder="Observação"
																 name="observacao"></textarea>
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
																placeholder="Nome"  name="nomeAcompanhante" required>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-whatsapp mu-contact-icon"></span>
															<input type="text" class="form-control"
																placeholder="Telefone"  name="telefoneAcompanhante" required>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-file mu-contact-icon"></span>
															<input type="text" class="form-control"
																placeholder="Identidade"  name="identidadeAcompanhante" required>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-folder-open-o mu-contact-icon"></span>
															<input type="text" class="form-control"
																placeholder="CPF"  name="cpfAcompanhante"
																required>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-envelope mu-contact-icon"></span>
															<input type="text" class="form-control" placeholder="Email"
																 name="emailAcompanhante" required>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-group mu-contact-icon"></span>
															<input type="text" class="form-control" placeholder="Parentesco"
																 name="parentesco" required>
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

		<!-- Start Clients -->
		<div id="mu-clients">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-clients-area">

							<!-- Start Clients brand logo -->
							<div class="mu-clients-slider">

								<div class="mu-clients-single">
									<img src="{{ asset('assets/images/patrocinadores/1.png')}}" alt="Brand Logo">
								</div>

								<div class="mu-clients-single">
									<img src="{{ asset('assets/images/patrocinadores/2.png')}}" alt="Brand Logo">
								</div>

								<div class="mu-clients-single">
									<img src="{{ asset('assets/images/patrocinadores/3.png')}}" alt="Brand Logo">
								</div>

								<div class="mu-clients-single">
									<img src="{{ asset('assets/images/patrocinadores/4.png')}}" alt="Brand Logo">
								</div>

								<div class="mu-clients-single">
									<img src="{{ asset('assets/images/patrocinadores/5.png')}}" alt="Brand Logo">
								</div>

								<div class="mu-clients-single">
									<img src="{{ asset('assets/images/patrocinadores/6.png')}}" alt="Brand Logo">
								</div>
								<div class="mu-clients-single">
									<img src="{{ asset('assets/images/patrocinadores/7.png')}}" alt="Brand Logo">
								</div>
							</div>
							<!-- End Clients brand logo -->

						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Clients -->

		<!-- Google map -->
		<div id="mu-google-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d615.1308317165367!2d-47.46298446912058!3d-7.337278255780603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92d82bf1d4e8915f%3A0x1e1c8faf61b8d38e!2sNosso%20Lanche%20Carolina!5e1!3m2!1spt-BR!2sbr!4v1672146862268!5m2!1spt-BR!2sbr" width="850" height="400" allowfullscreen></iframe>
	</main>
		</div>



@include('site.layouts.footer')