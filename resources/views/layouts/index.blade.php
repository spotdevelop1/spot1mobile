<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js" integrity="sha512-STof4xm1wgkfm7heWqFJVn58Hm3EtS31XFaagaa8VMReCXAkQnJZ+jEy8PCC/iT18dFy95WcExNHFTqLyp72eQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://rawgit.com/RobinHerbots/jquery.inputmask/3.x/dist/jquery.inputmask.bundle.js"></script>

    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    {{--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />  --}}

    {{--  Tipografía Montserrat  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,700&display=swap" rel="stylesheet">

    <title>SpotUno</title>

    <!-- Bootstrap core CSS -->
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    {{--  font-awesome  --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    {{--  mapa  --}}
    {{--  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />  --}}
    {{--  mapa  --}}

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/templatemo-eduwell-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.css')}}">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="stylesheet" href="{{asset('css/lightbox.css')}}">
<!--

TemplateMo 573 EduWell

https://templatemo.com/tm-573-eduwell

-->
  </head>

<body>


  <!-- ***** Header Area Start ***** -->
  <nav class="header-area header-sticky {{(request () -> is ('recargas') || request () -> is ('pago')) ? 'background-header': ''}}">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="/" class="logo respont-logo">
                        <img class="w-50 ms-0 respMt-0 respW-30 fireMs-0 {{(request () -> is ('recarga', 'planes', 'mapa')) ? 'mt-1': 'mt-5'}}" src="{{asset('images/icono-while.svg')}}" alt="spot1mobile" class="img-logo">
                        {{--  <img class="w-200 mt-n1 ms-3" src="{{asset('images/icono-while.svg')}}" alt="spot1mobile" class="img-logo">  --}}
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li class="{{(request () -> is ('/')) ? 'btn-enalce': ''}}"><a href="/" class="h-color {{(request () -> is ('/')) ? 'active': ''}} style-text">Inicio</a></li>
                        <li class="{{(request () -> is ('recarga')) ? 'btn-enalce': ''}}"><a href="{!! URL::to('recarga')!!}" class="h-color {{(request () -> is ('recarga')) ? 'active': ''}} style-text">Recargas</a></li>
                        <li class="{{(request () -> is ('planes')) ? 'btn-enalce': ''}}"><a href="{!! URL::to('planes')!!}" class="h-color {{(request () -> is ('planes')) ? 'active': ''}} style-text">Paquetes</a></li>
                        <li class="{{(request () -> is ('imei')) ? 'btn-enalce': ''}}"><a href="{!! URL::to('imei')!!}" class="h-color {{(request () -> is ('imei')) ? 'active': ''}} style-text">Imei</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </nav>
  <!-- ***** Header Area End ***** -->

  @yield('content')

  <footer class="contact-us our-office">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
          {{--  <div class="col pt-5">
            <ul class="list-unstyled">
              <li>
                <a href="/" class="logo respont-logo">
                  <img src="{{asset('images/logo.png')}}" alt="EduWell Template" class="img-logoFooter">
                </a>
              </li>
              <li class="mt-5">
                <a href="https://www.facebook.com/spotunochihuahua" target="_blank">
                  <i class="fa-brands fa-facebook h2 text-white"></i>            
                </a>
              </li>
            </ul>
          </div>  --}}
          <div class="col-md-3 col-lg-4 pl-lg-5 mb-4 mb-md-0 col p-4 col-md-foot-3 d-none d-sm-block">
            <h2 class="footer-heading text-uppercase h4 color-primario style-text w700">Contáctanos</h2>
            <hr class="hr-enlaces">
            <ul class="list-unstyled">
                {{--  <li><a href="{!! URL::to('/')!!}" class="py-2 d-block text-white style-text w600">Inicio</a></li>  --}}
                {{--  <li><a href="{!! URL::to('planes')!!}" class="py-2 d-block text-white style-text w600">Paquetes</a></li>  --}}
                {{--  <li><a href="{!! URL::to('recarga')!!}" class="py-2 d-block text-white style-text w600">Pago mensualidad</a></li>  --}}
                <li><p class="text-black style-text w600"><i class="fa-solid fa-envelope p-2"></i>E-mail: soporte@spot1mobile.com</p></li>
                <li><p class="text-black style-text w600"><i class="fa-solid fa-mobile p-2"></i>Teléfono: 614 399 00 92</p></li>
                <!-- <li><p class="text-black style-text w600"><i class="fa-brands fa-square-whatsapp p-2"></i>Whatsapp: 800 000 0990 o +52 961 876 4758</p></li> -->
                <li><p class="text-black style-text w600"><i class="fa-solid fa-map-location p-2"></i>C. José María Bear Alva 2514 col. Barrio de Londres Chihuahua, Chihuahua. C.P. 31060</p></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0 col p-4 mt-5 col-m-foot-6 d-none d-sm-block respCol-lg-3">
            <ul class="list-unstyled">
              <li><a href="{!! URL::to('/')!!}" class="py-2 d-block text-black style-text w600"><i class="fa-solid fa-arrow-right p-2"></i>Inicio</a></li>
              <li><a href="{!! URL::to('planes')!!}" class="py-2 d-block text-black style-text w600"><i class="fa-solid fa-arrow-right p-2"></i>Recargas</a></li>
              <li><a href="{!! URL::to('recarga')!!}" class="py-2 d-block text-black style-text w600"><i class="fa-solid fa-arrow-right p-2"></i>Paquetes</a></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3 pl-lg-5 mb-4 mb-md-0 col p-4 mt-5 col-m-foot-6 d-none d-sm-block respCol-lg-3">
            <ul class="list-unstyled">
              <li><a href="{!! URL::to('legales')!!}" class="py-2 d-block text-black style-text w600"><i class="fa-solid fa-arrow-right p-2"></i>Legales</a></li>
              <li><a href="{!! URL::to('mapa')!!}" class="py-2 d-block text-black style-text w600"><i class="fa-solid fa-arrow-right p-2"></i>Cobertura</a></li>
              <li><a href="{!! URL::to('recarga')!!}" class="py-2 d-block text-black style-text w600"><i class="fa-solid fa-arrow-right p-2"></i>Aviso de Privacidad</a></li>
              <li><a href="{!! URL::to('recarga')!!}" class="py-2 d-block text-black style-text w600"><i class="fa-solid fa-arrow-right p-2"></i>Términos y Condiciones</a></li>
            </ul>
          </div>
        </div>
        </div>

          <!-- Response -->
          <div class=" p-4 d-block d-sm-none">
            <h2 class="footer-heading text-uppercase h4 color-primario style-text w700">Contáctanos</h2>
            <hr class="hr-enlaces">
            <ul class="list-unstyled">
                {{--  <li><a href="{!! URL::to('/')!!}" class="py-2 d-block text-white style-text w600">Inicio</a></li>  --}}
                {{--  <li><a href="{!! URL::to('planes')!!}" class="py-2 d-block text-white style-text w600">Paquetes</a></li>  --}}
                {{--  <li><a href="{!! URL::to('recarga')!!}" class="py-2 d-block text-white style-text w600">Pago mensualidad</a></li>  --}}
                <li><p class="text-black style-text w600"><i class="fa-solid fa-envelope p-2"></i>E-mail: soporte@spot1mobile.com</p></li>
                <li><p class="text-black style-text w600"><i class="fa-solid fa-mobile p-2"></i>Teléfono: 614 399 00 92</p></li>
                <!-- <li><p class="text-white style-text w600"><i class="fa-brands fa-square-whatsapp p-2"></i>Whatsapp: 800 000 0990 o +52 961 876 4758</p></li> -->
                <li><p class="text-black style-text w600"><i class="fa-solid fa-map-location p-2"></i>C. José María Bear Alva 2514 col. Barrio de Londres Chihuahua, Chihuahua. C.P. 31060</p></li>
            </ul>
          </div>

          <div class="p-4 d-sm-none">
            <ul class="list-unstyled">
              <li><a href="{!! URL::to('/')!!}" class="py-2 d-block text-black style-text w600"><i class="fa-solid fa-arrow-right p-2"></i>Inicio</a></li>
              <li><a href="{!! URL::to('planes')!!}" class="py-2 d-block text-black style-text w600"><i class="fa-solid fa-arrow-right p-2"></i>Recargas</a></li>
              <li><a href="{!! URL::to('recarga')!!}" class="py-2 d-block text-black style-text w600"><i class="fa-solid fa-arrow-right p-2"></i>Paquetes</a></li>
            </ul>
          </div>

          <div class="p-4 d-sm-none mb-5">
            <ul class="list-unstyled">
              <li><a href="{!! URL::to('legales')!!}" class="py-2 d-block text-black style-text w600"><i class="fa-solid fa-arrow-right p-2"></i>Legales</a></li>
              <li><a href="{!! URL::to('mapa')!!}" class="py-2 d-block text-black style-text w600"><i class="fa-solid fa-arrow-right p-2"></i>Cobertura</a></li>
              <li><a href="{!! URL::to('recarga')!!}" class="py-2 d-block text-black style-text w600"><i class="fa-solid fa-arrow-right p-2"></i>Aviso de Privacidad</a></li>
              <li><a href="{!! URL::to('recarga')!!}" class="py-2 d-block text-black style-text w600"><i class="fa-solid fa-arrow-right p-2"></i>Términos y Condiciones</a></li>
            </ul>
          </div>
          <!-- Response -->

        <!-- <div class="col-lg-12">
          <p class="copyright">Copyright © 2022 EduWell Co., Ltd. All Rights Reserved.
  
          <br>Design: <a rel="sponsored" href="https://templatemo.com" target="_blank">TemplateMo</a></p>
        </div> -->
      </div>
    </div>
  </footer>

  {{--  BARRA TIPO APP EN RESPONSIVE  --}}
  <nav class="tabbar d-xl-none h-3 d-md-none d-lg-block d-lg-none d-xl-block d-xl-none">
    <div>
      <a href="/">
        <i class="fa-solid fa-house spt-nav"></i>
        <span class="style-text w600 tbbar-texto">Inicio</span>
      </a>
    </div>
  
    <div>
      <a class="btn_especialidades" href="{!! URL::to('recarga')!!}">
        <i class="fa-solid fa-receipt spt-nav" ></i>
        <span class="style-text w600 tbbar-texto">Pago mensualidad</span>
      </a>
    </div>
  
    <div class="whatsapp">
      <a href="/">
          <img src="{{asset('images/logo.png')}}" alt="Up Therapy">
      </a>
    </div>
  
    <div>
      <a class="btn_inovaciones" target="_blank" href="https://www.facebook.com/spotunochihuahua">
        <i class="fa-brands fa-facebook spt-nav"></i>
        <span class="style-text w600 tbbar-texto">Facebook</span>
      </a>
    </div>
  
    <div>
      <a href="{!! URL::to('planes')!!}">
        <i class="fa-solid fa-file spt-nav"></i>
        <span class="style-text w600 tbbar-texto">Paquetes</span>
      </a>
    </div>
  </nav>
  {{--  BARRA TIPO APP EN RESPONSIVE  --}}
  
  <!-- Scripts -->

  {{--  Mapa  --}}
  {{--  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>  --}}
  {{--  Mapa  --}}

  <!-- Bootstrap core JavaScript -->

    <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>

    <script src="{{asset('js/movmin.js')}}"></script>

    <script src="{{asset('js/isotope.min.js')}}"></script>
    <script src="{{asset('js/owl-carousel.js')}}"></script>
    <script src="{{asset('js/lightbox.js')}}"></script>
    <script src="{{asset('js/tabs.js')}}"></script>
    <script src="{{asset('js/video.js')}}"></script>
    <script src="{{asset('js/slick-slider.js')}}"></script>
    <script src="{{asset('js/custom.js')}}"></script>

    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>

</html>