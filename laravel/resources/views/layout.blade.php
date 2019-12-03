<!DOCTYPE html>
<html>
   <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <title>Estudio Donato</title>

      
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

      <!-- Nuestro CSS -->
      <link rel="stylesheet" type="text/css" href="css/main-style.css">

      <link rel="shortcut icon" href="images/favicon.ico">

      @yield('style')

      <!-- Scroll Smooth -->
      <script src="js/smooth-scroll.min.js"></script>

   </head>
   <body>
      <!-- Navigation -->
    @empty ($page)
      @php ($page = "error")
    @endempty
      <nav class="navbar navbar-expand-lg fixed-top">
         <div class="container">
            <a class="navbar-brand" href="./" title="Estudio Jurídico - Donato"><img id="estudioDonatoImg" src=images/logoPrueba7.png alt="Estudio Donato"></a>
            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                     <a class="nav-link  {{$page == "home" ? "current" : ""}}" id="linkinicio" href="./" title="Página principal"><i class="fas fa-home"></i> Inicio
                        <span class="sr-only">(current)</span>
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{$page == "historia" ? "current" : ""}}" id="linkhistoria" href="./historia" title="Información sobre la historia de nuestro estudio"><i class="fas fa-gavel"></i> Estudio</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{$page == "especialistas" ? "current" : ""}}" id="linkespecialistas" href="./especialistas" title="Todos nuestros servicios y especialistas"><i class="fas fa-users"></i> Servicios</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link {{$page == "contacto" ? "current" : ""}}" id="linkcontacto" href="./contacto" title="Medios de contacto"><i class="far fa-envelope"></i> Contacto</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>

      @yield('body')

      <!-- Footer -->
       <footer class="page-footer font-small pt-4">
       <p class="info-text--main text-align: center;"><i class="far fa-envelope"></i>abogados@estudiodonato.com.ar</p>
         <div class="container row text-white">
               <p class="info-text"><i class="fas fa-building"></i>Bahía Blanca</p>
               <p class="info-text"><i class="fas fa-map-marker-alt"></i>España 431</p>
               <p class="info-text"><i class="fas fa-phone"></i>(0291) 4546904 / 154755159</p>
         </div>
         <div class="container row text-white">         
               <p class="info-text"><i class="fas fa-building"></i>Punta Alta</p>
               <p class="info-text"><i class="fas fa-map-marker-alt"></i>Humberto Primo 194</p>
               <p class="info-text"><i class="fas fa-phone"></i>(02932) 421179</p>
         </div>
         <div class="container row text-white">
               <p class="info-text"><i class="fas fa-building"></i>Cnel. Dorrego</p>
               <p class="info-text"><i class="fas fa-map-marker-alt"></i>Casal Varela 2180</p>
               <p class="info-text"><i class="fas fa-phone"></i>(0291) 4546904 / 154755159</p>
         </div>
         <div class="footer-copyright text-center py-3">© 2020 Copyright:
           <a>Attic Dev.</a>
         </div>
      </footer>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
      <script>
         var scroll = new SmoothScroll('a[href*="#"]',{
            header: '.navbar',
            updateURL: false
         });
      </script>      
   </body>
</html>