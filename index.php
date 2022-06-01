<?php
	
	require ('includes/config.inc.php');
  include_once('includes/soporte.php');

  if (isset($_GET['name'])) {
    $name = $_GET['name'];
  } else {
    $name = '';
  }

  if (isset($_GET['email'])) {
    $email = $_GET['email'];
  } else {
    $email = '';
  }

  if (isset($_GET['phone'])) {
    $phone = $_GET['phone'];
  } else {
    $phone = '';
  }

  if (isset($_GET['comments'])) {
    $comments = $_GET['comments'];
  } else {
    $comments = '';
  }

  if (isset($_GET['errors'])) {

    $errors = unserialize(urldecode($_GET['errors']));
  } else {
    $errors = '';
  }

  if (isset($_GET['msg_contacto'])) {
    $msg_contacto = urldecode($_GET['msg_contacto']);
  } 

?>

<!DOCTYPE html>
<html lang="es">
<head>
	<!-- Tag Manager Head -->
	<?php include_once("./includes/tag_manager_head.php"); ?>
	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Automatización de puertas y portones. Portones corredizos, levadizos, pivotantes. Puertas Sociales. El mejor servicio de Post venta.">
	<title>PPA Buenos Aires</title>

	<!-- Favicons -->
	<?php include('includes/favicon.php'); ?>

	<link rel="stylesheet" type="text/css" href="./node_modules/normalize.css/normalize.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/@fortawesome/fontawesome-free/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="./node_modules/aos/dist/aos.css"/>
	<link rel="stylesheet" type="text/css" href="./node_modules/slick-carousel/slick/slick.css"/>
	<link rel="stylesheet" type="text/css" href="./node_modules/slick-carousel/slick/slick-theme.css"/>
	<link rel="stylesheet" href="./css/app.css">
</head>
<body>
	<!-- Tag Manager Body -->
	<?php include_once("./includes/tag_manager_body.php"); ?>

	<!-- Header -->
	<?php include_once("./includes/header.php"); ?>

	<!-- Contenido HOME -->
	<section class="transition home">

		<!-- Slide -->
		<section class="container-fluid slide">
	  	<div class="row">
		  	<div class="col-md-12 p-0">
		  		
		  		<div id="carouselPpaFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
					  <div class="carousel-inner">

					    <div id="slide-a" class="carousel-item active">
					    	<div class="container-fluid p-0">
					    		<div class="row">
						    		<div class="col-sm-8 col-md-6 content_frase">
								    	<h1 data-aos="fade-up">PPA BUENOS AIRES</h1>
								    	<p data-aos="fade-up">Servicio técnico especializado.</p>
							    	</div>
						    	</div>
					    	</div>
					    </div>

					    <div id="slide-d" class="carousel-item">
					    	<div class="container-fluid p-0">
					    		<div class="row">
						    		<div class="col-sm-8 col-md-6 content_frase">
								    	<h2 data-aos="fade-up">25 AÑOS DE EXPERIENCIA</h2>
								    	<p data-aos="fade-up">La vida es más fácil con un equipo PPA.</p>
					    			</div>
						    	</div>
					    	</div>
					    </div>

					    <div id="slide-c" class="carousel-item">
					    	<div class="container-fluid p-0">
					    		<div class="row">
						    		<div class="col-sm-8 col-md-6 content_frase">
								    	<h2 data-aos="fade-up">SERVICIO PPA</h2>
								    	<p data-aos="fade-up">Un equipo trabajando para vos.</p>
					    			</div>
						    	</div>
					    	</div>
					    </div>

					    <div id="slide-e" class="carousel-item">
					    	<div class="container-fluid p-0">
					    		<div class="row">
						    		<div class="col-sm-8 col-md-6 content_frase">
								    	<h2 data-aos="fade-up">CONFORT & SEGURIDAD</h2>
								    	<p data-aos="fade-up">Tu casa protegida y automatizada.</p>
					    			</div>
						    	</div>
					    	</div>
					    </div>

					    <div id="slide-b" class="carousel-item">
					    	<div class="container-fluid p-0">
					    		<div class="row">
						    		<div class="col-sm-8 col-md-6 content_frase">
								    	<h2 data-aos="fade-up">ULTRA RÁPIDO</h2>
								    	<p data-aos="fade-up">El automatizador más rápido del mercado.</p>
					    			</div>
						    	</div>
					    	</div>
					    </div>					    

					  </div>
					  <button class="carousel-control-prev" type="button" data-bs-target="#carouselPpaFade" data-bs-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="visually-hidden">Previous</span>
					  </button>
					  <button class="carousel-control-next" type="button" data-bs-target="#carouselPpaFade" data-bs-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="visually-hidden">Next</span>
					  </button>
					</div>

		  	</div>
	  	</div>
		</section>
		<!-- Slide end -->

		<!-- Productos -->
		<section class="container productos">
	  	<div class="row">
		  	<div class="col-md-12 content_products">
		  		
		  		<div class="content_icon_product">
		  			<a href="#form-contacto">
			  			<img src="./img/icono-corredizos.png" class="img-fluid" alt="ppa buenos aires corredizos">
			  			<h3>Automatizadores<br>corredizos</h3>
		  			</a>
		  		</div>

		  		<div class="content_icon_product">
		  			<a href="#form-contacto">
		  				<img src="./img/icono-levadizos.png" class="img-fluid" alt="ppa buenos aires levadizos">
		  				<h3>Automatizadores<br>levadizos</h3>
		  			</a>
		  		</div>

		  		<div class="content_icon_product">
		  			<a href="#form-contacto">
		  				<img src="./img/icono-pivotantes.png" class="img-fluid" alt="ppa buenos aires pivotantes">
		  				<h3>Automatizadores<br>pivotantes</h3>
		  			</a>
		  		</div>

		  		<div class="content_icon_product">
		  			<a href="#form-contacto">
		  				<img src="./img/icono-barreras.png" class="img-fluid" alt="ppa buenos aires barreras">
		  				<h3>barreras<br>automáticas</h3>
		  			</a>
		  		</div>

		  		<div class="content_icon_product">
		  			<a href="#form-contacto">
		  				<img src="./img/icono-puertas.png" class="img-fluid" alt="ppa buenos aires puertas">
		  				<h3>puertas<br>automáticas</h3>
		  			</a>
		  		</div>

		  	</div>
	  	</div>
		</section>
		<!-- Productos end -->

		<!-- Galeria -->
		<section data-aos="fade-up" class="container-fluid galeria">
	  	<div class="row">
		  	<div class="col-md-12 p-0">
		  		
		  		<div class="galeria_items">

					  <div>
					  	<img src="./img/galeria-a.jpg" class="img-fluid" alt="ppa buenos aires galeria a">
					  </div>

					  <div>
					  	<img src="./img/galeria-b.jpg" class="img-fluid" alt="ppa buenos aires galeria b">
					  </div>

					  <div>
					  	<img src="./img/galeria-c.jpg" class="img-fluid" alt="ppa buenos aires galeria c">
					  </div>

					  <div>
					  	<img src="./img/galeria-d.jpg" class="img-fluid" alt="ppa buenos aires galeria d">
					  </div>

					  <div>
					  	<img src="./img/galeria-e.jpg" class="img-fluid" alt="ppa buenos aires galeria e">
					  </div>

					  <div>
					  	<img src="./img/galeria-f.jpg" class="img-fluid" alt="ppa buenos aires galeria f">
					  </div>

					  <div>
					  	<img src="./img/galeria-g.jpg" class="img-fluid" alt="ppa buenos aires galeria g">
					  </div>

					  <div>
					  	<img src="./img/galeria-h.jpg" class="img-fluid" alt="ppa buenos aires galeria h">
					  </div>

					</div>

		  	</div>
	  	</div>
		</section>
		<!-- Galeria end -->

		<!-- Formulario -->
		<section class="container formulario">
	  	<div class="row">

	  		<div data-aos="fade-up" class="col-md-12">
	  			<h2>Contactanos</h2>
	  		</div>

	  		<div class="col-md-4 data">
	  			<h3 data-aos="fade-up">PPA BUENOS AIRES</h3>
	  			<h4 data-aos="fade-up">PPA GBA SUR</h4>
	  			<a 
	  				class="transition" 
	  				href="https://api.whatsapp.com/send?phone=+<?= WHATSAPP ?>&text=Hola,%20Necesito%20hacer%20una%20consulta...%20"
	  				rel="noopener" 
	  				target="_blank">
	  				<i data-aos="fade-up" class="transition fa-solid fa-mobile-screen-button"></i><?= WHATSAPP_VISIBLE ?>
	  			</a> <br>
	  			<a class="transition" href="mailto:gbasur@ppabsas.com.ar" rel="noopener" target="_blank">
	  				<i data-aos="fade-up" class="transition fa-solid fa-envelope"></i>gbasur@ppabsas.com.ar
	  			</a>
	  		</div>

		  	<div class="col-md-8 content_form">
	        
	        <!-- Mensaje Exito -->
		      <?php if (isset($msg_contacto)): ?>
		        <div id="msg_contacto" class="alert alert-success alert-dismissible fade show" role="alert">
		          <strong>¡Datos recibidos!</strong>
		          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		          <ul style="padding: 0;">
		              <li>- <?php echo $msg_contacto; ?></li>
		          </ul>
		        </div>
		      <?php endif ?>
		      <!-- Mensaje Exito end -->

		      <!-- Errores Formulario -->
		      <?php if ($errors): ?>

		        <div id="error" class="alert alert-danger alert-dismissible fade show" role="alert">
		          <strong>¡Por favor verificá los datos!</strong>
		          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		          <ul style="padding: 0;">
		            <?php foreach ($errors as $error) { ?>
		              <li>- <?php echo $error; ?></li>
		            <?php } ?>
		          </ul>
		        </div>

		      <?php endif ?>
		      <!-- Errores Formulario end -->

		      <form data-aos="fade-up" id="form-contacto" action="./php/validate-form.php" method="post" class="needs-validation" novalidate>

		        <input name="origin" type="hidden" value="Formulario de Contacto">

		        <!-- Nombre -->
		        <div class="mb-3">
		          <label for="name" class="form-label">Nombre *</label>
		          <input 
		          	required 
		          	type="text" 
		          	class="form-control" 
		          	value="<?= $name ?>" 
		          	placeholder="Juan Rodriguez"
		          	name="name">
		          <div class="invalid-feedback">
		            Ingresá tu nombre
		          </div>
		        </div>

		        <!-- Email -->
		        <div class="mb-3">
		          <label for="email" class="form-label">Email *</label>
		          <input 
		          	required 
		          	type="email" 
		          	class="form-control" 
		          	value="<?= $email ?>" 
		          	placeholder="juan@gmail.com"
		          	name="email">
		          <div class="invalid-feedback">
		            Ingresá tu email
		          </div>
		        </div>

		        <!-- Telefono -->
		        <div class="mb-3">
		          <label for="phone" class="form-label">Teléfono</label>
		          <input 
		          	type="tel" 
		          	class="form-control" 
		          	value="<?= $phone ?>" 
		          	placeholder="11 5044 1234"
		          	name="phone">
		        </div>

		        <!-- Comentarios -->
		        <div class="mb-3">
		          <label for="comments" class="form-label">Comentarios *</label>
		          <textarea 
		          	required 
		          	class="form-control" 
		          	name="comments" rows="3" 
		          	placeholder="Necesito hacer una consulta..."><?= $comments ?></textarea>
		          <div class="invalid-feedback">
		            Ingresá tus comentarios
		          </div>
		        </div>

		        <div class="content_button">
		        	<button type="button" id="send" class="btn btn-primary">
		        		<span id="wait" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
		        		Solicitar información
		        	</button>
		        </div>

		      </form>

		  	</div>

	  	</div>
		</section>
		<!-- Formulario end -->

	</section>
	<!-- Contenido HOME end -->

	<!-- Footer -->
	<?php include_once("./includes/footer.php"); ?>

	<script type="text/javascript" src="./node_modules/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript" src="./node_modules/jquery-easing/dist/jquery.easing.1.3.umd.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js?render=<?= RECAPTCHA_KEY_SITE ?>"></script>
	<script type="text/javascript" src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="./node_modules/aos/dist/aos.js"></script>
	<script type="text/javascript" src="./node_modules/slick-carousel/slick/slick.min.js"></script>
	<script type="text/javascript" src="./js/app.js"></script>
	<script src="js/formsContact.js"></script>

</body>

</html>