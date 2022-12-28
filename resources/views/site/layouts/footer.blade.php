	<!-- Start footer -->
	<footer id="mu-footer">
		<div class="mu-footer-top">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="mu-single-footer">
							<img class="mu-footer-logo" src="{{ asset('assets/images/LOGOENDURO140X80PX.png')}}"  class="navbar-brand mu-logo"  />
							<p>O evento é realizado na cidade de Carolina MA, um lugar cheio de encantos naturais. E possui trilhas sensacionais para você que busca aventura e divesão. </p>
							<div class="mu-social-media">
								<a href="https://www.facebook.com/EndurodoCerradoOficial/" target="_blank"><i class="fa fa-facebook"></i></a>
								<a class="mu-twitter" href="https://contate.me/endurodocerrado" target="_blank"><i class="fa fa-whatsapp"></i></a>
								<a class="mu-pinterest" href="https://www.instagram.com/endurodocerrado_oficial/" target="_blank"><i class="fa fa-instagram"></i></a>
							</div>
						</div>
					</div>
					
					<div class="col-md-4">
						<div class="mu-single-footer">
							<h3>Todos os Links</h3>
							<ul class="mu-useful-links">
								<li><a href="{{ route('site.home') }}">Home</a></li>
								<li><a href="{{ route('site.sobrenos') }}">Sobre Nós</a></li>
								<li><a href="{{ route('site.hospedagem') }}">Hospedagens</a></li>
								<li><a href="{{ route('site.parceiros') }}">Parceiros</a></li>
								<li><a href="{{ route('site.formulario') }}">Inscrições</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-4">
						<div class="mu-single-footer">
							<h3>Contato</h3>
							<ul class="list-unstyled">
							  <li class="media">
							    <span class="fa fa-home"></span>
							    <div class="media-body">
							    	<p>Av. Frederico Martins Azevedo, Carolina - MA, 65980-000</p>
							    </div>
							  </li>
							  <li class="media">
							    <span class="fa fa-phone"></span>
							    <div class="media-body">
							       <p>(99) 991879574</p>
							    </div>
							  </li>
							  <li class="media">
							    <span class="fa fa-envelope"></span>
							    <div class="media-body">
							     <p>contato@endurodocerrado.com.br</p>
							    </div>
							  </li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="mu-footer-bottom">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="mu-footer-bottom-area">
							<p class="mu-copy-right">&copy; Desenvolvido por <a rel="nofollow" href="https://wa.me/message/LWWS5ZBNW5PSE1" target="_blank">UBC</a>.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

	</footer>
	<!-- End footer -->

	
	<!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="{{ asset('assets/js/slick.min.js') }}"></script>
    <!-- Progress Bar -->
    <script src="https://unpkg.com/circlebars@1.0.3/dist/circle.js"></script>
    <!-- Filterable Gallery js -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.filterizr.min.js') }}"></script>
    <!-- Gallery Lightbox -->
    <script type="text/javascript" src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
    <!-- Counter js -->
    <script type="text/javascript" src="{{ asset('assets/js/counter.js')}}"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="{{asset('assets/js/app.js')}}"></script>
    
	
    <!-- Custom js -->
	<script type="text/javascript" src="{{ asset('assets/js/custom.js')}}"></script>

	<!-- About us Skills Circle progress  -->
	<script>
		// First circle
	    new Circlebar({
        element : "#circle-1",
        type : "progress",
	      maxValue:  "80"
	    });
		
		// Second circle
	    new Circlebar({
        element : "#circle-2",
        type : "progress",
	      maxValue:  "50"
	    });

	    // Third circle
	    new Circlebar({
        element : "#circle-3",
        type : "progress",
	      maxValue:  "60"
	    });

	    // Fourth circle
	    new Circlebar({
        element : "#circle-4",
        type : "progress",
	      maxValue:  "90"
	    });

	</script>
    
  </body>
</html>