@include('site.layouts.header')
<div id="mu-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb mu-breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('site.home') }}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Galeria</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>

<main>
    <section id="mu-portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="mu-portfolio-area">
                        <!-- Title -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mu-title">
                                    <h2>Nossos Registros</h2>
                                    <p>Algumas fotos de edições do Enduro.</p>
                                </div>
                            </div>
                        </div>
                        <section class="gallery">
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/10.webp')}}"
                                alt="Enduro do Cerrado" />
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/13.webp')}}"
                                alt="Enduro do Cerrado" /> 
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/15.webp')}}"
                                alt="Enduro do Cerrado" />
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/16.webp')}}"
                                alt="Enduro do Cerrado" /> 
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/17.webp')}}"
                                alt="Enduro do Cerrado" /> 
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/18.webp')}}"
                                alt="Enduro do Cerrado" />  
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/21.webp')}}"
                                alt="Enduro do Cerrado" />  
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/22.webp')}}"
                                alt="Enduro do Cerrado" /> 
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/28.webp')}}"
                                alt="Enduro do Cerrado" />  
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/25.webp')}}"
                                alt="Enduro do Cerrado" />  

                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/29.webp')}}"
                                alt="Enduro do Cerrado" /> 
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/32.webp')}}"
                                alt="Enduro do Cerrado" /> 
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/33.webp')}}"
                                alt="Enduro do Cerrado" />
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/34.webp')}}"
                                alt="Enduro do Cerrado" /> 
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/38.webp')}}"
                                alt="Enduro do Cerrado" />
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/39.webp')}}"
                                alt="Enduro do Cerrado" /> 
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/40.webp')}}"
                                alt="Enduro do Cerrado" />    
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/41.webp')}}"
                                alt="Enduro do Cerrado" /> 
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/42.webp')}}"
                                alt="Enduro do Cerrado" />  
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/37.webp')}}"
                                alt="Enduro do Cerrado" />                                                              
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


@include('site.layouts.footer')