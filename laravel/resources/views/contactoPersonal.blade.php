@extends('layout')

@section('style')
  <link rel="stylesheet" type="text/css" href="css/contactopersonal-style.css">
	<!--===============================================================================================-->
  <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="css/contact-util-style.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="css/contact-main-style.css">
@endsection

@section('body')
<div class="container">
  <!-- Content Row -->
  <div class="row" id="mainContacto">
    <!-- Map Column -->
    <div class="col-lg-4 mb-4">
      <!-- Photo -->
      <img class="rounded-circle img-fluid d-block mx-auto responsive" src="{{$especialista->imagen}}" alt="Foto Abogado">
      <div>
        <h3>{{$especialista->nombre}} {{$especialista->apellido}}</h3>
        <p>
          España 431
          <br>Bahia Blanca, Buenos Aires 8000
          <br>
        </p>
        <p>
          <abbr title="Telefono">Tel</abbr>:{{$especialista->telefono}}
        </p>
        <p>
          <abbr title="Email">Email</abbr>:
          <a href="mailto:name@example.com">{{$especialista->email}}
          </a>
        </p>
        <p>
          <abbr title="Horas">Horario</abbr>: Luners - Viernes: 8:00 a 18:00
        </p>
      </div>
  </div>
    <!-- Contact Details Column -->
    <div class="col-lg-6 mb-4">
      <h3>Dejale tu mensaje</h3>
      <form name="sentMessage" id="contactForm" method="POST" action="./contactopersonal">
        {{ csrf_field() }}
        <div class="control-group form-group">
          <div class="controls">
            <label>Nombre completo: </label>
            <input type="text" class="form-control" id="nombre" name="nombre" required data-validation-required-message="Nombre requerido.">
            <p class="help-block"></p>
          </div>
          <div class="controls">
            <label>Telefono:</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" required data-validation-required-message="Telefono requerido.">
          </div>
        </div>
        <div class="control-group form-group">
          <div class="controls">
            <label>Email:</label>
            <input type="email" class="form-control" id="email" name="email" required data-validation-required-message="Email requerido.">
          </div>
        </div>
        <div class="control-group form-group">
          <div class="controls">
            <label>Mensaje:</label>
            <textarea rows="5" cols="20" class="form-control" id="mensaje" name="mensaje" required data-validation-required-message="Deje su mensaje" maxlength="999" style="resize:none"></textarea>
          </div>
        </div>
        <input type="email" id="emailEspecialista" name="emailEspecialista" value="{{$especialista->email}}" hidden>
        <div id="success"></div>
        <!-- For success/fail messages -->
        <button type="submit" class="btn btn-primary" id="sendMessageButton">Enviar</button>
      </form>
    </div>
  </div>
  <!-- /.row -->

  <!-- Contact Form -->
  <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
  
  <!-- /.row -->

</div>
<!-- /.container -->
<script src=js/contactopersonal.js></script>
@endsection
