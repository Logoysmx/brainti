<?php
require_once dirname(__FILE__).'/brainti_config.php';
?>
<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no">
    <meta property="og:title" content="Cursos de capacitación brainti"/>
    <meta property="og:description" content="Cursos que abarcan un amplio panorama en tecnologías de la información y sus ramas."/>
    <meta property="og:site_name" content="brainti"/>
    <meta property="og:url" content="http://brainti.com"/>
    <meta property="og:type" content="article"/>
    <meta property="og:language" content="ES" />
    <meta property="og:image" content="http://brainti.com/img/braintilogo.png"/>	
	<title><?php echo TITULO; ?></title>
	<link rel="stylesheet" href="<?php echo RUTA_BRAINTI; ?>/css/brainti.css">
	<link rel="stylesheet" href="<?php echo RUTA_BRAINTI; ?>/css/font-awesome/css/font-awesome.min.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script>
	$('body').ready(function(){
		$('.link-instructor').click(function(){
			$('.instructor').slideToggle(200);
		});
	});
	</script>
</head>
<body>
	<header>
		<h1 class="brainti-logo">brainti</h1>
		<nav>
			<ul>
				<li><a href="<?php echo RUTA_BRAINTI; ?>">Home</a></li>
				<li><a href="<?php echo RUTA_BRAINTI; ?>/cursos/">Cursos</a></li>
				<li><a href="<?php echo RUTA_BRAINTI; ?>/inscripcion/" class="btn-seleccionado">Registrate</a></li>
				<li><a href="<?php echo RUTA_BRAINTI; ?>/contacto/">Encuéntranos</a></li>
				<li><a href="<?php echo RUTA_BRAINTI; ?>/login/">Iniciar sesión</a></li>
			</ul>
		</nav>
	</header>