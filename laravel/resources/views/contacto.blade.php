@extends('layout')
@section('style')
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
	<!-- Page Content -->

	<div class="container-contact100">
		<div class="wrap-contact100">
			<div class="contact100-more flex-col-c-m" style="background-image: url('images/bg-01.jpg');">
				<span class="contact100-card-title">
					Oficina Bahía Blanca
				</span>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Llamanos
						</span>

						<span class="txt2">
							(0291) 4546904 / 154755159
						</span>
					</div>
				</div>

				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Dirección
						</span>

						<span class="txt2">
							España 431, Bahia Blanca, Buenos Aires
						</span>
					</div>
				</div>

				<span class="contact100-card-title">
					Oficina Punta Alta
				</span>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Llamanos
						</span>

						<span class="txt2">
							(02932) 421179
						</span>
					</div>
				</div>

				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Dirección
						</span>

						<span class="txt2">
							Humberto Primo 194, Punta Alta, Buenos Aires
						</span>
					</div>
				</div>

				<span class="contact100-card-title">
					Oficina Cnel. Dorrego
				</span>

				<div class="dis-flex size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-phone-handset"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Llamanos
						</span>

						<span class="txt2">
							(0291) 4546904 / 154755159
						</span>
					</div>
				</div>

				<div class="flex-w size1 p-b-47">
					<div class="txt1 p-r-25">
						<span class="lnr lnr-map-marker"></span>
					</div>

					<div class="flex-col size2">
						<span class="txt1 p-b-20">
							Dirección
						</span>

						<span class="txt2">
							Casal Varela 2180, Coronel Dorrego, Buenos Aires
						</span>
					</div>
				</div>

			</div>

			<form class="contact100-form validate-form" method="POST" action="./contacto">
				{{ csrf_field() }}
				<span class="contact100-form-title">
					Contactanos
				</span>
				<div class="txt1-black">
						<span class="lnr lnr-envelope"></span>
						<a href="mailto:abogados@estudiodonato.com.ar">
							abogados@estudiodonato.com.ar
						</a>
				</div>
				<label class="label-input100" for="first-name">Dejanos tu nombre *</label>
				<div class="wrap-input100 rs1-wrap-input100 validate-input" data-validate="Ingrese su nombre">
					<input id="first-name" class="input100" type="text" name="nombre" placeholder="Nombre">

				</div>
				<div class="wrap-input100 rs2-wrap-input100 validate-input" data-validate="Ingrese su apellido">
					<input class="input100" type="text" name="apellido" placeholder="Apellido">

				</div>

				<label class="label-input100" for="email">Mail *</label>
				<div class="wrap-input100 validate-input" data-validate = "Ingrese un mail valido">
					<input id="email" class="input100" type="text" name="email" placeholder="Ej. ejemplo@email.com">

				</div>

				<label class="label-input100" for="phone">Ingrese número de telefono</label>
				<div class="wrap-input100">
					<input id="phone" class="input100" type="text" name="telefono" placeholder="Ej. 291 4123123">

				</div>

				<label class="label-input100" for="message">Mensaje *</label>
				<div class="wrap-input100 validate-input" data-validate = "Se requiere un mensaje">
					<textarea id="message" class="input100" name="mensaje" placeholder="Ingrese su mensaje"></textarea>

				</div>

				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						Enviar mensaje
					</button>
				</div>
			</form>
			<div id="map"></div>
		</div>
		
	</div>

	<script src=js/contacto.js></script>
	<script async defer
    	src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1NEVvUku-j3rt90MdOVQBNNxW7PMlTck&callback=initMap">
	</script>
	<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<!--===============================================================================================-->
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
	<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-23581568-13');
	</script>
@endsection
