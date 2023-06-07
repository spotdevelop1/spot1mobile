@extends('layouts.index')
@section('content')
{{--  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />  --}}

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />
  <section class="pricing bg-shape color-barra-principal">
    <div class="container">
      <div class="row">
        <div class="col-12 mapaAltan" id="mapaAltan">
          <div class="section-title">
          </div>
        </div>     
    </div>
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
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

  {{--  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>  --}}
  {{--  <script src="{{asset('js/service.js')}}"></script>  --}}
  <script>

    const map = L.map('mapaAltan');

    var wmsLayer = L.tileLayer.wms('https://geomap.altanredes.com/geoserver/web_altanredes_geoaltan/ows?SERVICE=WMS?&authkey=781c7a49', {

        layers: 'Cobertura_Actual, Cobertura_20HBB, Cobertura_10HBB, Cobertura_5HBB', 
        format: 'image/png', 
        transparent: true,
        tiled: true,
        attribution: "ALTAN WMS. Cedido por ALTAN REDES"
    }).addTo(map);





    /*var map = L.map('mapaAltan').setView([51.505, -0.09], 13);

    L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; <a href="https://geomap.altanredes.com/geoserver/web_altanredes_geoaltan/ows?SERVICE=WMS?&authkey=781c7a49">OpenStreetMap</a> contributors'
    }).addTo(map);

    L.marker([51.5, -0.09]).addTo(map)
        .bindPopup('A pretty CSS popup.<br> Easily customizable.')
        .openPopup();*/

    

    /*if(document.querySelector('#mapContacto')){

      const lat = 16.760505;
      const lng = -93.108630;
      const zoom = 16;
      
 
      const map = L.map('mapContacto').setView([lat, lng], zoom);
 
      L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      }).addTo(map);
 
      const fontAwesomeIcon = L.divIcon({
           html: '<i class="fa-solid fa-tooth"></i>',
           iconSize: [15, 15],
           className: 'myDivIcon'
       });
 
 
      L.marker([lat, lng], { icon:  fontAwesomeIcon}).addTo(map)
      .bindPopup(`
           <h2 class="mapa__heading">C.D. Christina Moreno Reyes</h2>
           <p class="mapa__texto">Especialista en Ortodoncia</p>
           <p class="mapa__textoEspe">Frente al establecimiento Cochitortas</p>
      `)
      .openPopup();
 }*/
  </script>
  


@endsection