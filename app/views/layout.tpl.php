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

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans|Open+Sans:400,300,600,400italic,700">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="css/main.css">

		<?= $tpl_header; ?>

		<script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	</head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
		
		
		<?= $tpl_content; ?>

		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-12">
						<p>&copy;Copyright 2015 . Paula Castaño</p>
					</div>
				</div>	
			</div>
		</footer>

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
						<button class="btn btn-skin" data-dismiss="modal">Cerrar</button>
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
						<button class="btn btn-skin" data-dismiss="modal">Cerrar</button>
					</div><!-- /modal footer -->

				</div>
			</div>
		</div>


		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		<script src="js/plugins.js"></script>
		
		<?= $tpl_scripts; ?>

		<script src="js/main.js"></script>

        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-61939881-1', 'auto');
          ga('send', 'pageview');

        </script>
	</body>
</html>
