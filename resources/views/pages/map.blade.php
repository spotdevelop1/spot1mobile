@extends('layouts.index')
@section('content')
{{--  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.3/dist/leaflet.css" integrity="sha256-kLaT2GOSpHechhsozzB+flnD+zUyjE2LlfWPgU04xyI=" crossorigin="" />  --}}

<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY=" crossorigin="" />



  <section class="pricing bg-shape color-septenario mt-11">
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
  <script src="{{asset('js/leaflet.wms.js')}}"></script>
  <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo=" crossorigin=""></script>

  {{--  <script src="https://unpkg.com/leaflet@1.9.3/dist/leaflet.js" integrity="sha256-WBkoXOwTeyKclOHuWtc+i2uENFpDZ9YPdf5Hf+D7ewM=" crossorigin=""></script>  --}}
  {{--  <script src="{{asset('js/service.js')}}"></script>  --}}
  <script>

    // const map = L.map('mapaAltan');

    // var map = L.map('mapaAltan').setView( [23.0000000,-102.0000000], 6);

    // var nexrad = L.tileLayer.wms("https://geomap.altanredes.com/geoserver/web_altanredes_geoaltan/ows?SERVICE=WMS?&authkey=781c7a49", {
    //   layers: 'Cobertura_Actual',
    //   format: 'image/png',
    //   transparent: true,
    //   attribution: "Weather data © 2012 IEM Nexrad"
    // }).addTo(map);

    // nuevo

        // Create leaflet map.
    var map = new L.Map('mapaAltan').setView([23.0000000,-102.0000000], 6);

    // Create & add OSM layer.
    var osm = new L.TileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png').addTo(map);

    // Create & add WMS-layer.
    var tasmania = new L.TileLayer.WMS('https://geomap.altanredes.com/geoserver/web_altanredes_geoaltan/ows?SERVICE=WMS?&authkey=781c7a49', {
      layers: 'Cobertura_Actual',
      format: 'image/png',
      transparent: true,
      version: '1.3.0',
      crs: L.CRS.EPSG4326
    }).addTo(map);

    // Perform 'GetCapabilities' request.
    
    // tasmania.getCapabilities({
    //   done: function(capabilities) {
    //   console.log('getCapabilitiessucceed: ', capabilities);
    //   },
    //   fail: function(errorThrown) {
    //   console.log('getCapabilitiesfailed: ', errorThrown);
    //   },
    //   always: function() {
    //   console.log('getCapabilitiesfinished');
    //   }
    // });

// Nuevo

  </script>
  


@endsection