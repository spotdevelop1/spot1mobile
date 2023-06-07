@extends('layouts.index')
@section('content')

<section class="testimonials" id="testimonials">

    <div class="row" style="background-color: #c6e4ff; ">
      <div class="col-lg-12">
        <div class="d-flex justify-content-center">
          <div class="section-heading section-heading__text">
            <h2 class="mb-3 color-text-planes style-text w500">¡Tenemos los mejores planes!</h2>
            <h2><span class="texto-planes style-text w900">¡Obten el que más te guste!</span></h2>
          </div>
        </div>
      </div>
      
      <hr class="hr-line mt-n2">
      
      <!-- Slider Planes 1-->
        <h3 class="text-center p-4 color-text-planes style-text w500">Conoce y disfruta <span class="style-text w900"> nuestras mejores promociones </span></h3>
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
                    <button href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB style-text w800">A TAN SOLO:</button>
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
                    <button href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB style-text w800">A TAN SOLO:</button>
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
                    <button href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB style-text w800">A TAN SOLO:</button>
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
      <!-- Slider Planes 1 -->

      <!-- Slider Planes 2-->
        <h3 class="text-center p-4 color-text-planes style-text w500">Contrata por medio de <span class="style-text w900">pagos anticipados</span></h3>
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
                    <button href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB2 style-text w800">A TAN SOLO:</button>
                  </div>
    
                  <div class="mt-7">
                    <img src="{{asset('images/Paquetes-27.png')}}" alt="Imagen4" class="img-precio1 w-75">
                    <!-- <p class="text-uppercase h5 p-2 color-tarjet w600">Incluye compartición de datos*</p> -->
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
                    <button href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB2 style-text w800">A TAN SOLO:</button>
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
                    <button href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB2 style-text w800">A TAN SOLO:</button>
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
                    <button href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB2 style-text w800">A TAN SOLO:</button>
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
                    <button href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB2 style-text w800">A TAN SOLO:</button>
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
      <!-- Slider Planes 2 -->

      <!-- Slider Planes 3-->
        <h3 class="text-center p-4 color-text-planes style-text w500">¡Tenemos los mejores planes! <span class="style-text w900">¡Obtenen el que más te guste!<span></h3>
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
                    <button href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB3 style-text w800">A TAN SOLO:</button>
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
                    <button href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB3 style-text w800">A TAN SOLO:</button>
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
                    <button href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB3 style-text w800">A TAN SOLO:</button>
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
                    <button href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB3 style-text w800">A TAN SOLO:</button>
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
                    <button href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB3 style-text w800">A TAN SOLO:</button>
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
                    <button href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB3 style-text w800">A TAN SOLO:</button>
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
                    <button href="{!! URL::to('recarga')!!}" class="btn btn-main-rounded btn-priceB3 style-text w800">A TAN SOLO:</button>
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
      <!-- Slider Planes 3 -->

      <hr class="hr-line mt-n2">

      <div class="col-12 p-3">
        <p class="text-center h5 w500 color-terminos">*Consulta Términos y Condiciones aquí Las velocidades comunicadas son Megas (Mbps) y/o Giga (Gbps) y coresponden a la velocidad máxima de transferencia de datos de bajada ofrecida y alcanzable; la velocidad de bajada y subida puede variar. </p>
      </div>
      
        <!-- <div class="col-lg-12">
          <div class="owl-testimonials owl-carousel" style="position: relative; z-index: 5;">
            <div class="item">
              <div class="pricing-table text-center feature_item font-color">
                <div class="title">
                  <h3 class="texto-principal style-text w500">Básico</h3>
                </div>

                <div class="price color-basico d-flex flex-row">
                    <div class="col-sm tarjeta-paquete">
                      <img src="{{asset('images/280.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico">
                    </div>
                    <div class="col-sm mes-paquete">
                      <p class="color-priceB animate__animated animate__heartBeat animate__infinite style-text w400">/ Mes</p>
                    </div> 
                </div>

                <ul class="feature-list">
                  <li class="style-text w500">1 Mb Subida</li>
                  <li class="style-text w500">5 Mb Bajada</li>
                  <li class="style-text w500">Instalación GRATIS</li>
                  <li class="resticciones style-text w200">* aplican restricciones</li>
                  <hr class="hr-basico">
                </ul>
                <div class="action-button">
                  <a href="" class="btn btn-main-rounded btn-priceB style-text w800">¡Lo quiero!</a>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="pricing-table featured text-center font-color">
                <div class="title">
                  <h3 class="texto-principal style-text w500">Ideal</h3>
                </div>

                <div class="price color-ideal d-flex flex-row">
                  <div class="col-sm tarjeta-paquete">
                    <img src="{{asset('images/320.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico">
                  </div>
                  <div class="col-sm mes-paquete">
                    <p class="color-priceB animate__animated animate__heartBeat animate__infinite style-text w400">/ Mes</p>
                  </div> 
                </div>

                <ul class="feature-list">
                  <li class="style-text w500">A2 Mb Subida</li>
                  <li class="style-text w500">10 Mb Bajada</li>
                  <li class="style-text w500">Instalación GRATIS</li>
                  <li class="resticciones style-text w200">* aplican restricciones</li>
                </ul>
                <hr class="hr-ideal">
                <div class="action-button">
                  <a href="" class="btn btn-main-rounded btn-priceI style-text w800">¡Lo quiero!</a>
                </div>
              </div>
            </div>

            <div class="item">
              <div class="pricing-table text-center feature_item font-color">
                <div class="title">
                  <h3 class="texto-principal style-text w500">Plus</h3>
                </div>

                <div class="price color-plus d-flex flex-row">
                  <div class="col-sm tarjeta-paquete">
                    <img src="{{asset('images/360.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico">
                  </div>
                  <div class="col-sm mes-paquete">
                    <p class="color-priceB animate__animated animate__heartBeat animate__infinite style-text w400">/ Mes</p>
                  </div> 
                </div>

                <ul class="feature-list">
                  <li class="style-text w500">5 Mb Subida</li>
                  <li class="style-text w500">15 Mb Bajada</li>
                  <li class="style-text w500">Instalación GRATIS</li>
                  <li class="resticciones style-text w200">* aplican restricciones</li>
                </ul>
                <hr class="hr-plus">
                <div class="action-button">
                  <a href="" class="btn btn-main-rounded btn-priceP style-text w800">¡Lo quiero!</a>
                </div>
              </div>
            </div>

          </div>
        </div>   -->
      

        <!-- <div class="row ps-5" style="justify-content: center;">
          <div class="w-auto">
            <div class="pricing-table text-center feature_item font-color">
              <div class="title">
                <h3 class="texto-principal">Basico</h3>
              </div>

              <div class="price color-basico d-flex flex-row">
                  <div class="col-sm tarjeta-paquete">
                    <img src="{{asset('images/280.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico">
                  </div>
                  <div class="col-sm mes-paquete">
                    <p class="color-priceB animate__animated animate__heartBeat animate__infinite">/ Mes</p>
                  </div> 
              </div>

              <ul class="feature-list">
                <li>1 Mb Subida</li>
                <li>5 Mb Bajada</li>
                <li>Instalación GRATIS</li>
                <li class="resticciones">* aplican restricciones</li>
                <hr class="hr-basico">
              </ul>
              <div class="action-button">
                <a href="https://api.whatsapp.com/send?phone=526144713178&text=Quiero%20saber%20mas%20del%20internet%20de%20spot%20uno%20Plan%20IDEAL" class="btn btn-main-rounded btn-priceB">Adquirir</a>
              </div>
            </div>
          </div>

          <div class="w-auto">
            <div class="pricing-table featured text-center font-color">
              <div class="title">
                <h3 class="texto-principal">Ideal</h3>
              </div>

              <div class="price color-ideal d-flex flex-row">
                <div class="col-sm tarjeta-paquete">
                  <img src="{{asset('images/320.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico">
                </div>
                <div class="col-sm mes-paquete">
                  <p class="color-priceB animate__animated animate__heartBeat animate__infinite">/ Mes</p>
                </div> 
              </div>

              <ul class="feature-list">
                <li>A2 Mb Subida</li>
                <li>10 Mb Bajada</li>
                <li>Instalación GRATIS</li>
                <li class="resticciones">* aplican restricciones</li>
              </ul>
              <hr class="hr-ideal">
              <div class="action-button">
                <a href="https://api.whatsapp.com/send?phone=526144713178&text=Quiero%20saber%20mas%20del%20internet%20de%20spot%20uno%20Plan%20IDEAL" class="btn btn-main-rounded btn-priceI">Adquirir</a>
              </div>
            </div>
          </div>

          <div class="w-auto">
            <div class="pricing-table text-center feature_item font-color">
              <div class="title">
                <h3 class="texto-principal">Plus</h3>
              </div>

              <div class="price color-plus d-flex flex-row">
                <div class="col-sm tarjeta-paquete">
                  <img src="{{asset('images/360.png')}}" alt="Banner secundario" class="w-100 mx-auto d-block img-basico">
                </div>
                <div class="col-sm mes-paquete">
                  <p class="color-priceB animate__animated animate__heartBeat animate__infinite">/ Mes</p>
                </div> 
              </div>

              <ul class="feature-list">
                <li>5 Mb Subida</li>
                <li>15 Mb Bajada</li>
                <li>Instalación GRATIS</li>
                <li class="resticciones">* aplican restricciones</li>
              </ul>
              <hr class="hr-plus">
              <div class="action-button">
                <a href="https://api.whatsapp.com/send?phone=526144713178&text=Quiero%20saber%20mas%20del%20internet%20de%20spot%20uno%20Plan%20IDEAL" class="btn btn-main-rounded btn-priceP">Adquirir</a>
              </div>
            </div>
          </div>
        </div> -->
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
@endsection