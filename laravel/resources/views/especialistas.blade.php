@extends('layout')

@section('style')
   <link rel="stylesheet" type="text/css" href="css/especialistas-style.css">
@endsection

@section('body')
<div class="container">

   <h1 class="my-4" id="seccion-areas">Nuestras Especialidades</h1>

   <!-- Areas -->
   <div class="row">
      @foreach($areas as $nombreArea => $valores)
         <div class="col-lg-4 col-sm-6 portfolio-item">
            <div class="card-body">
               <h4 class="card-title">
                  <div class="btn btn-primary btn-area collapsed text-left" type="button" data-toggle="collapse" data-target="#texto{{$valores['IDArea']}}" aria-expanded="false" aria-controls="texto{{$valores['IDArea']}}">
                     <i class="fa fa-fw fa-chevron-down"></i>
                     <i class="fa fa-fw fa-chevron-right"></i> {{$nombreArea}}
                  </div>
               </h4>
               <div class="collapse" id="texto{{$valores['IDArea']}}">
                  <p class="card-text"> {{$valores['descripcionLarga']}}</p>
                  @foreach($valores['abogados'] as $abogado)
                     <a href="#{{$abogado->apellido}}-{{$abogado->nombre}}" style="text-decoration: none;"> <p class="contactar-profesional">¿Quién es {{$abogado->apellido}}, {{$abogado->nombre}}?</p></a>
                  @endforeach
               </div>
            </div>
         </div>
      @endforeach
   </div>

   <h1 class="my-4" id="seccion-especialistas">Profesionales</h1>

   <!-- Abogados  -->
   <div class="row">
      @foreach($especialistas as $especialista)
         <div class="col-lg-3 col-md-4 col-sm-6 text-center mb-4" id="{{$especialista->apellido}}-{{$especialista->nombre}}">
            <img class="rounded-circle img-fluid d-block mx-auto responsive" src="{{$especialista->imagen}}" alt="Foto Abogado">
            <h3 class="nombre-especialista">{{$especialista->apellido}}, {{$especialista->nombre}}
              <br>
              <small class="rol-especialista">Abogado</small>
           </h3>
           <p>{{$especialista->email}}</p>
           <a class="btn btn-primary btn-contactar-profesional responsive" id="{{$especialista->IDEspecialista}}" type="button" href="./contactopersonal?id={{$especialista->IDEspecialista}}">Contactar</a>
         </div>
      @endforeach
   </div>

</div>
@endsection