@extends('layouts.index')
@section('content')
<section class="pricing bg-shape mt-0">
    <div class="container-fluid bg-secondary booking mb-1 mt-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 pt-5 ">
                    <div class="mt-5">
                        <img src="{{asset('images/imei-person.jpg')}}" alt="" class="w-100 mx-auto d-block">
                    </div>
                </div>

                <div class="col-lg-6 pt-5 ">
                    <div class="pt-5 mb-6 mt-3">
                        <h1 class="footer-heading h1 color-primario style-text w700 text-center">Revisa si tu equipo es compatible</h1>
                    </div>
                    <div class="h-70 d-flex flex-column justify-content-center text-center p-4 wow zoomIn mt-8 " data-wow-delay="0.6s">
                        <p class="mb-4 text-uppercase color-secundario h6 mt-n2">Para poder revisarlo, es necesario que obtengas el código IMEI de tu móvil</p>
                        <div class="d-flex justify-content-center">
                            <div class="p-3 ">
                                <img src="{{asset('images/digito.png')}}" alt="" class="w-25 mx-auto d-block">
                                <h3 class="font-07 p-1 color-secundario Morganite-ExtraBoldItalic w700">Abre la marcación de tu teléfono</h3>
                            </div>
                            <div class="p-3 ">
                                <img src="{{asset('images/numero.png')}}" alt="" class="w-75 mx-auto d-block">
                                <h3 class="font-07 mt-4 p-2 color-secundario Morganite-ExtraBoldItalic w700">Abre la marcación de tu teléfono *#06# </h3>
                            </div>
                            <div class="p-3 ">
                                <img src="{{asset('images/imei-primario.png')}}" alt="" class="w-75 mx-auto d-block">
                                <h3 class="font-07 mt-4 p-3 color-secundario Morganite-ExtraBoldItalic w700">Ahora tienes tu IMEI</h3>
                            </div>
                            <div class="p-3 ">
                                <img src="{{asset('images/imei-secundario.png')}}" alt="" class="w-75 mx-auto d-block">
                                <h3 class="font-07 p-1 color-secundario Morganite-ExtraBoldItalic w700">Ingresa tu código IMEI</h3>
                            </div>
                        </div>
                        <form action="{{route('recharges')}}" method="POST" id="formPago" class="d-none d-sm-block">
                            <div class="d-flex flex-row">
                                <div class="p-2">
                                    <h3 class="style-text w900 h5">Digita tu código IMEI:</h3>
                                </div>
                                <div class="border-imei">
                                    <div class="d-flex flex-row mt-1 " style="padding: 0.3rem;">
                                        <input type="text" name="" id="" class="w-1 border-none ml-1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input2.focus()">
                                        <input type="text" id="input2" name="" id="" class="w-1 border-none ml-1"maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input3.focus()">
                                        <input type="text" id="input3" name="" id="" class="w-1 border-none ml-1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input4.focus()">
                                        <input type="text" id="input4" name="" id="" class="w-1 border-none ml-1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input5.focus()">
                                        <input type="text" id="input5" name="" id="" class="w-1 border-none ml-1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input6.focus()">
                                        <input type="text" id="input6" name="" id="" class="w-1 border-none ml-1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input7.focus()">
                                        <input type="text" id="input7" name="" id="" class="w-1 border-none ml-1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input8.focus()">
                                        <input type="text" id="input8" name="" id="" class="w-1 border-none ml-1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input9.focus()">
                                        <input type="text" id="input9" name="" id="" class="w-1 border-none ml-1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input10.focus()">
                                        <input type="text" id="input10" name="" id="" class="w-1 border-none ml-1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input11.focus()">
                                        <input type="text" id="input11" name="" id="" class="w-1 border-none ml-1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input12.focus()">
                                        <input type="text" id="input12" name="" id="" class="w-1 border-none ml-1" maxlength="1">
                                    </div>
                                </div>
                            </div>
                        </form>

                        {{--  Responsivo  --}}
                        <form action="{{route('recharges')}}" method="POST" id="formPago" class="d-sm-none d-md-block d-md-none d-lg-block d-lg-none d-xl-block d-xl-none">
                            <div class="container">
                                <div class="row">
                                    <div class="col">
                                    <h3 class="style-text w900 h5">Digita tu código IMEI:</h3>
    
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col">
                                    <div class="border-imeiRes">
                                        <div class="d-flex flex-row mt-1 " style="padding: 0.3rem;">
                                            <input type="text" name="" id="" class="w-1 border-none ml-1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input2r.focus()">
                                            <input type="text" id="input2r" name="" id="" class="w-1 border-none ml-1"maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input3r.focus()">
                                            <input type="text" id="input3r" name="" id="" class="w-1 border-none ml-1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input4r.focus()">
                                            <input type="text" id="input4r" name="" id="" class="w-1 border-none ml-1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input5r.focus()">
                                            <input type="text" id="input5r" name="" id="" class="w-1 border-none ml-1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input6r.focus()">
                                            <input type="text" id="input6r" name="" id="" class="w-1 border-none ml-1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input7r.focus()">
                                            <input type="text" id="input7r" name="" id="" class="w-1 border-none ml-1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input8r.focus()">
                                            <input type="text" id="input8r" name="" id="" class="w-1 border-none ml-1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input9r.focus()">
                                            <input type="text" id="input9r" name="" id="" class="w-1 border-none ml-1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input10r.focus()">
                                            <input type="text" id="input10r" name="" id="" class="w-1 border-none ml-1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input11r.focus()">
                                            <input type="text" id="input11r" name="" id="" class="w-1 border-none ml-1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input12r.focus()">
                                            <input type="text" id="input12r" name="" id="" class="w-1 border-none ml-1" maxlength="1">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                            {{--  Responsivo  --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

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

  </section>

  <section class="m-informacion">
    <div class="d-flex justify-content-lg-center">
      <div class="p-2">
        <a class="h6 text-uppercase nav-informacion style-text w600">Aviso de privacidad/</a>
      </div>
      <div class="p-2">
        <a class="h6 text-uppercase nav-informacion style-text w600">Terminos y condiciones/</a>
      </div>
      <div class="p-2">
        <a class="h6 text-uppercase nav-informacion style-text w600">Cobertura/</a>
      </div>
      <div class="p-2">
        <a class="h6 text-uppercase nav-informacion style-text w600">Legales</a>
      </div>
    </div>
  </section>



@endsection