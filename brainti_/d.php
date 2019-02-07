<?php

$html = '<div id="contenido-curso" class="brainti-desc-curso">
	<div class="sub-cont">
		<div>
			<h3>Descripción del curso</h3>
			<p>HTML ha evolucionado, ofreciendo funcionalidades para esta nueva era de la Web. Aprende lo necesario para desarrollar increibles sitios haciendo uso de estas nuevas funcionalidades.</p>
			<p>Aprenderás a usar herramientas de depuración, bases sólidas de diseño y maquetación Web así como la parte técnica de los navegadores, servidores y todo lo que engloba un sitio Web para entrar a producción.</p>
		</div>
		<div>
			<h3>Extras</h3>
			<ul>
				<li>Ofreceremos cafeteria y snacks sin costo.</li>
			</ul>
		</div>		
		<div>
			<h3>Requerimientos</h3>
			<ul>
				<li>Laptop</li>
			</ul>
		</div>	
		<div class="temario">
			<h3>Temario</h3>
			<ol>
				<li>
					<div>Primera sesión:</div>
					<span>Trabajando con CSS3 en HTML.</span>
				</li>
				<li><div>Segunda sesión</div><span>Posiciones y elementos flotantes, nuestro primer sitio Web, maquetando y creando menús.</span></li>
				<li><div>Tercera sesión</div><span>Formularios, tablas, listas, hipervinculos, imágenes y CSS3.</span></li>
				<li><div>Cuarta sesión</div><span>Menús con subniveles.</span></li>
				<li><div>Quinta sesión</divn><span>Desarrollando nuestra vCard.</span></li>
				<li><div>Sexta sesión</div><span>Semántica en HTML, SEO y ejercicios prácticos.</span></li>
				<li><div>Septima sesión</div><span>Introducción al diseño responsivo con media queries.</span></li>
				<li><div>Octava sesión</div><span>Introducción a las transiciones con CSS3.</span></li>
			</ol>
			<a class="btn-verde" href="#">Descargar temario y bases</a>
		</div>			
	</div>
</div>';

echo $nuevo = htmlentities($html);

?>