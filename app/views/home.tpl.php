<?php

$html_samples = '';

foreach($arrSamples as $key => $data){
	$html_samples .= '
		<div class="ui360 ui360-vis float-none">
			<a href="samples/mp3/'.$data["samples_archivo"].'">&nbsp;</a>
			Sample '.$data["samples_id"].'<!-- - '.$data["samples_nombre"].'-->
		</div>
	';
}

?>


<div id="nav" class="pageScrollerNav standardNav hidden-xs hidden-sm">
	<ul>
		<li class="active"><a href="#section-intro">&nbsp;</a></li>
		<li><a href="#section-about">&nbsp;</a></li>
		<li><a href="#section-contact">&nbsp;</a></li>
		<li><a href="#section-terms">&nbsp;</a></li>
	</ul>
</div>
<section id="section-intro" class="section intro clearfix text-center appear">
	<div class="intro-body">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<img class="mar-top10" alt="Audiomu Logo" src="img/logo-home.png">
					<h3 class="mar-top30 mar-bot30"><span class="txt-light">MÚSICA QUE ACOMPAÑA</span> TUS GRANDES IDEAS</h3>

					<div class="page-scroll">
						<p class="margin0">
							<a class="link-slogan color-white" href="#section-about">
								continua hacia abajo y descubre más<br/>sobre nosotros<br/><img alt="" src="img/btn-arrow-white.png">
							</a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- about -->
<section id="section-about" class="section clearfix text-center">
	<div class="about-section">
		<div class="container">
			<div class="row">
				<div class="col-xs-10 col-xs-offset-1">
					<p class="text-center">
						Queremos contarte algo muy importante, aquí encontrarás música 
						para acompañar tus proyectos audiovisuales y creativos y la podrás usar a 
						través de una de nuestras Licencias, 
						haz click en el link de música que encuentras en la barra 
						superior para conocer los tipos de Licencias y precios.
					</p>
					<p class="text-center">
						O si quieres más información sobre AudioMu <a href="<?= URL_RAIZ; ?>audiomu" class="">haz click aquí</a>
						o en el enlace de arriba
					</p>
				</div>
			</div><!-- row -->
			<div class="row mar-top20">
				<div class="col-sm-4 col-md-offset-1">
					<div class="embed-responsive embed-responsive-16by9">
						<iframe class="embed-responsive-item" src="http://www.youtube.com/embed/yuCUMAg2Qpc" frameborder="0" allowfullscreen></iframe>
					</div>
				</div>
				<div class="col-sm-2">
					<h3 class="align-center">&nbsp;
						<img alt="" class="img-responsive center-block" src="img/audiomu-music.png">
					</h3>
				</div>
				<div class="col-sm-4">
					<p class="text-left">
						Sí eres músico y quieres unirte a nuestra comunidad, 
						promocionar y generar ingresos con tus obras
					</p>
					<p class="text-left">
						<strong>preinscríbete para ser parte<br/>de los pioneros</strong>
					</p>
					<p class="text-left page-scroll appear">
						<a href="<?= URL_RAIZ; ?>contacto" class="btn btn-warning btn-large">
							<strong>¡Contactenos!</strong>
						</a>
					</p>
				</div>
			</div><!-- row -->
		</div>
	</div>
</section>
<!-- music -->
<section id="section-music" class="section clearfix text-center">
	<div class="music-section">
		
	</div>
</section>
<!-- contact -->
<section id="section-contact" class="section clearfix text-center">
	<div class="contact-section">
		<div class="container">
			<div class="row mar-top20">
			<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">
				<h3 class="align-center">&nbsp;
					<img alt="" class="" src="img/audiomu-contact.png">
				</h3>
			</div>
			<div class="col-lg-2 col-md-2 hidden-xs hidden-sm appear">
				<h3 class="align-center">&nbsp;
					<img alt="" class="" src="img/audiomu-separator-vert-left.png">
				</h3>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
				<h3 class="orange mar-bot0">
					Queremos invitarte<br/>a descargar
				</h3>
				<h1 class="">
					Una muestra<br/>de samples<br/>musicales gratis
				</h1>
				<p class="mar-bot0">
					Y para que los puedas usar, solo necesitas experimentar con nosotros el
					trámite de una licencia y obvio,
				</p>
				<p class="soft-orange">
					<strong>cualquier comentario sobre cómo te fue, es más que bienvenido.</strong>
				</p>
			</div>
			</div><!-- row -->
		</div>
	</div>
</section>
<!-- terms -->
<section id="section-terms" class="section clearfix text-center">
	<div class="terms-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-md-offset-3 hidden-xs hidden-sm">
					<p class="align-center">
						<img alt="" class="" src="img/audiomu-separator-hrz-blue-lg.png">
					</p>
				</div>
				<div class="col-md-8 col-md-offset-2">
					<div id="sm2-container">
						<!-- sm2 flash goes here -->
					</div>
					<div class="center-block">
						<div class="sm2-inline-list">
							<?= $html_samples; ?>
						</div>
					</div>
				</div>
				<div class="col-md-6 col-md-offset-3 hidden-xs hidden-sm">
					<p class="align-center mar-top20">
						<img alt="" class="" src="img/audiomu-separator-hrz-blue-lg-down.png">
					</p>
				</div>
			</div>
			<div class="row mar-top20">
			<div class="col-md-6 col-md-offset-3">
				<p class="mar-top20 dark-blue appear">
					Estos son los samples para que los escuches y los descargues con 
					sus respectivas licencias, son una variedad interesante y algo de 
					lo que será nuestra página en un futuro
				</p>
				<p class="">
					<button id="audiomu-tutorial-modal-btn" type="button" data-toggle="modal" data-target="#audiomu-tutorial-modal" class="btn btn-link">
						<i class="fa fa-play"></i> <strong>Video Tutorial</strong>
					</button>
				</p>
				<p>
					<button id="sample-download-modal-btn" type="button" class="btn btn-info btn-lg">
						<i class="fa fa-download"></i> <strong>Descargar</strong>
					</button>
				</p>
				<h4 class="mar-top20 soft-blue">
					si quieres oír las canciones completas ingresa aquí
				</h4>
				<p class="">
					<a href="<?= URL_RAIZ; ?>musica" class="btn btn-warning btn-lg">
						<i class="fa fa-music"></i> <strong>Música</strong>
					</a>
				</p>
				<h2 class="mar-top20 dark-blue">
					Acuérdate que los samples estarán<br>solo por tiempo limitado
				</h2>
				<h2>
					<span class="bg-orange pad-side10">así que aprovecha.</span>
				</h2>
				<p class="align-center mar-top40">
					<img alt="" class="" src="img/audiomu-separator-hrz-blue.png">
				</p>
				 <p class="link-slogan dark-blue">
					MÁS ADELANTE CONTAREMOS CON<br>MÁS TIPOS DE LICENCIAS,
					<br><strong>MÁS MÚSICA</strong><br>Y MÁS CONTENIDO
				</p>
				<p class="align-center">
					<img alt="" class="" src="img/audiomu-separator-hrz-blue-down.png">
				</p>
				<p class="link-slogan orange">
					GRACIAS POR VISITARNOS.
				</p>
				<p class="align-center mar-top40">
					<img alt="" class="" src="img/audiomu-cow.png">
				</p>
			</div>
			</div><!-- row -->
		</div>
	</div>
</section>


<!-- Modal -->
<div class="modal fade" id="audiomu-tutorial-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Tutorial para descargar samples en AudioMu</h4>
      </div>
      <div class="modal-body">
      	<div class="embed-responsive embed-responsive-16by9">
      		<iframe src=""></iframe>
      	</div>
      </div>
      <div class="modal-footer margin-top0"><!-- modal footer -->
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>