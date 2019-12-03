@extends('layout')

@section('style')
<link rel="stylesheet" type="text/css" href="css/inicio-style.css">
@endsection

@section('body')

<header><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
   <div id="carouselExampleIndicators" class="carousel slide" data-pause="false" data-ride="carousel" data-interval="3500">
      <ol class="carousel-indicators">
         <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
         <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
         <!-- Slide One - Set the background image for this slide in the line below -->
         <div class="carousel-item active">
            <img class="d-block w-100 center" src="images/slides/slides4.JPG" alt="First slide">
         </div>
         <!-- Slide Two - Set the background image for this slide in the line below -->
         <div class="carousel-item">
            <img class="d-block w-100 center" src="images/slides/slides2.jpg" alt="Second slide">
         </div>
         <!-- Slide Three - Set the background image for this slide in the line below -->
         <div class="carousel-item">
            <img class="d-block w-100 center" src="images/slides/slides3.jpg" alt="third slide">
         </div>
           <!-- Slide Four - Set the background image for this slide in the line below -->
         <div class="carousel-item">
            <img class="d-block w-100 center" src="images/slides/slides1.jpeg" alt="fourth slide">
         </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="sr-only">Next</span>
      </a>
   </div>
</header>

<!-- Page Content -->
<section class="py-5">
   <div class="container">
      <h1 class="tituloinicio">Nuestros Servicios</h1>
      <p class="copetetitulo">Especialistas en cada una de las areas. Años de trayectoria para su seguridad y confianza.</p>
   </div>
</section>

<div class="container">
   <div class="row">
      @foreach ($areas as $area)
      <div class="col-lg-4 col-sm-6 d-flex align-items-stretch">
         <div class="card servicio">
            <div class="card-body">
               <h3 class="card-title">{{ $area->nombreArea }}</h3>
               <p class="card-text">{{ $area->descripcionCorta}}</p>
               <a href="./especialistas" class="card-link">Más <i class="fas fa-angle-double-right"></i></a>
            </div>
         </div>
      </div>
      @endforeach
   </div>
</div>
@endsection
