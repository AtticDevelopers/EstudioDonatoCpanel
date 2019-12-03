@extends('layout')

@section('style')
<link rel="stylesheet" type="text/css" href="css/historia-style.css">
@endsection


@section('body')
<div class="container">
   <div class="row">
      <div class="col-md-1">
         <ul class="left-slider">
            <li><a href="#inicio" id="li-inicio"> Inicio </a></li>
            <li><a href="#evolucion" id="li-evolucion"> Evolución </a></li>
            <li><a href="#actualidad" id="li-actualidad"> Actualidad </a></li>
         </ul>
      </div>
      <div class="col-md-11 cointainer-secciones">
         <br id=inicio>
         <div class="seccion-texto">
            <h3 class="seccion-titulo">Inicio</h3>
            <img class="img-fluid rounded mb-3 mb-md-0" src="images/antiguo.jpg" alt="">
            <br>
            <p class="seccion-texto--parrafo">
                Nuestro estudio cuenta con una antiguedad de mas de 85 años, fue  fundado en  el  año  1932   en la ciudad de Punta Alta por  <b>Enrique  Antonio  Donato</b>, contador Público  Nacional, constituyendose  asi  en  uno de  los  primeros  estudios jurídico-contables de la zona y representando a gran parte del sector empresario local.
	            Asimismo,  ejerció  la docencia durante un lapso de 30 años en la Escuela Nacional de Comercio de Bahía Blanca, Provincia de Buenos Aires.

	        </p>
            <p class="seccion-texto--parrafo">
                Con posterioridad, en el año 1963 se incorporó el <b>Dr. Enrique Pedro  Donato</b>, abogado, recibido en la Universidad Nacional de La Plata, quien ejerció profesionalmente por más de 50 años en forma ininterrumpida en los Tribunales locales y en Capítal Federal.
	        </p>
            <p class="seccion-texto--parrafo">
                En el año 1964 en la ciudad de Bahia Blanca se abren las puertas del nuevo Estudio Juridico y posteriormente en 1970 se inaugura el Estudio de la localidad de Coronel Dorrego, configurandose como el único de su clase a la fecha con presencia en 3 grandes localidades del sur de la Provincia de Buenos Aires.
            </p>
         </div>
         <hr id="evolucion">
         <div class="seccion-texto">
            <h3 class="seccion-titulo">Evolución</h3>
            <img class="img-fluid rounded mb-3 mb-md-0" src="http://guialacalera.com.ar/wp-content/uploads/2015/06/Estudio-Jur%C3%ADdico-Marcela-In%C3%A9s-Turanzas-Asociados-La-Calera.jpg" alt="">
            <br>
            <p class="seccion-texto--parrafo">
                  El  <b>Dr.  Rodrigo  Donato</b>,  abogado,  se incorporó  al  Estudio  en  el  año  1992,  luego de haberse graduado en la Universidad Nacional de Buenos Aires.
	        </p>
            <p class="seccion-texto--parrafo">
                  Su actividad se encuentra volcada principalmente al Derecho Laboral, Dicha especializacion le ha permitido contar con una experiencia en la tramitacion de innumerables procesos judiciales, como asi tambien afrontar negociaciones entre gremios, cámaras empresarias y organismos publicos.
                En dicha rama del derecho se encuentra altamente capacitado en la reclamacion de daños padecidos en la esfera laboral, ya sea en el reclamo administrativo por ante las administradoras del riesgo de trabajo, o bien por via judicial ante el fracaso de dicha instancia, siempre con la colaboracion del equipo interdisciplinario, con que cuenta el estudio.
            </p>
             <p class="seccion-texto--parrafo">
	              En 1997 se sumó el <b>Dr. Ramiro Donato</b>, abogado, quien se formó en la Universidad Nacional de Buenos Aires, habiéndose especializado en la  orientación económico-empresarial.
            </p>
             <p class="seccion-texto--parrafo">
                  Anteriormente, en Buenos Aires, fue miembro en carácter de asociado  en  el  estudio  Jurídico  "Alvarellos - Costas  & Asoc.", habiendo sido apoderado de varias  compañías  aseguradoras de primer nivel, Bancos y Cámaras empresarias.
            </p>
             <p class="seccion-texto--parrafo">
                  Ejerció la docencia en  los  departamentos de  derecho económico empresarial de las Universidades de Buenos Aires (UBA) y de Ciencias Empresariales y Sociales (UCES).
            </p>
             <p class="seccion-texto--parrafo">
                  Se especializó en la rama del derecho civil y comercial, principalmente en   daños y perjuicios, seguros, contratos, concursos preventivos, sociedades y asesoramiento  jurídico  de  empresas  en general.
            </p>
         </div>
         <hr id="actualidad">
         <div class="seccion-texto">
            <h3 class="seccion-titulo">El estudio hoy</h3>
            <img class="img-fluid rounded mb-3 mb-md-0" src="images/estudio.jpg" alt="">
            <br>
             <p class="seccion-texto--parrafo">
                  En el año 2009, se incorpora la <b>Dra. Rocio Donato</b>, abogada, quien cursó sus estudios en la Universidad Nacional de Buenos Aires.
            </p>
             <p class="seccion-texto--parrafo">
                  En Capital formo parte del estudio juridico  "Alvarellos  & Asoc.", donde ejercia representando a compañias aseguradoras en las etapas de mediacion y judicial.
            </p>
             <p class="seccion-texto--parrafo">
                  Se especializó en el area del Derecho de Familia, la que ejerce en exclusividad ya sea atendiendo Regimen patrimonial del matrimonio, Divorcio, Uniones convivenciales, Responsabilidad parental, Cuidado personal, Regimen de comunicación, Alimentos, Filiacion, Adopción y demás. Por otro lado se ha especializado en derecho de la salud, en el marco del cual ha adquirido gran experiencia en la tramitación de amparo judiciales.
            </p>
             <p class="seccion-texto--parrafo">
                  Por ultimo en año 2012 se incorpora la <b>Dra. Flavia Noelia Rodriguez</b>, abogada, graduada de la Universidad Nacional del Sur, quien además de integrar es staff del estudio, forma parte del plantel legal del Banco Nación de Bahia Blanca, dándole una gran experiencia en lo referido al Derecho Bancario y al manejo de cartera morosa de créditos, entre otras especialidades tales como la defensa del derecho de consumidor. Asimismo se encuentra inscripta en Anses para la tramitacion de reclamos previsionales, ya sea por reajustes, reparación histórica, etc.
            </p>
             <p class="seccion-texto--parrafo">
                  El Estudio Donato cuenta con profesionales especializados en otras ramas  del  derecho, quienes colaboran bajo la modalidad "outsoursing". Tales como Licenciados en Comercio Exterior, Despachante de Aduana, Peritos Accidentologos, Psicólogos, Medicos, Ingenieros, Contadores, Economistas y letrados en otras especialidades tales como derecho penal y tributarios, entre otros, junto a quienes constituidos un verdadero equipo interdisciplinario que nos permite abordar todo tipo de conflictividad juridica con la mas alta capacitación y profesionalismo que el mismo requiera.
            </p>
             <p class="seccion-texto--parrafo">
                  Finalmente, contamos con un eficiente grupo de trabajo, debidamente capacitado, que nos asisten en la busqueda de la excelencia.
            </p>
         </div>
      </div>


   </div>
   <!-- /.row -->

</div>
<!-- /.container -->
@endsection
