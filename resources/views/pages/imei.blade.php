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
                    <div class="pt-5 mb-6 mt-3 mt-Rn4">
                        <h1 class="footer-heading h1 color-primario style-text w700 text-center">Revisa si tu equipo es compatible</h1>
                    </div>
                    <div class="h-70 d-flexResp d-flex flex-column justify-content-center text-center p-4 wow zoomIn mt-8 " data-wow-delay="0.6s">
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
                        <form  method="POST" id="dataImei" >

                            <div class="d-none d-sm-block">
                                <div class="d-flex flex-row">
                                    <div class="p-2">
                                        <h3 class="style-text w900 h5">Digita tu código IMEI:</h3>
                                    </div>
                                    <div class="border-imei">
                                        <div class="d-flex flex-row mt-2 " style="padding: 0.3rem;">
                                            <input type="text" id="input1" value="" class="w-1 border-none ml-1 input1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input2.focus()">
                                            <input type="text" id="input2" value="" class="w-1 border-none ml-1 input1"maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input3.focus()">
                                            <input type="text" id="input3" value="" class="w-1 border-none ml-1 input1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input4.focus()">
                                            <input type="text" id="input4" value="" class="w-1 border-none ml-1 input1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input5.focus()">
                                            <input type="text" id="input5" value="" class="w-1 border-none ml-1 input1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input6.focus()">
                                            <input type="text" id="input6" value="" class="w-1 border-none ml-1 input1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input7.focus()">
                                            <input type="text" id="input7" value="" class="w-1 border-none ml-1 input1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input8.focus()">
                                            <input type="text" id="input8" value="" class="w-1 border-none ml-1 input1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input9.focus()">
                                            <input type="text" id="input9" value="" class="w-1 border-none ml-1 input1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input10.focus()">
                                            <input type="text" id="input10" value="" class="w-1 border-none ml-1 input1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input11.focus()">
                                            <input type="text" id="input11" value="" class="w-1 border-none ml-1 input1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input12.focus()">
                                            <input type="text" id="input12" value="" class="w-1 border-none ml-1 input1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input13.focus()">
                                            <input type="text" id="input13" value="" class="w-1 border-none ml-1 input1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input14.focus()">
                                            <input type="text" id="input14" value="" class="w-1 border-none ml-1 input1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) input15.focus()">
                                            <input type="text" id="input15" value="" class="w-1 border-none ml-1 input1" maxlength="1">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{--  Responsivo  --}}
                            <div class="container d-sm-none d-md-block d-md-none d-lg-block d-lg-none d-xl-block d-xl-none">
                                <div class="row">
                                    <div class="col">
                                        <h3 class="style-text w900 h5">Digita tu código IMEI:</h3>
                                    </div>
                                    <div class="w-100"></div>
                                    <div class="col d-flex justify-content-center">
                                    <div class="border-imeiRes">
                                        <div class="d-flex flex-row mt-1 " style="padding: 0.3rem;">
                                            <input type="text" id="inputR1" value="" class="w-1 border-none ml-01 input1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) inputR2.focus()">
                                            <input type="text" id="inputR2" value="" class="w-1 border-none ml-01 input1"maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) inputR3.focus()">
                                            <input type="text" id="inputR3" value="" class="w-1 border-none ml-01 input1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) inputR4.focus()">
                                            <input type="text" id="inputR4" value="" class="w-1 border-none ml-01 input1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) inputR5.focus()">
                                            <input type="text" id="inputR5" value="" class="w-1 border-none ml-01 input1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) inputR6.focus()">
                                            <input type="text" id="inputR6" value="" class="w-1 border-none ml-01 input1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) inputR7.focus()">
                                            <input type="text" id="inputR7" value="" class="w-1 border-none ml-01 input1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) inputR8.focus()">
                                            <input type="text" id="inputR8" value="" class="w-1 border-none ml-01 input1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) inputR9.focus()">
                                            <input type="text" id="inputR9" value="" class="w-1 border-none ml-01 input1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) inputR10.focus()">
                                            <input type="text" id="inputR10" value="" class="w-1 border-none ml-01 input1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) inputR11.focus()">
                                            <input type="text" id="inputR11" value="" class="w-1 border-none ml-01 input1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) inputR12.focus()">
                                            <input type="text" id="inputR12" value="" class="w-1 border-none ml-01 input1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) inputR13.focus()">
                                            <input type="text" id="inputR13" value="" class="w-1 border-none ml-01 input1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) inputR14.focus()">
                                            <input type="text" id="inputR14" value="" class="w-1 border-none ml-01 input1" maxlength="1" onkeyup="if (this.value.length == this.getAttribute('maxlength')) inputR15.focus()">
                                            <input type="text" id="inputR15" value="" class="w-1 border-none ml-01 input1" maxlength="1">
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            {{--  Responsivo  --}}

                            <div class="mt-2 p-3">
                                <button class="btn btn-primary btn-lg active br-radiu w700 style-text w-50" type="button" id="formImei">Validar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal IMEI -->
<div class="modal fade" id="modalImei" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">INFORMACIÓN DEL IMEI <span id="imei"></span></h5>
        <button type="button" class="close closeImei" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <h3 class="mb-3 h3 text-center">Características del Dispositivo</h3>
        <h5 class="mb-2 text-center">Compatible con Banda28: <span id="banda28"></span></h5>
        <h5 class="mb-2 text-center">Marca: <span id="marca"></span></h5>
        <h5 class="mb-2 text-center">Modelo: <span id="modelo"></span></h5>
        <h5 class="mb-2 text-center">VoLTE: <span id="volte"></span></h5>
      </div>
      <div class="modal-body">
        <h3 class="mb-3 h3 text-center">IMEI</h3>
        <h5 class="mb-2 text-center">Bloqueado: <span id="status"></span></h5>
        <h5 class="mb-2 text-center">Homologado: <span id="homologado"></span></h5>
        <h5 class="mb-2 text-center">IMEI: <span id="imeiInfo"></span></h5>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger closeImei" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal IMEI -->

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

<script>
    $('#formImei').click(function() {
        // $('#modalImei').modal('show'); return false;
        var input1 = $('.input1');
        let imeiConcat="";
        for (let i=0; i < input1.length; i++){
            let numberImei = input1[i].value;
            imeiConcat += String(numberImei);

        }
        let imei = imeiConcat;

        if(imei.length != 15){
            Swal.fire({
                icon: 'error',
                title: 'Campos vacíos',
                text: 'Ingresa los 15 digitos de tu IMEI',
            })
        }else {

            let timerInterval
            Swal.fire({
            title: 'Espere un momento',
            html: 'Estamos validando su IMEI.',
            timer: 5500,
            timerProgressBar: true,
            didOpen: () => {
                Swal.showLoading()
                const b = Swal.getHtmlContainer().querySelector('b')
                timerInterval = setInterval(() => {
                b.textContent = Swal.getTimerLeft();
                }, 100)
            },
            willClose: () => {
                clearInterval(timerInterval)
            }
            }).then((result) => {
            /* Read more about handling dismissals below */
            if (result.dismiss === Swal.DismissReason.timer) {
                $.ajax({
                url: "{{ route('imei')}}",
                method: 'GET',
                data:{
                    imei,
                 },
                success: function(data){
                    // console.log(data);
                    // console.log(data.imei)
                    
                    if(data.errorCode == 400){
                        Swal.fire({
                            icon: 'error',
                            title: 'Error 400',
                            text: 'No se encontró información para el IMEI solicitado',
                        })
                    } else{
                        let homologado = data.imei.homologated;
                        let imei = data.imei.imei;
                        let status = data.imei.blocked;
                        let marca = data.deviceFeatures.brand;
                        let modelo = data.deviceFeatures.model;
                        let band28 = data.deviceFeatures.band28;
                        let volTE = data.deviceFeatures.volteCapable;

                        let infoImei = document.getElementById('imei');
                        infoImei.innerHTML = imei;

                        let infoBanda28 = document.getElementById('banda28');
                        infoBanda28.innerHTML = band28;

                        let infoMarca = document.getElementById('marca');
                        infoMarca.innerHTML = marca;

                        let infoModelo = document.getElementById('modelo');
                        infoModelo.innerHTML = modelo;

                        let infoVoltE = document.getElementById('volte');
                        infoVoltE.innerHTML = volTE;

                        let infoStatus = document.getElementById('status');
                        infoStatus.innerHTML = status;

                        let infoHomolago = document.getElementById('homologado');
                        infoHomolago.innerHTML = homologado;

                        let infoImeiInfo = document.getElementById('imeiInfo');
                        infoImeiInfo.innerHTML = imei;
                        $('#modalImei').modal('show');
                    }
                }
            });
        }
            })
        }

    });
</script>

<script>
  $('.closeImei').click(function() {
    $('#modalImei').modal('hide');
  })
</script>

@endsection