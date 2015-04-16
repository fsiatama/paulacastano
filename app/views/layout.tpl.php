<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="es"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang="es"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang="es"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="es"> <!--<![endif]-->
    <head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">		
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="apple-touch-icon" href="apple-touch-icon.png">

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Muli|Advent+Pro">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?= URL_RAIZ; ?>css/layout.css">

		<?= $tpl_header; ?>

		<script src="<?= URL_RAIZ; ?>js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	</head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		<section id="header" class="appear"></section>
		<div class="navbar navbar-fixed-top" role="navigation">
			 <div class="container">
			 	<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="fa fa-bars"></span>
					</button>
					<h1 class="">
						<a href="<?= URL_RAIZ; ?>" title="Inicio" class="navbar-brand">
							<img src="img/menu-logo.png" alt="Audiomu Inicio">
						</a>
					</h1>
				</div>
				<div class="collapse navbar-collapse">
					<ul class="nav navbar-nav navbar-centered">
						<li><a href="<?= URL_RAIZ; ?>audiomu"><i class="icon-audiomu"></i></a></li>
						<li><a href="<?= URL_RAIZ; ?>musica"><i class="icon-musica"></i></a></li>
						<li><a href="<?= URL_RAIZ; ?>contacto"><i class="icon-contacto"></i></a></li>
						<li><a href="<?= URL_RAIZ; ?>"><i class="icon-blog"></i></a></li>
						<li><a href="<?= URL_RAIZ; ?>terminos"><i class="icon-terminos"></i></a></li>
						<li class="menu-social hidden-xs">
							<a target="_blank" href="https://www.facebook.com/audiomu">
								<i class="fa fa-facebook-square color-blue-faceb"></i>
							</a>
							<a target="_blank" href="https://twitter.com/audiomu"><i class="fa fa-twitter-square "></i></a>
							<a target="_blank" href="http://vimeo.com/audiomu"><i class="fa fa-vimeo-square "></i></a>
							<a target="_blank" href="https://www.youtube.com/channel/UCOHfhddbbt2eYcriZfyi33Q">
								<i class="fa fa-youtube-square "></i>
							</a>
						</li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle navbar-brand" data-toggle="dropdown">
								<img src="img/menu-login.png" alt="Audiomu Login">
							</a>
							<div class="dropdown-menu" style="padding: 15px; padding-bottom: 0px;">
								<form method="post" action="login" accept-charset="UTF-8">
									<input style="margin-bottom: 15px;" type="text" placeholder="Username" id="username" name="username">
									<input style="margin-bottom: 15px;" type="password" placeholder="Password" id="password" name="password">
									<input style="float: left; margin-right: 10px;" type="checkbox" name="remember-me" id="remember-me" value="1">
									<label class="string optional" for="user_remember_me"> Remember me</label>
									<input class="btn btn-primary btn-block" type="submit" id="sign-in" value="Sign In">
									<label style="text-align:center;margin-top:5px">or</label>
									<input class="btn btn-primary btn-block" type="button" id="sign-in-google" value="Sign In with Google">
									<input class="btn btn-primary btn-block" type="button" id="sign-in-twitter" value="Sign In with Twitter">
								</form>
							</div>
						</li>
						<li>
						</li>
					</ul>
				</div><!--/.navbar-collapse -->
			</div>
		</div>

		<!-- Fixed navbar -->
		
		<!-- MIDDLE -->
		<section id="middle">
			<?= $tpl_content; ?>
		</section>
		<!-- /MIDDLE -->

		<!-- FOOTER -->

		<footer>
			<div id="footer" class="section footer">
				<div class="footer-section">
					<div class="container">
						<div class="row animated opacity mar-bot20 mar-top20" data-andown="fadeIn" data-animation="animation">
							<div class="col-sm-12 text-center">
								<ul class="footer-menu-links">
									<li><a href="<?= URL_RAIZ; ?>">Inicio</a></li>
									<li><a href="<?= URL_RAIZ; ?>audiomu">¿Qué es AudioMu?</a></li>
									<li><a href="<?= URL_RAIZ; ?>musica">Música</a></li>
									<li><a href="<?= URL_RAIZ; ?>contacto">Contacto</a></li>
									<li><a href="<?= URL_RAIZ; ?>terminos">Terminos y condiciones</a></li>
								</ul>			
							</div>
						</div>
			
						<div class="row text-center copyright">
								<div class="col-sm-12"><p>&copy; 2014 Audiomu.com &middot;</p></div>
						</div>
					</div>
				</div>
			</div>
			<a href="#header" class="scrollup"><i class="fa fa-chevron-up"></i></a>
		</footer>
		<!-- /FOOTER -->


		<div class="modal fade" id="errorModal" tabindex="-1" role="dialog" aria-labelledby="errorModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">

					<div class="modal-header"><!-- modal header -->
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="errorModalLabel"><i class="fa fa-warning"></i>  Error!</h4>
					</div><!-- /modal header -->

					<!-- modal body -->
					<div class="modal-body">
						<div id="modal-error-msg" class="alert alert-danger margin-bottom0">
						</div>
					</div>
					<!-- /modal body -->

					<div class="modal-footer margin-top0"><!-- modal footer -->
						<button class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div><!-- /modal footer -->

				</div>
			</div>
		</div>

		<div class="modal fade" id="sucessModal" tabindex="-1" role="dialog" aria-labelledby="successModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">

					<div class="modal-header"><!-- modal header -->
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="successModalLabel"><i class="fa fa-check"></i>  Success!</h4>
					</div><!-- /modal header -->

					<div class="modal-body"><!-- modal body -->
						<div id="modal-success-msg" class="alert alert-success margin-bottom0">
						</div>
					</div><!-- /modal body -->

					<div class="modal-footer margin-top0"><!-- modal footer -->
						<button class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div><!-- /modal footer -->

				</div>
			</div>
		</div>

		<div id="defaultModal" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
		  <div class="modal-dialog modal-lg">
		    <div class="modal-content"></div>
		  </div>
		</div>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		<script src="<?= URL_RAIZ; ?>js/plugins.js"></script>
		
		<?= $tpl_scripts; ?>

		<script src="<?= URL_RAIZ; ?>js/main.js"></script>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-17938304-1', 'auto');
          ga('send', 'pageview');

        </script>
	</body>
</html>
