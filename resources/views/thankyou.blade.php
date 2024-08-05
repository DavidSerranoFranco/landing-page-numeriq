<!-- resources/views/thankyou.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>¡Felicidades por tu Inscripción! NumerIQ Webinar</title>

	<link rel="stylesheet" href="{{ asset('css/thanks-style.css') }}">

	<!-- Box icon CDN -->
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
	<div class="thanks">
		<div class="container">
			<div class="row">
				<div class="col thanks-content">
					<i class='bx bxs-badge-check' class="completed-icon"></i>

					<h2 class="main-heading">
						¡Felicidades por tu Inscripción!
					</h2>
					<p class="para-line">
						¡Enhorabuena! Estás listo para comenzar una tutoría que transformará tu aprendizaje en [tema]. Prepárate para adquirir nuevas habilidades y conocimientos. ¡Nos vemos pronto!
					</p>

					<div class="download-content">
						<h3 class="heading">
							Detalles
						</h3>
						<div class="row download-details">
							<div class="col">
								<h3>Tutoría</h3>
								<p>[Tema]</p>
							</div>
							<div class="col">
								<h3>Lorem Ipsum</h3>
								<p><i class='bx bx-infinite'></i></p>
							</div>
							<div class="col">
								<h3>Nivel Académico</h3>
								<p>[Nivel Académico]</p>
							</div>
							<div class="col">
								<h3>Enlace de la Clase</h3>
								<a class="download-link" href="#">Webinar de [Tema]</a>
							</div>
						</div>
					</div>

					<div class="order-content">
						<h3 class="heading">
							Factura
						</h3>
						<div class="row order-details">
							<div class="col">
								<h3>Producto</h3>
								<h3>Total</h3>
							</div>
							<div class="col">
								<p>[Tema del Webinar] × 1</p>
								<p>$0.00</p>
							</div>
							<div class="col">
								<p>Subtotal:</p>
								<p>$0.00</p>
							</div>
							<div class="col">
								<p>Total:</p>
								<p>$0.00</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col extras-content">
					<img src="{{ asset('images/expositor.jpg') }}" alt="" class="host-img">

					<h3 class="heading">
						Rigoberto Hernandez
					</h3>

					<p class="para-line">
						Gracias por elegir mi tutoría. Estoy emocionado de trabajar contigo y ayudarte a alcanzar tus metas en matemáticas. ¡Nos vemos pronto!</p>

					<button class="btn">
						<a href="{{ url('/') }}">
							Detalles de la Tutoría
						</a>
					</button>

					<div class="separator"></div>

					<h3 class="heading">Síguenos</h3>

					<div class="social-media">
						<i class='bx bxl-facebook-circle'></i>
						<i class='bx bxl-instagram'></i>
						<i class='bx bxl-twitter'></i>
						<i class='bx bxl-linkedin-square'></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
