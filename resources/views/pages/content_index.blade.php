@extends('layouts.index')
@section('content')


  <div class="container" style="background-color: #fff">
    <div class="row">
      <div class="col d-none d-sm-block ">
        <img src="{{asset('images/person-principal.png')}}" class="d-block w-100 mt-7 ml-5 respW-142 respMl-1" alt="imagen1">
      </div>
      <div class="col align-self-center mt-7 d-none d-sm-block ">
        <h2 class="footer-heading h1 color-primario style-text w700 text-center">Cámbiate a lo de hoy</h2>
        <h2 class="footer-heading h1 color-primario style-text w700 text-center">Cámbiate a SPOTMOBILE</h2>
        <h3 class="footer-heading h5 style-text w700 text-center color-secundario mt-4">Cámbiate y disfruta de los paquetes que tenemos para ti.</h3>
        <div class="d-flex justify-content-center mt-n2">
          <div class="mt-5 p-3 ">
            <a href="{!! URL::to('recarga')!!}" class="btn btn-primary btn-lg active br-radiu w700 style-text" role="button" aria-pressed="true">¡Contratar ahora!</a>
          </div>
          <div class="mt-5 p-3 ">
            <a href="{!! URL::to('planes')!!}" class="btn btn-primary btn-lg active br-radiu vr-paquete w700 style-text" role="button" aria-pressed="true">Ver paquetes</a>
          </div>
        </div>
      </div>

      {{--  Responsivo  --}}
      <div class="col-4 col-md-8 d-sm-none d-md-block d-md-none d-lg-block d-lg-none d-xl-block d-xl-none">
        <img src="{{asset('images/person-principal.png')}}" class="d-block w-100 mt-10 ml-0 respW-142 " alt="imagen1">
      </div>
      <div class="col-6 col-md-4 align-self-center mt-1 d-sm-none d-md-block d-md-none d-lg-block d-lg-none d-xl-block d-xl-none">
        <h2 class="footer-heading h1 color-primario style-text w700 text-center">Cámbiate a lo de hoy</h2>
        <h2 class="footer-heading h1 color-primario style-text w700 text-center">Cámbiate a SPOTMOBILE</h2>
        <h3 class="footer-heading h5 style-text w700 text-center color-secundario mt-4">Cámbiate y disfruta de los paquetes que tenemos para ti.</h3>
        <div class="d-flex justify-content-center mt-n2">
          <div class="mt-5 p-3 ">
            <a href="{!! URL::to('recarga')!!}" class="btn btn-primary btn-lg active br-radiu w700 style-text" role="button" aria-pressed="true">¡Contratar ahora!</a>
          </div>
          <div class="mt-5 p-3 ">
            <a href="{!! URL::to('planes')!!}" class="btn btn-primary btn-lg active br-radiu vr-paquete w700 style-text" role="button" aria-pressed="true">Ver paquetes</a>
          </div>
        </div>
      </div>
      {{--  Responsivo  --}}
    </div>
  </div>

  <section class="pricing bg-shape color-barra-principal mt-4">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title">
            <div class="header-text mt-5">
              <h3 class="text-white style-text w500 display-3 font-duda mb-3">¿Tienes alguna duda?</em></h3>
            </div>
            <div class="header-text mb-n3">
              <button type="button" class="btn btn-light br-radiu-contacto ">Contáctanos</button>
            </div>
          </div>
        </div>     
    </div>
  </section>
  
  <section class="pricing bg-shape">
    <div class="container">
      <div class="row">
        <div>
          <h2 class="style-text w800 text-center mt-n2 color-primario">Conócenos</h2>
        </div>
        <div>
          <p class="footer-heading h5 style-text w400 text-center color-secundario mt-4">En SPOT1MOBILE, creemos que la comunicación es esencial en la vida cotidiana. Nos esforzamos por ofrecer a nuestros
             clientes a una red confiable y una cobertura excepcional en todo México.
          </p>
        </div>
        {{--  <div class="col-7 col-responsive">
          <div>
            <div class="d-flex flex-row">
              <h4 class="w600 color-slogan">Misión</h4>
              <img src="{{asset('images/icono-mision.svg')}}" class="img-mision" alt="Imagen Misión">
            </div>
            <div>
              <p class="style-text w400">
                Lograr ser un referente en el ambiente de las telecomunicaciones, brindando soluciones tecnológicas a nuestros clientes, buscando ofrecer
                La mejor conectividad y calidad  en el servicio.
              </p>
            </div>
          </div>
          <div class="mt-5">
            <div class="d-flex flex-row">
              <h4 class="w600 color-slogan">Visión</h4>
              <img src="{{asset('images/icono-vision.svg')}}" class="img-mision" alt="Imagen Visión">
            </div>
            <div>
              <p class="style-text w400">
                Situarnos como una empresa líder en el ramo de las telecomunicaciones, con el compromiso de ofrecer productos y servicios con las más alta calidad,
                buscando siempre como objetivo principal, la satisfacción de todos nuestros clientes.
              </p>
            </div>
          </div>
        </div>  --}}
        {{--  <div class="col-1 d-none d-sm-block">
          <hr class="hr">
        </div>  --}}
        {{--  <div class="col-sm mt-valores">
          <div>
            <h4 class="w600 color-slogan">Valores</h4>
            <ul class="list-group mt-2">
              <li class="p-1 style-text w400"><i class="fa-solid fa-arrow-right p-1"></i>Servicio</li>
              <li class="p-1 style-text w400"><i class="fa-solid fa-arrow-right p-1"></i>Profesionalismo</li>
              <li class="p-1 style-text w400"><i class="fa-solid fa-arrow-right p-1"></i>Orientación al cliente</li>
              <li class="p-1 style-text w400"><i class="fa-solid fa-arrow-right p-1"></i>Trabajo en equipo</li>
              <li class="p-1 style-text w400"><i class="fa-solid fa-arrow-right p-1"></i>Mejora continua</li>
              <li class="p-1 style-text w400"><i class="fa-solid fa-arrow-right p-1"></i>Objetividad</li>
              <li class="p-1 style-text w400"><i class="fa-solid fa-arrow-right p-1"></i>Buen humor</li>
              <li class="p-1 style-text w400"><i class="fa-solid fa-arrow-right p-1"></i>Integridad</li>
              <li class="p-1 style-text w400"><i class="fa-solid fa-arrow-right p-1"></i>Lealtad</li>
              <li class="p-1 style-text w400"><i class="fa-solid fa-arrow-right p-1"></i>Excelencia</li>
            </ul>
          </div>
        </div>  --}}
      </div>
    </div>
  </section>

<section class="img-cobertura">
  <div class="row">
    <div class="p-3">
      <h3 class="color-terciario mb-1 text-center p-3 style-text w800">Cobertura</h3>
      <h5 class="text-white text-center w400 style-text mt-2">Con spot 1 mobile tendrás cobertura en México,</h5>
      <h5 class="text-white text-center w400 style-text mt-2">Estados Unidos y Canadá para comunicarte con</h5>
      <h5 class="text-white text-center w400 style-text mt-2">las personas que más quieres.</h5>
    </div>
    <div class="col text-center p-3">
      <a href="{!! URL::to('mapa')!!}" class="btn btn-light br-radiu-contacto color-slogan">Ver mapa</a>
    </div>
    </div>
  </div>
</section>

<section class="testimonials" id="testimonials">
    <div class="container">
      <div class="row">
        
        <div class="burbujas">
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
          <div class="burbuja"></div>
        </div>

      </div>
    </div>
    <div class="row">
    {{--  <div class="row" style="background-color: #c6e4ff; ">  --}}
      <div class="col-lg-12">
        <div class="d-flex justify-content-center">
          <div class="section-heading section-heading__text">
            <h2 class="mb-3 color-text-planes style-text w500">¡Tenemos los mejores planes!</h2>
            <h2><span class="texto-planes style-text w900">¡Obten el que más te guste!</span></h2>
          </div>
          <div class="ml-5 bg-light w-25 b-rounded mt-3 h-4 color-cuaternario">
            <div class="mt-3 text-center">
          <button type="button" class="btn color-tarje style-text w900 btn-hover text-capitalize nav-item btn-planes activeTarj" onclick="planesUno();">Promoción</button>
          <button type="button" class="btn color-tarje style-text w900 text-capitalize text-capitalize btn-planes" onclick="planesDos();">Prepago</button>
          <button type="button" class="btn color-tarje style-text w900 text-capitalize text-capitalize btn-planes" onclick="planesTres();">Pago Anticipado</button>
          </div>
          </div>
        </div>
      </div>
      
      <hr class="hr-line mt-n2">
      
      <!-- PLANES #1 -->
      {{--  <div id="planes_uno">
        <div class="d-flex justify-content-center" id="planes_uno">
          <div class="col-lg-3 col-md-6 p-5">
            <div class="pricing-table text-center feature_item font-color box-shad" style="position:relative">
              <span class="tarjet-text w900 style-text p-3">SPOT 100</span>
              <div class="title">
                <img src="{{asset('images/Paquetes-03.png')}}" alt="Imagen4" class="img-precio1">
              </div>

              <div class="price  d-flex flex-row">
                  <div class="col-sm tarjeta-paquete">
                    <h3 class="texto-principal style-text w500 text-center style-text w900 ">MEGAS</h3>
                    <h3 class="texto-secundario style-text w500 text-center style-text W700">por <span class="style-text w900 ">30 DÍAS</span> </h3>
                  </div>
              </div>

              <hr class="hr-basico">

              <div class="action-button">
                <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB style-text w800">Ir</a>
              </div>

              <div class="mt-7">
                <img src="{{asset('images/Paquetes-06.png')}}" alt="Imagen4" class="img-precio1 w-75">
                <p class="text-uppercase h5 p-2 color-tarjet w600">Incluye compartición de datos*</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 p-5">
            <div class="pricing-table text-center feature_item font-color box-shad" style="position:relative">
              <span class="tarjet-text1 w900 style-text p-3">SPOT REDES 10D</span>
              <div class="title">
                <img src="{{asset('images/Paquetes-04.png')}}" alt="Imagen4" class="img-precio1">
              </div>

              <div class="price  d-flex flex-row">
                  <div class="col-sm tarjeta-paquete">
                    <h3 class="texto-principal style-text w500 text-center style-text w900 ">MEGAS</h3>
                    <h3 class="texto-secundario style-text w500 text-center style-text W700">por <span class="style-text w900 ">10 DÍAS</span> </h3>
                  </div>
              </div>

              <hr class="hr-basico">

              <div class="action-button">
                <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB style-text w800">Ir</a>
              </div>

              <div class="mt-7">
                <img src="{{asset('images/Paquetes-07.png')}}" alt="Imagen4" class="img-precio1 w-75">
                <p class="text-uppercase h5 p-2 color-tarjet w600">Incluye <span class="color-redes">redes sociales</span></p>
                <p class="text-uppercase color-tarjet w600 h-1">No permite compartición de datos</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 p-5">
            <div class="pricing-table text-center feature_item font-color box-shad" style="position:relative">
              <span class="tarjet-text1 w900 style-text p-3">SPOT REDES 20D</span>
              <div class="title">
                <img src="{{asset('images/Paquetes-05.png')}}" alt="Imagen4" class="img-precio1">
              </div>

              <div class="price  d-flex flex-row">
                  <div class="col-sm tarjeta-paquete">
                    <h3 class="texto-principal style-text w500 text-center style-text w900 ">MEGAS</h3>
                    <h3 class="texto-secundario style-text w500 text-center style-text W700">por <span class="style-text w900 ">20 DÍAS</span> </h3>
                  </div>
              </div>

              <hr class="hr-basico">

              <div class="action-button">
                <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB style-text w800">Ir</a>
              </div>

              <div class="mt-7">
                <img src="{{asset('images/Paquetes-08.png')}}" alt="Imagen4" class="img-precio1 w-75">
                <p class="text-uppercase h5 p-2 color-tarjet w600">Incluye <span class="color-redes">redes sociales</span></p>
                <p class="text-uppercase color-tarjet w600 h-1">No permite compartición de datos</p>
              </div>
            </div>
          </div>

        </div> 
      </div>  --}}

      <!-- PLANES 2 -->
      {{--  <div id="planes_dos">
        <div class="d-flex justify-content-center">
          <div class="col-lg-3 col-md-6 p-5">
            <div class="pricing-table text-center feature_item font-color box-shadPlan2" style="position:relative">
              <span class="tarjet-text2 w900 style-text p-3">SPOT  70</span>
              <div class="title">
                <img src="{{asset('images/Paquetes-19.png')}}" alt="Imagen4" class="img-precio1">
              </div>

              <div class="price  d-flex flex-row">
                  <div class="col-sm tarjeta-paquete">
                    <h3 class="texto-principalPlan2 style-text w500 text-center style-text w900 ">MEGAS</h3>
                    <h3 class="texto-secundarioPlan2 style-text w500 text-center style-text W700">por <span class="style-text w900 ">7 DÍAS</span> </h3>
                  </div>
              </div>

              <hr class="hr-basico">

              <ul class="feature-list">
                <li class="style-text w900 w500 texto-secundarioPlan2">5,000 MB</li>
                <li class="style-text w900 w500 texto-secundarioPlan2">5,000* <span class="h07">MB velocidad reducida</span></li>
              </ul>

              <div class="action-button">
                <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB2 style-text w800">Ir</a>
              </div>

              <div class="mt-7">
                <img src="{{asset('images/Paquetes-24.png')}}" alt="Imagen4" class="img-precio1 w-75">
                <!-- <p class="text-uppercase h5 p-2 color-tarjet w600">Incluye compartición de datos*</p> -->
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 p-5">
            <div class="pricing-table text-center feature_item font-color box-shadPlan2" style="position:relative">
              <span class="tarjet-text2 w900 style-text p-3">SPOT  150</span>
              <div class="title">
                <img src="{{asset('images/Paquetes-20.png')}}" alt="Imagen4" class="img-precio1">
              </div>

              <div class="price  d-flex flex-row">
                  <div class="col-sm tarjeta-paquete">
                    <h3 class="texto-principalPlan2 style-text w500 text-center style-text w900 ">MEGAS</h3>
                    <h3 class="texto-secundarioPlan2 style-text w500 text-center style-text W700">por <span class="style-text w900 ">30 DÍAS</span> </h3>
                  </div>
              </div>

              <hr class="hr-basico">

              <div class="action-button">
                <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB2 style-text w800">Ir</a>
              </div>

              <div class="mt-7">
                <img src="{{asset('images/Paquetes-25.png')}}" alt="Imagen4" class="img-precio1 w-75">
                <p class="text-uppercase h5 p-2 color-tarjet2 w600">Incluye compartición de datos*</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 p-5">
            <div class="pricing-table text-center feature_item font-color box-shadPlan2" style="position:relative">
              <span class="tarjet-text2 w900 style-text p-3">SPOT  200</span>
              <div class="title">
                <img src="{{asset('images/Paquetes-21.png')}}" alt="Imagen4" class="img-precio1">
              </div>

              <div class="price  d-flex flex-row">
                  <div class="col-sm tarjeta-paquete">
                    <h3 class="texto-principalPlan2 style-text w500 text-center style-text w900 ">MEGAS</h3>
                    <h3 class="texto-secundarioPlan2 style-text w500 text-center style-text W700">por <span class="style-text w900 ">30 DÍAS</span> </h3>
                  </div>
              </div>

              <hr class="hr-basico">

              <ul class="feature-list">
                <li class="style-text w900 w500 texto-secundarioPlan2">20,000 MB</li>
                <li class="style-text w900 w500 texto-secundarioPlan2">20,000* <span class="h07">MB velocidad reducida</span></li>
              </ul>

              <div class="action-button">
                <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB2 style-text w800">Ir</a>
              </div>

              <div class="mt-7">
                <img src="{{asset('images/Paquetes-26.png')}}" alt="Imagen4" class="img-precio1 w-75">
                <p class="text-uppercase h5 p-2 color-tarjet2 w600">No permite compartición de datos*</span></p>
              </div>
            </div>
          </div>
        </div>
      </div>  --}}

      <!-- PLANES 3 -->
      {{--  <div id="planes_tres">
        <div class="d-flex justify-content-center" id="planes_tres">
          <div class="col-lg-3 col-md-6 p-5">
            <div class="pricing-table text-center feature_item font-color box-shadPlan3" style="position:relative">
              <span class="tarjet-text3 w900 style-text p-3">SPOT  12M 5000</span>
              <div class="title">
                <img src="{{asset('images/Paquetes-09.png')}}" alt="Imagen4" class="img-precio1">
              </div>

              <div class="price  d-flex flex-row">
                  <div class="col-sm tarjeta-paquete">
                    <h3 class="texto-principalPlan3 style-text w500 text-center style-text w900 ">MEGAS</h3>
                    <h3 class="texto-secundarioPlan3 style-text w500 text-center style-text W700">PAQ <span class="style-text w900 ">12 MESES</span> </h3>
                  </div>
              </div>

              <hr class="hr-basico">

              <div class="action-button">
                <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB3 style-text w800">Ir</a>
              </div>

              <div class="mt-7">
                <img src="{{asset('images/Paquetes-13.png')}}" alt="Imagen4" class="img-precio1 w-75">
                <p class="text-uppercase h5 p-2 color-tarjet3 w600">Incluye compartición de datos*</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 p-5">
            <div class="pricing-table text-center feature_item font-color box-shadPlan3" style="position:relative">
              <span class="tarjet-text3 w900 style-text p-3">SPOT  12M 8000</span>
              <div class="title">
                <img src="{{asset('images/Paquetes-10.png')}}" alt="Imagen4" class="img-precio1">
              </div>

              <div class="price  d-flex flex-row">
                  <div class="col-sm tarjeta-paquete">
                    <h3 class="texto-principalPlan3 style-text w500 text-center style-text w900 ">MEGAS</h3>
                    <h3 class="texto-secundarioPlan3 style-text w500 text-center style-text W700">PAQ <span class="style-text w900 ">12 MESES</span> </h3>
                  </div>
              </div>

              <hr class="hr-basico">

              <div class="action-button">
                <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB3 style-text w800">Ir</a>
              </div>

              <div class="mt-7">
                <img src="{{asset('images/Paquetes-15.png')}}" alt="Imagen4" class="img-precio1 w-75">
                <p class="text-uppercase h5 p-2 color-tarjet3 w600">Incluye compartición de datos*</p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 p-5">
            <div class="pricing-table text-center feature_item font-color box-shadPlan3" style="position:relative">
              <span class="tarjet-text3 w900 style-text p-3">SPOT  12M 20000</span>
              <div class="title">
                <img src="{{asset('images/Paquetes-11.png')}}" alt="Imagen4" class="img-precio1">
              </div>

              <div class="price  d-flex flex-row">
                  <div class="col-sm tarjeta-paquete">
                    <h3 class="texto-principalPlan3 style-text w500 text-center style-text w900 ">MEGAS</h3>
                    <h3 class="texto-secundarioPlan3 style-text w500 text-center style-text W700">PAQ <span class="style-text w900 ">12 MESES</span> </h3>
                  </div>
              </div>

              <hr class="hr-basico">

              <ul class="feature-list">
                <li class="style-text w900 w500 texto-secundarioPlan3">20,000 MB</li>
                <li class="style-text w900 w500 texto-secundarioPlan3">20,000* <span class="h07">MB velocidad reducida</span></li>
              </ul>

              <div class="action-button">
                <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB3 style-text w800">Ir</a>
              </div>

              <div class="mt-7">
                <img src="{{asset('images/Paquetes-17.png')}}" alt="Imagen4" class="img-precio1 w-75">
                <p class="text-uppercase h-1 p-2 color-tarjet3 w600">No permite compartición de datos*</span></p>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 p-5">
            <div class="pricing-table text-center feature_item font-color box-shadPlan3" style="position:relative">
              <span class="tarjet-text3 w900 style-text p-3">HOT-SPOT  12M 20000</span>
              <div class="title">
                <img src="{{asset('images/Paquetes-11.png')}}" alt="Imagen4" class="img-precio1">
              </div>

              <div class="price  d-flex flex-row">
                  <div class="col-sm tarjeta-paquete">
                    <h3 class="texto-principalPlan3 style-text w500 text-center style-text w900 ">MEGAS</h3>
                    <h3 class="texto-secundarioPlan3 style-text w500 text-center style-text W700">PAQ <span class="style-text w900 ">12 MESES</span> </h3>
                  </div>
              </div>

              <hr class="hr-basico">

              <ul class="feature-list">
                <li class="style-text w900 w500 texto-secundarioPlan3">20,000 MB</li>
                <li class="style-text w900 w500 texto-secundarioPlan3">20,000* <span class="h07">MB velocidad reducida</span></li>
              </ul>

              <div class="action-button">
                <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB3 style-text w800">Ir</a>
              </div>

              <div class="mt-7">
                <img src="{{asset('images/Paquetes-18.png')}}" alt="Imagen4" class="img-precio1 w-75">
                <p class="text-uppercase h5 p-2 color-tarjet3 w600">Incluye compartición de datos*</p>
              </div>
            </div>
          </div>
        </div>
      </div>  --}}

      <!-- Slider Planes 1-->
      <div id="planes_uno">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="col-lg-9 p-5 presp-2 pd-1">
                <div class="pricing-table text-center feature_item font-color box-shad" style="position:relative">
                  <span class="tarjet-text w900 style-text p-3">SPOT 100</span>
                  <div class="title">
                    <img src="{{asset('images/Paquetes-03.png')}}" alt="Imagen4" class="img-precio1 mt-n5">
                  </div>
    
                  <div class="price  d-flex flex-row">
                      <div class="col-sm tarjeta-paquete">
                        <h3 class="texto-principal style-text w500 text-center style-text w900 ">MEGAS</h3>
                        <h3 class="texto-secundario style-text w500 text-center style-text W700">por <span class="style-text w900 ">30 DÍAS</span> </h3>
                      </div>
                  </div>
    
                  <hr class="hr-basico">
    
                  <div class="action-button">
                    <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB style-text w800">Ir</a>
                  </div>
    
                  <div class="mt-7">
                    <img src="{{asset('images/Paquetes-06.png')}}" alt="Imagen4" class="img-precio1 w-75">
                    <p class="text-uppercase h5 p-2 color-tarjet w600 mt-n2">Incluye compartición de datos*</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="col-lg-9 p-5 presp-2 pd-1">
                <div class="pricing-table text-center feature_item font-color box-shad" style="position:relative">
                  <span class="tarjet-text1 w900 style-text p-3">SPOT REDES 10D</span>
                  <div class="title">
                    <img src="{{asset('images/Paquetes-04.png')}}" alt="Imagen4" class="img-precio1 mt-n5">
                  </div>
    
                  <div class="price  d-flex flex-row">
                      <div class="col-sm tarjeta-paquete">
                        <h3 class="texto-principal style-text w500 text-center style-text w900 ">MEGAS</h3>
                        <h3 class="texto-secundario style-text w500 text-center style-text W700">por <span class="style-text w900 ">10 DÍAS</span> </h3>
                      </div>
                  </div>
    
                  <hr class="hr-basico">
    
                  <div class="action-button">
                    <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB style-text w800">Ir</a>
                  </div>
    
                  <div class="mt-7">
                    <img src="{{asset('images/Paquetes-07.png')}}" alt="Imagen4" class="img-precio1 w-75">
                    <p class="text-uppercase h5 p-2 color-tarjet w600 mt-n2">Incluye <span class="color-redes">redes sociales</span></p>
                    <p class="text-uppercase color-tarjet w600 h-1 mt-n1">No permite compartición de datos</p>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="swiper-slide">
              <div class="col-lg-9 p-5 presp-2 pd-1">
                <div class="pricing-table text-center feature_item font-color box-shad" style="position:relative">
                  <span class="tarjet-text1 w900 style-text p-3">SPOT REDES 20D</span>
                  <div class="title">
                    <img src="{{asset('images/Paquetes-05.png')}}" alt="Imagen4" class="img-precio1 mt-n5">
                  </div>
    
                  <div class="price  d-flex flex-row">
                      <div class="col-sm tarjeta-paquete">
                        <h3 class="texto-principal style-text w500 text-center style-text w900 ">MEGAS</h3>
                        <h3 class="texto-secundario style-text w500 text-center style-text W700">por <span class="style-text w900 ">20 DÍAS</span> </h3>
                      </div>
                  </div>
    
                  <hr class="hr-basico">
    
                  <div class="action-button">
                    <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB style-text w800">Ir</a>
                  </div>
    
                  <div class="mt-7">
                    <img src="{{asset('images/Paquetes-08.png')}}" alt="Imagen4" class="img-precio1 w-75">
                    <p class="text-uppercase h5 p-2 color-tarjet w600 mt-n2">Incluye <span class="color-redes">redes sociales</span></p>
                    <p class="text-uppercase color-tarjet w600 h-1 mt-n1">No permite compartición de datos</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button-next d-xl-none "></div>
          <div class="swiper-button-prev d-xl-none "></div> 
          <div class="swiper-pagination"></div>
        </div>
      </div>
      <!-- Slider Planes 1 -->

      <!-- Slider Planes 2-->
      <div id="planes_dos">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">
            
            <div class="swiper-slide">
              <div class="col-lg-9 p-5 presp-2 pd-1">
                <div class="pricing-table text-center feature_item font-color box-shadPlan2" style="position:relative">
                  <span class="tarjet-text2 w900 style-text p-3">SPOT  250</span>
                  <div>
                  {{--  <div class="title"> original de arriba  --}}
                    <img src="{{asset('images/Paquetes-21.png')}}" alt="Imagen4" class="img-precio1">
                  </div>
    
                  <div class="price  d-flex flex-row">
                      <div class="col-sm tarjeta-paquete">
                        <h3 class="texto-principalPlan2 style-text w500 text-center style-text w900 ">MEGAS*</h3>
                        <h3 class="texto-secundarioPlan2 style-text w500 text-center style-text W700">por <span class="style-text w900 ">30 DÍAS</span> </h3>
                      </div>
                  </div>
    
                  <hr class="hr-basico">
    
                  <ul class="feature-list">
                    <li class="style-text w900 w500 texto-secundarioPlan2">20,000 MB</li>
                    <li class="style-text w900 w500 texto-secundarioPlan2">20,000* <span class="h07">MB velocidad reducida</span></li>
                  </ul>
    
                  <div class="action-button">
                    <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB2 style-text w800">Ir</a>
                  </div>
    
                  <div class="mt-7">
                    <img src="{{asset('images/Paquetes-27.png')}}" alt="Imagen4" class="img-precio1 w-75">
                    <p class="text-uppercase h5 p-2 color-tarjet w600">Incluye compartición de datos*</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="col-lg-9 p-5 presp-2 pd-1">
                <div class="pricing-table text-center feature_item font-color box-shadPlan2" style="position:relative">
                  <span class="tarjet-text2 w900 style-text p-3">SPOT  500</span>
                  <div>
                  {{--  <div class="title"> original de arriba  --}}
                    <img src="{{asset('images/Paquetes-22.png')}}" alt="Imagen4" class="img-precio1">
                  </div>
    
                  <div class="price  d-flex flex-row">
                      <div class="col-sm tarjeta-paquete">
                        <h3 class="texto-principalPlan2 style-text w500 text-center style-text w900 ">MEGAS</h3>
                        <h3 class="texto-secundarioPlan2 style-text w500 text-center style-text W700">por <span class="style-text w900 ">7 DÍAS</span> </h3>
                      </div>
                  </div>
    
                  <hr class="hr-basico">
    
                  <ul class="feature-list">
                    <li class="style-text w900 w500 texto-secundarioPlan2">50,000 MB</li>
                    <li class="style-text w900 w500 texto-secundarioPlan2">50,000* <span class="h07">MB velocidad reducida</span></li>
                  </ul>
    
                  <div class="action-button">
                    <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB2 style-text w800">Ir</a>
                  </div>
    
                  <div class="mt-7">
                    <img src="{{asset('images/Paquetes-23.png')}}" alt="Imagen4" class="img-precio1 w-75">
                    <!-- <p class="text-uppercase h5 p-2 color-tarjet w600">Incluye compartición de datos*</p> -->
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="col-lg-9 p-5 presp-2 pd-1">
                <div class="pricing-table text-center feature_item font-color box-shadPlan2" style="position:relative">
                  <span class="tarjet-text2 w900 style-text p-3">SPOT  70</span>
                  <div>
                  {{--  <div class="title"> original de arriba  --}}
                    <img src="{{asset('images/Paquetes-19.png')}}" alt="Imagen4" class="img-precio1">
                  </div>
    
                  <div class="price  d-flex flex-row">
                      <div class="col-sm tarjeta-paquete">
                        <h3 class="texto-principalPlan2 style-text w500 text-center style-text w900 ">MEGAS</h3>
                        <h3 class="texto-secundarioPlan2 style-text w500 text-center style-text W700">por <span class="style-text w900 ">7 DÍAS</span> </h3>
                      </div>
                  </div>
    
                  <hr class="hr-basico">
    
                  <ul class="feature-list">
                    <li class="style-text w900 w500 texto-secundarioPlan2">5,000 MB</li>
                    <li class="style-text w900 w500 texto-secundarioPlan2">5,000* <span class="h07">MB velocidad reducida</span></li>
                  </ul>
    
                  <div class="action-button">
                    <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB2 style-text w800">Ir</a>
                  </div>
    
                  <div class="mt-7">
                    <img src="{{asset('images/Paquetes-24.png')}}" alt="Imagen4" class="img-precio1 w-75">
                    <!-- <p class="text-uppercase h5 p-2 color-tarjet w600">Incluye compartición de datos*</p> -->
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="col-lg-9 p-5 presp-2 pd-1">
                <div class="pricing-table text-center feature_item font-color box-shadPlan2" style="position:relative">
                  <span class="tarjet-text2 w900 style-text p-3">SPOT  150</span>
                  <div>
                  {{--  <div class="title"> original de arriba  --}}
                    <img src="{{asset('images/Paquetes-20.png')}}" alt="Imagen4" class="img-precio1">
                  </div>
    
                  <div class="price  d-flex flex-row">
                      <div class="col-sm tarjeta-paquete">
                        <h3 class="texto-principalPlan2 style-text w500 text-center style-text w900 ">MEGAS</h3>
                        <h3 class="texto-secundarioPlan2 style-text w500 text-center style-text W700">por <span class="style-text w900 ">30 DÍAS</span> </h3>
                      </div>
                  </div>
    
                  <hr class="hr-basico">
    
                  <div class="action-button">
                    <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB2 style-text w800">Ir</a>
                  </div>
    
                  <div class="mt-7">
                    <img src="{{asset('images/Paquetes-25.png')}}" alt="Imagen4" class="img-precio1 w-75">
                    <p class="text-uppercase h5 p-2 color-tarjet2 w600">Incluye compartición de datos*</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="col-lg-9 p-5 presp-2 pd-1">
                <div class="pricing-table text-center feature_item font-color box-shadPlan2" style="position:relative">
                  <span class="tarjet-text2 w900 style-text p-3">SPOT  200</span>
                  <div>
                  {{--  <div class="title"> original de arriba  --}}
                    <img src="{{asset('images/Paquetes-21.png')}}" alt="Imagen4" class="img-precio1">
                  </div>
    
                  <div class="price  d-flex flex-row">
                      <div class="col-sm tarjeta-paquete">
                        <h3 class="texto-principalPlan2 style-text w500 text-center style-text w900 ">MEGAS</h3>
                        <h3 class="texto-secundarioPlan2 style-text w500 text-center style-text W700">por <span class="style-text w900 ">30 DÍAS</span> </h3>
                      </div>
                  </div>
    
                  <hr class="hr-basico">
    
                  <ul class="feature-list">
                    <li class="style-text w900 w500 texto-secundarioPlan2">20,000 MB</li>
                    <li class="style-text w900 w500 texto-secundarioPlan2">20,000* <span class="h07">MB velocidad reducida</span></li>
                  </ul>
    
                  <div class="action-button">
                    <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB2 style-text w800">Ir</a>
                  </div>
    
                  <div class="mt-7">
                    <img src="{{asset('images/Paquetes-26.png')}}" alt="Imagen4" class="img-precio1 w-75">
                    <p class="text-uppercase h5 p-2 color-tarjet2 w600">No permite compartición de datos*</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div> 
          <div class="swiper-pagination"></div>
        </div>
      </div>
      <!-- Slider Planes 2 -->

      <!-- Slider Planes 3-->
      <div id="planes_tres">
        <div class="swiper mySwiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="col-lg-9 presp-2 pd-1 p-5">
                <div class="pricing-table text-center feature_item font-color box-shadPlan3" style="position:relative">
                  <span class="tarjet-text3 w900 style-text p-3">SPOT 3M</span>
                  <div class="title">
                    <img src="{{asset('images/Paquetes-11.png')}}" alt="Imagen4" class="img-precio1 mt-n5">
                  </div>
    
                  <div class="price  d-flex flex-row">
                      <div class="col-sm tarjeta-paquete">
                        <h3 class="texto-principalPlan3 style-text w500 text-center style-text w900 ">MEGAS</h3>
                        <h3 class="texto-secundarioPlan3 style-text w500 text-center style-text W700">PAQ <span class="style-text w900 ">3 MESES</span> </h3>
                      </div>
                  </div>
    
                  <hr class="hr-basico">

                  <ul class="feature-list">
                    <li class="style-text w900 w500 texto-secundarioPlan3">20,000 MB</li>
                    <li class="style-text w900 w500 texto-secundarioPlan3">20,000* <span class="h07">MB velocidad reducida</span></li>
                  </ul>
    
                  <div class="action-button">
                    <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB3 style-text w800">Ir</a>
                  </div>
    
                  <div class="mt-7">
                    <img src="{{asset('images/Paquetes-12.png')}}" alt="Imagen4" class="img-precio1 w-75">
                    <p class="text-uppercase h5 p-2 color-tarjet3 w600">NO PERMITE COMPARTICIÓN DE DATOS*</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="col-lg-9 presp-2 pd-1 p-5">
                <div class="pricing-table text-center feature_item font-color box-shadPlan3" style="position:relative">
                  <span class="tarjet-text3 w900 style-text p-3">SPOT  12M 5000</span>
                  <div class="title">
                    <img src="{{asset('images/Paquetes-11.png')}}" alt="Imagen4" class="img-precio1 mt-n5">
                  </div>
    
                  <div class="price  d-flex flex-row">
                      <div class="col-sm tarjeta-paquete">
                        <h3 class="texto-principalPlan3 style-text w500 text-center style-text w900 ">MEGAS</h3>
                        <h3 class="texto-secundarioPlan3 style-text w500 text-center style-text W700">PAQ <span class="style-text w900 ">6 MESES</span> </h3>
                      </div>
                  </div>
    
                  <hr class="hr-basico">

                  <ul class="feature-list">
                    <li class="style-text w900 w500 texto-secundarioPlan3">20,000 MB</li>
                    <li class="style-text w900 w500 texto-secundarioPlan3">20,000* <span class="h07">MB velocidad reducida</span></li>
                  </ul>
    
                  <div class="action-button">
                    <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB3 style-text w800">Ir</a>
                  </div>
    
                  <div class="mt-7">
                    <img src="{{asset('images/Paquetes-14.png')}}" alt="Imagen4" class="img-precio1 w-75">
                    <p class="text-uppercase h5 p-2 color-tarjet3 w600">Incluye compartición de datos*</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="col-lg-9 presp-2 pd-1 p-5">
                <div class="pricing-table text-center feature_item font-color box-shadPlan3" style="position:relative">
                  <span class="tarjet-text3 w900 style-text p-3">SPOT  12M 5000</span>
                  <div class="title">
                    <img src="{{asset('images/Paquetes-11.png')}}" alt="Imagen4" class="img-precio1 mt-n5">
                  </div>
    
                  <div class="price  d-flex flex-row">
                      <div class="col-sm tarjeta-paquete">
                        <h3 class="texto-principalPlan3 style-text w500 text-center style-text w900 ">MEGAS</h3>
                        <h3 class="texto-secundarioPlan3 style-text w500 text-center style-text W700">PAQ <span class="style-text w900 ">6 MESES</span> </h3>
                      </div>
                  </div>
    
                  <hr class="hr-basico">

                  <ul class="feature-list">
                    <li class="style-text w900 w500 texto-secundarioPlan3">20,000 MB</li>
                    <li class="style-text w900 w500 texto-secundarioPlan3">20,000* <span class="h07">MB velocidad reducida</span></li>
                  </ul>
    
                  <div class="action-button">
                    <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB3 style-text w800">Ir</a>
                  </div>
    
                  <div class="mt-7">
                    <img src="{{asset('images/Paquetes-16.png')}}" alt="Imagen4" class="img-precio1 w-75">
                    <p class="text-uppercase h5 p-2 color-tarjet3 w600">Incluye compartición de datos*</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="col-lg-9 presp-2 pd-1 p-5">
                <div class="pricing-table text-center feature_item font-color box-shadPlan3" style="position:relative">
                  <span class="tarjet-text3 w900 style-text p-3">SPOT  12M 5000</span>
                  <div class="title">
                    <img src="{{asset('images/Paquetes-09.png')}}" alt="Imagen4" class="img-precio1 ">
                  </div>
    
                  <div class="price  d-flex flex-row">
                      <div class="col-sm tarjeta-paquete">
                        <h3 class="texto-principalPlan3 style-text w500 text-center style-text w900 ">MEGAS</h3>
                        <h3 class="texto-secundarioPlan3 style-text w500 text-center style-text W700">PAQ <span class="style-text w900 ">12 MESES</span> </h3>
                      </div>
                  </div>
    
                  <hr class="hr-basico">
    
                  <div class="action-button">
                    <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB3 style-text w800">Ir</a>
                  </div>
    
                  <div class="mt-7">
                    <img src="{{asset('images/Paquetes-13.png')}}" alt="Imagen4" class="img-precio1 w-75">
                    <p class="text-uppercase h5 p-2 color-tarjet3 w600">Incluye compartición de datos*</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="col-lg-9 presp-2 pd-1 p-5">
                <div class="pricing-table text-center feature_item font-color box-shadPlan3" style="position:relative">
                  <span class="tarjet-text3 w900 style-text p-3">SPOT  12M 8000</span>
                  <div class="title">
                    <img src="{{asset('images/Paquetes-10.png')}}" alt="Imagen4" class="img-precio1 ">
                  </div>
    
                  <div class="price  d-flex flex-row">
                      <div class="col-sm tarjeta-paquete">
                        <h3 class="texto-principalPlan3 style-text w500 text-center style-text w900 ">MEGAS</h3>
                        <h3 class="texto-secundarioPlan3 style-text w500 text-center style-text W700">PAQ <span class="style-text w900 ">12 MESES</span> </h3>
                      </div>
                  </div>
    
                  <hr class="hr-basico">
    
                  <div class="action-button">
                    <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB3 style-text w800">Ir</a>
                  </div>
    
                  <div class="mt-7">
                    <img src="{{asset('images/Paquetes-15.png')}}" alt="Imagen4" class="img-precio1 w-75">
                    <p class="text-uppercase h5 p-2 color-tarjet3 w600">Incluye compartición de datos*</p>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="col-lg-9 presp-2 pd-1 p-5">
                <div class="pricing-table text-center feature_item font-color box-shadPlan3" style="position:relative">
                  <span class="tarjet-text3 w900 style-text p-3">SPOT  12M 20000</span>
                  <div class="title">
                    <img src="{{asset('images/Paquetes-11.png')}}" alt="Imagen4" class="img-precio1 ">
                  </div>
    
                  <div class="price  d-flex flex-row">
                      <div class="col-sm tarjeta-paquete">
                        <h3 class="texto-principalPlan3 style-text w500 text-center style-text w900 ">MEGAS</h3>
                        <h3 class="texto-secundarioPlan3 style-text w500 text-center style-text W700">PAQ <span class="style-text w900 ">12 MESES</span> </h3>
                      </div>
                  </div>
    
                  <hr class="hr-basico">
    
                  <ul class="feature-list">
                    <li class="style-text w900 w500 texto-secundarioPlan3">20,000 MB</li>
                    <li class="style-text w900 w500 texto-secundarioPlan3">20,000* <span class="h07">MB velocidad reducida</span></li>
                  </ul>
    
                  <div class="action-button">
                    <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB3 style-text w800">Ir</a>
                  </div>
    
                  <div class="mt-7">
                    <img src="{{asset('images/Paquetes-17.png')}}" alt="Imagen4" class="img-precio1 w-75">
                    <p class="text-uppercase h-1 p-2 color-tarjet3 w600">No permite compartición de datos*</span></p>
                  </div>
                </div>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="col-lg-9 presp-2 pd-1 p-5">
                <div class="pricing-table text-center feature_item font-color box-shadPlan3" style="position:relative">
                  <span class="tarjet-text3 w900 style-text p-3">HOT-SPOT  12M 20000</span>
                  <div class="title">
                    <img src="{{asset('images/Paquetes-11.png')}}" alt="Imagen4" class="img-precio1 mt-n5">
                  </div>
    
                  <div class="price  d-flex flex-row">
                      <div class="col-sm tarjeta-paquete">
                        <h3 class="texto-principalPlan3 style-text w500 text-center style-text w900 ">MEGAS</h3>
                        <h3 class="texto-secundarioPlan3 style-text w500 text-center style-text W700">PAQ <span class="style-text w900 ">12 MESES</span> </h3>
                      </div>
                  </div>
    
                  <hr class="hr-basico">
    
                  <ul class="feature-list">
                    <li class="style-text w900 w500 texto-secundarioPlan3">20,000 MB</li>
                    <li class="style-text w900 w500 texto-secundarioPlan3">20,000* <span class="h07">MB velocidad reducida</span></li>
                  </ul>
    
                  <div class="action-button">
                    <a href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB3 style-text w800">Ir</a>
                  </div>
    
                  <div class="mt-7">
                    <img src="{{asset('images/Paquetes-18.png')}}" alt="Imagen4" class="img-precio1 w-75">
                    <p class="text-uppercase h5 p-2 color-tarjet3 w600">Incluye compartición de datos*</p>
                  </div>
                </div>
              </div>
            </div>
            
          </div>

          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div> 
          <div class="swiper-pagination"></div>
        </div>
      </div>
      <!-- Slider Planes 3 -->

      <hr class="hr-line mt-n2">

      <div class="col-12 p-3">
        <p class="text-center h5 w500 color-terminos">*Consulta Términos y Condiciones aquí Las velocidades comunicadas son Megas (Mbps) y/o Giga (Gbps) y coresponden a la velocidad máxima de transferencia de datos de bajada ofrecida y alcanzable; la velocidad de bajada y subida puede variar. </p>
      </div>
    </div>
  </section>

  <section class="pricing bg-shape">
    <div class="container">
      <div class="row justify-content-center">
        <div>
          <h2 class="style-text w800 text-center mt-n2 color-primario">Nuestros aliados</h2>
        </div>
        <div class="col-sm-2 box-liados">
          <div class="d-flex justify-content-center">
            <div class="p-4 respP-1">
              <img src="{{asset('images/cybolt.png')}}" alt="Cybolt" class="w-100 mt-2 mx-auto">
            </div>
            <div class="p-4 respP-1">
              <img src="{{asset('images/spotuno.png')}}" alt="Spot Uno" class="w-100 mt-2 mx-auto">
            </div>
            <div class="p-4 respP-1">
              <img src="{{asset('images/smart.png')}}" alt="Smart" class="w-100 mt-2 mx-auto">
            </div>
            <div class="p-4 respP-1">
              <img src="{{asset('images/global.png')}}" alt="Global" class="w-100 mt-2 mx-auto">
            </div>
            <div class="p-4 respP-1">
              <img src="{{asset('images/hebe.png')}}" alt="Hebe" class="w-100 mt-2 mx-auto">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- <section class="pricing bg-shape" style="background-color: #f5f5f5;">
    <div class="container">
      <div class="row">
        <div class="col-6">
          <div>
            <div class="d-flex flex-row">
              <img src="{{asset('images/person-pregunta.png')}}" class="mr-5" alt="Preguntas Personas">
            </div>
          </div>
        </div>
        <div class="col d-none d-sm-block d-sm-none d-md-block ">
          <hr class="hrs">
        </div>
        <div class="col-5 mt-3 respCol-10 respMb-3">
          <div>
            <h4 class="w600 color-slogan">Preguntas frecuentes</h4>
            <ul class="list-group mt-5 respMt-1">
              <li class="p-1 style-text w500 mt-5"><i class="fa-solid fa-circle-down p-1 color-quinario h4 cursor-pointer"></i>¿Mi celular es compatible?</li>
              <li class="p-1 style-text w500 mt-5"><i class="fa-solid fa-circle-down p-1 color-quinario h4 cursor-pointer"></i>¿Cómo realizar una recarga?</li>
              <li class="p-1 style-text w500 mt-5"><i class="fa-solid fa-circle-down p-1 color-quinario h4 cursor-pointer"></i>¿Cómo solicitar mi SIM?</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section> -->

  <section class="simple-cta">
    <div>
      <h2 class="style-text w800 text-center mt-n2 color-sextario h3">¿Por qué elegirnos?</h2>
    </div>
    <div class="d-flex justify-content-center respP-1">

        <div class="d-flex flex-row">
          <div class="mt-5">
            <img src="{{asset('images/mejores-paquetes.png')}}" class="w-80" alt="Imagen Paquete">
          </div>
          <div>
            <p class="col-8 p-2">Los mejores paquetes</p>
          </div>
        </div>

        <div class="d-flex flex-row">
          <div class="mt-5">
            <img src="{{asset('images/mejores-precios.png')}}" class="w-80" alt="Imagen Precio">
          </div>
          <div>
            <p class="col-8 p-2">Los mejores precios</p>
          </div>
        </div>

        <div class="d-flex flex-row">
          <div class="mt-5">
            <img src="{{asset('images/mejores-promociones.png')}}" class="w-80" alt="Imagen Promoción">
          </div>
          <div>
            <p class="col-8 p-2">Las mejores promociones</p>
          </div>
        </div>

    </div>
  </section> 

  <section class="m-informacion">
    <div class="d-flex justify-content-lg-center">
      <div class="p-2">
        <a class="h6 h7 text-uppercase nav-informacion style-text w600" href="{{asset('avisoPrivacidad/AvisoDePrivacidadSpot1mobile.pdf')}}" target="_blank">Aviso de privacidad/</a>
      </div>
      <div class="p-2">
        <a class="h6 h7 text-uppercase nav-informacion style-text w600">Terminos y condiciones/</a>
      </div>
      <div class="p-2">
        <a href="{!! URL::to('mapa')!!}" target="_blank" class="h6 h7 text-uppercase nav-informacion style-text w600">Cobertura/</a>
      </div>
      <div class="p-2">
        <a class="h6 h7 text-uppercase nav-informacion style-text w600" href="{{asset('legales/ColaboracionConLaJusticia.pdf')}}" target="_blank">Colaboración con la Justicia</a>
      </div>
    </div>
  </section>
  
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 10,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
        575: {
          slidesPerView: 2,
          spaceBetween: 10,
        },
        // 767: {
        //   slidesPerView: 3,
        //   spaceBetween: 1,
        // },
        1200: {
          slidesPerView: 3,
          spaceBetween: 10
        },
       
      },
    });
  </script>

  <script>

    function planesUno(){
      $('#planes_uno').show(1000);
      $('#planes_dos').hide(1000);
      $('#planes_tres').hide(1000);
    }

    function planesDos(){
      $('#planes_dos').show(1000);
      $('#planes_tres').hide(1000);
      $('#planes_uno').hide(1000);
    }

    function planesTres(){
      $('#planes_tres').show(1000);
      $('#planes_dos').hide(1000);
      $('#planes_uno').hide(1000);
    }

  </script>

  <script>
    $(function() {
  
      var menues = $(".btn-planes"); 

      menues.click(function() {
        menues.removeClass("activeTarj");
        $(this).addClass("activeTarj");
      });

    });
  </script>


@endsection