@extends('layouts.index')
@section('content')
<section class="pricing bg-shape mt-0">
    <div class="container-fluid bg-secondary booking mb-1 mt-0 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
        {{--  <div class="container pbRecarga">  --}}
            <div class="row gx-5">

                <div class="col-lg-6 pt-5 ">
                    <div class="d-none d-sm-block d-sm-none d-md-block mt-5">
                        <img src="{{asset('images/person.jpg')}}" alt="" class="w-100 mx-auto d-block">
                    </div>
                </div>

                <div class="col-lg-6 pt-5 "><!--py-5-->
                    {{--  <div class="py-5 mt-7">  --}}
                    <div class="pt-5 mb-6 mt-3">
                        <h1 class="footer-heading h1 color-primario style-text w700 text-center">¡Realiza tus Recargas desde la comodidad de tu casa</h1>
                    </div>
                    <div class="h-70 d-flex flex-column justify-content-center text-center p-4 wow zoomIn mt-8 " data-wow-delay="0.6s">
                        {{--  <h3 class="text-black mb-4 text-uppercase">Fácil y Rápido</h3>  --}}
                        <p class="mb-4 text-uppercase color-secundario h6 mt-n2">Ingresa tus datos y paga en línea, evita las molestas filas y hazlo todo desde la comidad de tu casa</p>
                        <form action="{{route('recharges')}}" method="POST" id="formPago">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" class="form-control border-0 color-bajoPrimario" placeholder="Ingresa el número" min="10" max="10" style="height: 55px;" id="numeroTelefono" name="numeroTelefono">
                                </div>
                                <!-- <div class="col-12 col-sm-6">
                                    <input type="email" class="form-control border-0 color-bajoPrimario" placeholder="Your Email" style="height: 55px;">
                                </div> -->
                                <input type="hidden" value="" id="tipoServicioInput" name="tipoServicioInput">
                                <div class="col-12 col-sm-6">
                                    <select id="typeService" class="form-select border-0 color-bajoPrimario" style="height: 55px;">
                                        <option selected disabled value="0">Tipo de Servicio</option>
                                        <option value="MOVIL">Móvil</option>
                                        {{--  <option value="MIFI">MIFI</option>  --}}
                                    </select>
                                </div>

                                <input type="hidden" value="" id="montoRecargaInput" name="montoRecargaInput">
                                <div class="col-12 col-sm-12">
                                <select class="form-select border-0 color-bajoPrimario offers" style="height: 55px;" id="montoRecarga">
                                    <option selected disabled value="0">Monto a Recargar</option>
                                    {{--  @foreach($offers as $offer)
                                      <option value="{{$offer['id']}}">Plan ${{$offer['price_sale']}} {{$offer['name']}}</option>
                                    @endforeach  --}}

                                </select>
                                </div>
                                <!-- <div class="col-12">
                                    <textarea class="form-control border-0" placeholder="Special Request"></textarea>
                                </div> -->
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="button" id="formRecargar">Recargar</button>
                                </div>
                            </div>
                        </form>
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
              <h3 class="text-white style-text w500 display-3 font-duda mb-3">Estamos aquí para ayudarte en cada paso del camino</em></h3>
            </div>
            <div class="header-text mb-n3">
              <button type="button" class="btn btn-light br-radiu-contacto ">Contáctanos</button>
            </div>
          </div>
        </div>     
    </div>
  </section>

  <section class="pricing bg-shape" style="background-color: #f5f5f5;">
    <div class="container">
      <div class="row">
        <div class="col-auto">
          <div>
            <div class="d-flex flex-row responMb-3">
             <h2 class="style-text w800 text-center mt-7 color-primario">Nuestros valores</h2>
            </div>
          </div>
        </div>
        <div class="col d-none d-sm-block d-sm-none d-md-block d-md-none d-lg-block">
          <hr class="hrs1">
        </div>
        <div class="container col-6 mt-3 respCol-10 respMb-3">
          <div class="row">
            <div class="col">
                <ul class="list-group mt-3 respMt-1">
                <li class="style-text w500 "><i class="fa-solid fa-arrow-right h5 p-2 color-quinario"></i></i><span class="color-black w900">S</span>ervicio</li>
                <li class="style-text w500 "><i class="fa-solid fa-arrow-right h5 p-2 color-quinario"></i></i><span class="color-black w900">P</span>rofesionalismo</li>
                <li class="style-text w500 "><i class="fa-solid fa-arrow-right h5 p-2 color-quinario"></i></i><span class="color-black w900">O</span>rientación al cliente</li>
                <li class="style-text w500 "><i class="fa-solid fa-arrow-right h5 p-2 color-quinario"></i></i><span class="color-black w900">T</span>rabajo en equipo</li>
                </ul>
            </div>
            <div class="col">
                <ul class="list-group mt-3 respMt-1">
                <li class="style-text w500 "><i class="fa-solid fa-arrow-right h5 p-2 color-quinario"></i></i><span class="color-black w900">M</span>ejora continua</li>
                <li class="style-text w500 "><i class="fa-solid fa-arrow-right h5 p-2 color-quinario"></i></i><span class="color-black w900">O</span>bjetividad</li>
                <li class="style-text w500 "><i class="fa-solid fa-arrow-right h5 p-2 color-quinario"></i></i><span class="color-black w900">B</span>uen humor</li>
                <li class="style-text w500 "><i class="fa-solid fa-arrow-right h5 p-2 color-quinario"></i></i><span class="color-black w900">I</span>ntegridad</li>
                <li class="style-text w500 "><i class="fa-solid fa-arrow-right h5 p-2 color-quinario"></i></i><span class="color-black w900">L</span>ealtad</li>
                <li class="style-text w500 "><i class="fa-solid fa-arrow-right h5 p-2 color-quinario"></i></i><span class="color-black w900">E</span>xcelencia</li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="simple-ctaRe mb-n12">
    <div class="row">
        <div class="d-flex align-items-center flex-column">
            <div class="tex-center">
                <h2 class="color-octava style-text w900 m-5 text-center text-break texto-conoce font-30 h1">El plan ideal</h2>
            </div>
            <div class="text-center">
                <h2 class="text-white h3 style-text w600 text-center">En SPOT1 MOBILE, encontrarás el plan perfecto para tu estilo de vida.</h2>
            </div>
            <div class="mt-5 p-3 ">
                <a href="{!! URL::to('planes')!!}" class="btn btn-primary btn-lg active br-radiu vr-planes w700 style-text" role="button" aria-pressed="true">Ver planes</a>
              </div>
        </div>
    </div>


    {{--  <div class="mt-4">
      <h2 class="text-white style-text w900 m-5 text-end text-break">Conoce y contrata el mejor servicio de internet en casa</h2>
    </div>  --}}


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

<script>
    $('#numeroTelefono').inputmask("(999) 999-9999");
</script>

<script>
    $('#formRecargar').click(function() {

        var numeroTelefono = $('#numeroTelefono').val();
        var numeroSinParentesis = numeroTelefono.replace(/\((\w+)\)/g, "$1");
        var numeroSinGuion = numeroSinParentesis.replace("-", " ")
        var numeroSinEspacio = numeroSinGuion.replace(/\s+/g, '');

        var tipoServicio = $('#typeService').val();
        var montoRecarga = $('#montoRecarga').val();



        if(numeroSinEspacio == ""){
            return Swal.fire({
                icon: 'error',
                title: 'El número de Teléfono es obligatorio.',
                showConfirmButton: false,
                timer: 2000
            });
        } else if(tipoServicio == null){
            return Swal.fire({
                icon: 'error',
                title: 'Seleccione un Servicio.',
                showConfirmButton: false,
                timer: 2000
            });
        } else if(montoRecarga == null){
            return Swal.fire({
                icon: 'error',
                title: 'Seleccione un Monto a Recargar.',
                showConfirmButton: false,
                timer: 2000
            });
        } else{
            $('#tipoServicioInput').val(tipoServicio);
            $('#montoRecargaInput').val(montoRecarga);

            Swal.fire({
                title: '¿La recarga seleccionada con número '+ numeroSinEspacio +' es correcto?',
                showCancelButton: true,
                confirmButtonText: 'SI, ES CORRECTO',
                confirmButtonColor: '#0a4f97',
                }).then((result) => {

                if (result.isConfirmed) {
                    $('#formPago').submit();
                } else{
                    Swal.fire({
                        icon: 'info',
                        title: 'Operación Cancelada',
                        timer: 2000,
                        showConfirmButton: false
                    });
                }
            });
        }
    });

</script>

<script>
  $('#typeService').change(function(){
    let service = $('#typeService').val();
    let option = "<option value='0'> Monto a Recargar</option>";
    //console.log(service);
    $.ajax({
      url: 'https://apps-ws.spot1.mx/getAllRates',
      data: {service},
      success: function(response){
       // console.log(response); return false;
        let ofertas = response.offers;
        

        ofertas.forEach( function(elements) {
          //console.log(elements); 
          option+="<option value='"+elements.offerID+"' > Plan $"+elements.price_sale+" "+elements.name+"</option>";

       });

        $('.offers').html(option); 
      }
    })
  })
</script>

@endsection