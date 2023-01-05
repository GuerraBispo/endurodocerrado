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
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/1.jpeg')}}"
                                alt="Enduro do Cerrado" />
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/2.jpeg')}}"
                                alt="Enduro do Cerrado" />
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/3.jpeg')}}"
                                alt="Enduro do Cerrado" />
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/4.jpeg')}}"
                                alt="Enduro do Cerrado" />
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/5.jpeg')}}"
                                alt="Enduro do Cerrado" />
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/6.jpeg')}}"
                                alt="Enduro do Cerrado" />
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/7.jpeg')}}"
                                alt="Enduro do Cerrado" />
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/8.jpeg')}}"
                                alt="Enduro do Cerrado" />
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/9.jpeg')}}"
                                alt="Enduro do Cerrado" />
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/10.jpeg')}}"
                                alt="Enduro do Cerrado" />
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/11.jpeg')}}"
                                alt="Enduro do Cerrado" />
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/12.jpeg')}}"
                                alt="Enduro do Cerrado" />
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/13.jpeg')}}"
                                alt="Enduro do Cerrado" /> 
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/14.jpeg')}}"
                                alt="Enduro do Cerrado" /> 
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/15.jpeg')}}"
                                alt="Enduro do Cerrado" />
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/16.jpeg')}}"
                                alt="Enduro do Cerrado" /> 
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/17.jpeg')}}"
                                alt="Enduro do Cerrado" /> 
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/18.jpeg')}}"
                                alt="Enduro do Cerrado" />  
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/19.jpeg')}}"
                                alt="Enduro do Cerrado" /> 
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/21.jpeg')}}"
                                alt="Enduro do Cerrado" />  
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/22.jpeg')}}"
                                alt="Enduro do Cerrado" /> 
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/28.jpeg')}}"
                                alt="Enduro do Cerrado" />  
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/24.jpeg')}}"
                                alt="Enduro do Cerrado" /> 
                            <img class="gallery-img" src="{{asset('assets/images/fotosEnduro/25.jpeg')}}"
                                alt="Enduro do Cerrado" />                                      
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>


@include('site.layouts.footer')