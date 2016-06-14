<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Semillero Universitario') | Semillero Universitario</title>
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.css')}}">
</head>
<body>
	<section class="header">
		@yield('header')
	</section>
	<section class="page_foto">
		@include('template.partials.pageFoto')
	</section>
	<section class="content">
		<div class="container text-center">
			<div class="row">
				<section class="contenido">
					<div class="col-sm-9">
						<div class="contenidoPrincipal">
							@yield('contenido')
						</div>
					</div>
				</section>

				<section class="slidebar">
					<div class="col-sm-3">
						@yield('sidebar-opciones')
					</div>
				</section>
			</div>
		</div>
	</section>
	


	<section class="footer">
		<div class="zonaInformacion">
			<section class="container">
				<div class="row">
					<div class="col-md-3">
						<img  src="{{asset('/imagenes/LogoSemilleroUniversitario.png')}}">
					</div>
					<div class="col-xs-6 col-sm-3">
						<span class="glyphicon glyphicon-map-marker" aria-hidden="true">
						</span>
						Carrera 15 Calle 12 Norte
						<br>
						Armenia - Quindío
						<br>
						Piso 1 Bloque Ciencias Básicas
					</div>
					<div class="col-xs-6 col-sm-3">
						<span class="glyphicon glyphicon-phone-alt" aria-hidden="true">
						</span>
						Teléfonos (6) 7359334 y (6) 7359300 Ext 975
						<br>
						<span class="glyphicon glyphicon-earphone" aria-hidden="true">
						</span>
						Celulares 311 362 3634 y 316 250 0119
						<br>
						<span class="glyphicon glyphicon-phone" aria-hidden="true">
						</span>
						WhatsApp 321 851 4205
					</div>
					<div class="col-xs-6 col-sm-3">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true">
							semillero@uniquindio.edu.co
						</span>
						<br>
						<span class="glyphicon glyphicon-envelope" aria-hidden="true">
							preicfes@uniquindio.edu.co
						</span>
					</div>
				</div>
			</section>
		</div>
		<div class="copyright">
			<div class="container text-center">
				<div class="row">
					<div class="col-sm-9">
					</div>
					<div class="login">
						<div class="col-sm-3">
							<a href="#">
								Login
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="{{asset('plugins/jquery/js/jquery-2.2.3.js')}}"></script>
	<script src="{{asset('plugins/bootstrap/js/bootstrap.js')}}"></script>
</body>
</html>