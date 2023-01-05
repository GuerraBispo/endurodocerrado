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
										<p>Pague sua Inscrição através do QRCODE abaixo.</p>
										<img src="{{ asset('assets/images/pix/pix.webp') }}" style="margin-top: -20px" alt="Enduro do Cerrado"/><br>
									    <a class="mu-primary-btn" href="https://contate.me/endurodocerrado" target="_blank">Enviar Comprovante <span class="fa fa-long-arrow-right"></span></a>
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
																 name="cnh">
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
														<select name="veiculo" class="form-control">
														<option>Escolha o tipo de veículo</option>
														<option value="Moto">Moto - R$ 80 </option>
														<option value="Quaddriciculo">Quadriciculo - R$ 100 </option>
														<option value="UPV">UPV - R$ 100</option>
														<option value="Carro4x4">Carro 4x4 - R$ 150</option>
														</select>
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-wpforms mu-contact-icon"></span>
															<input type="text" class="form-control" placeholder="Placa"
																 name="placa">
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
																placeholder="Nome"  name="nomeAcompanhante">
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-whatsapp mu-contact-icon"></span>
															<input type="text" class="form-control"
																placeholder="Telefone"  name="telefoneAcompanhante">
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-file mu-contact-icon"></span>
															<input type="text" class="form-control"
																placeholder="Identidade"  name="identidadeAcompanhante">
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
																 name="emailAcompanhante">
														</div>
													</div>

													<div class="col-md-6">
														<div class="form-group">
															<span class="fa fa-group mu-contact-icon"></span>
															<input type="text" class="form-control" placeholder="Parentesco"
																 name="parentesco">
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
							<div class="mu-clients-slider">
								<div class="mu-clients-single">
									<img src="{{ asset('assets/images/patrocinadores/1.webp')}}" alt="Brand Logo">
								</div>

								<div class="mu-clients-single">
									<img src="{{ asset('assets/images/patrocinadores/2.webp')}}" alt="Brand Logo">
								</div>

								<div class="mu-clients-single">
									<img src="{{ asset('assets/images/patrocinadores/3.webp')}}" alt="Brand Logo">
								</div>

								<div class="mu-clients-single">
									<img src="{{ asset('assets/images/patrocinadores/4.webp')}}" alt="Brand Logo">
								</div>
								<div class="mu-clients-single">
									<img src="{{ asset('assets/images/patrocinadores/1.webp')}}" alt="Brand Logo">
								</div>

								<div class="mu-clients-single">
									<img src="{{ asset('assets/images/patrocinadores/2.webp')}}" alt="Brand Logo">
								</div>

								<div class="mu-clients-single">
									<img src="{{ asset('assets/images/patrocinadores/3.webp')}}" alt="Brand Logo">
								</div>

								<div class="mu-clients-single">
									<img src="{{ asset('assets/images/patrocinadores/4.webp')}}" alt="Brand Logo">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Clients -->

		<!-- Google map -->
		<div id="mu-google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1279.345353757415!2d-47.47468087967!3d-7.334848118359813!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x92d82ab0bf8e75e5%3A0x7acceed5ca2a0f9!2sPrefeitura%20de%20Carolina!5e1!3m2!1spt-BR!2sbr!4v1672944866164!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>	</main>
		</div>



@include('site.layouts.footer')