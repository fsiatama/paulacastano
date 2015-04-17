<!-- Preloader -->
<div id="preloader">
	<div id="load"></div>
</div>

<!-- Section: intro -->
<section id="intro" class="intro">

	<div class="slogan">
		<a href="index.html"><img src="img/logo.png" alt="" /></a>
	</div>
	<div class="page-scroll">
		<a href="#about">
			<i class="fa fa-angle-down fa-5x animated"></i>
		</a>
	</div>
</section>
<!-- /Section: intro -->

<!-- Navigation -->
<div id="navigation">
	<nav class="navbar navbar-custom" role="navigation">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu">
							<i class="fa fa-bars"></i>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="menu">
						<ul class="nav navbar-nav">
							<li class="active"><a href="#intro"><?= Lang::get('navbar.menu.home'); ?></a></li>
							<li><a href="#about"><?= Lang::get('navbar.menu.about'); ?></a></li>
							<li><a href="#gallery"><?= Lang::get('navbar.menu.gallery'); ?></a></li>
							<li><a href="#contact"><?= Lang::get('navbar.menu.contact'); ?></a></li>
						</ul>
					</div>
					<!-- /.Navbar-collapse -->
				</div>
			</div>
		</div>
		<!-- /.container -->
	</nav>
</div>
<!-- /Navigation -->

<section id="about" class="home-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">

				<div class="section-heading text-center">
					<div class="wow bounceInDown" data-wow-delay="0.2s">
						<h2><?= Lang::get('about.title'); ?></h2>
					</div>
					<p class="wow bounceInUp" data-wow-delay="0.3s"><?= Lang::get('about.subtitle'); ?></p>
				</div>

			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="img/biografia-paula-castano.jpg" class="img-responsive img-rounded center-block" alt="biografia paula castano" />
			</div>
			<div class="col-md-6">
				<p><strong><?= Lang::get('about.phrase1'); ?></strong> <small><?= Lang::get('about.phrase2'); ?></small></p>
				<p>
					<?= Lang::get('about.paragraph1'); ?>
				</p>
				<blockquote>
					<?= Lang::get('about.paragraph2'); ?>
				</blockquote>
				<a href="#gallery" class="btn btn-skin btn-lg btn-scroll"><?= Lang::get('gallery.seeGallery'); ?></a>
			</div>
		</div>
	</div>
</section>
<!-- /Section: about -->

<!-- Section: separator -->
<section id="separator" class="home-section parallax text-center" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="row">
			<div class="col-xs-6 col-sm-3 col-md-3">
				<a href="https://instagram.com/paulacastanoart" target="_blank" class="align-center">
					<div class="icon">
						<i class="fa fa-instagram fa-5x"></i>
					</div>
					<span class="color-white">@paulacastanoart</span>
				</a>
			</div>
			<div class="col-xs-6 col-sm-3 col-md-3">
				<a href="https://www.facebook.com/paula.castano2" target="_blank" class="align-center">
					<div class="icon">
						<i class="fa fa-facebook fa-5x"></i>
					</div>
					<span class="color-white">/paula.castano2</span>
				</a>
			</div>
			<div class="col-xs-6 col-sm-3 col-md-3">
				<a href="https://instagram.com/paulacastanoart" target="_blank" class="align-center">
					<div class="icon">
						<i class="fa fa-flickr fa-5x"></i>
					</div>
					<span class="color-white">@paulacastanoart</span>
				</a>
			</div>
			<div class="col-xs-6 col-sm-3 col-md-3">
				<a href="mailto:" class="align-center">
					<div class="icon">
						<i class="fa fa-envelope-o fa-5x"></i>
					</div>
					<span class="color-white">arte@paulacastano.com</span>
				</a>
			</div>
		</div>
	</div>
</section>
<!-- /Section: separator -->
<!-- Section: gallery -->
<section id="gallery" class="home-section text-center bg-gray">
	<div class="container">
		<div class="row">
			<div class="col-lg-8 col-lg-offset-2">
				<div class="wow bounceInDown" data-wow-delay="0.4s">
				<div class="section-heading">
					<h2>My photo gallery</h2>
					<p>Take a look at my personal moment, enjoy</p>
				</div>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-sm-12 col-md-12 col-lg-12" >
				<div class="wow bounceInUp" data-wow-delay="0.4s">
				<div id="owl-works" class="owl-carousel">
					<div class="item"><a href="img/gallery/1.jpg" title="This is an image title" data-lightbox-gallery="gallery1"><img src="img/gallery/1.jpg" class="img-responsive" alt="img"></a></div>
					<div class="item"><a href="img/gallery/2.jpg" title="This is an image title" data-lightbox-gallery="gallery1"><img src="img/gallery/2.jpg" class="img-responsive " alt="img"></a></div>
					<div class="item"><a href="img/gallery/3.jpg" title="This is an image title" data-lightbox-gallery="gallery1"><img src="img/gallery/3.jpg" class="img-responsive " alt="img"></a></div>
					<div class="item"><a href="img/gallery/4.jpg" title="This is an image title" data-lightbox-gallery="gallery1"><img src="img/gallery/4.jpg" class="img-responsive " alt="img"></a></div>
					<div class="item"><a href="img/gallery/5.jpg" title="This is an image title" data-lightbox-gallery="gallery1"><img src="img/gallery/5.jpg" class="img-responsive " alt="img"></a></div>
					<div class="item"><a href="img/gallery/6.jpg" title="This is an image title" data-lightbox-gallery="gallery1"><img src="img/gallery/6.jpg" class="img-responsive " alt="img"></a></div>
					<div class="item"><a href="img/gallery/7.jpg" title="This is an image title" data-lightbox-gallery="gallery1"><img src="img/gallery/7.jpg" class="img-responsive " alt="img"></a></div>
					<div class="item"><a href="img/gallery/8.jpg" title="This is an image title" data-lightbox-gallery="gallery1"><img src="img/gallery/8.jpg" class="img-responsive " alt="img"></a></div>
				</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Section: services -->

<!-- Section: contact -->
<section id="contact" class="home-section text-center">
	<div class="heading-contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-md-offset-2">

					<div class="section-heading">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<h2>Email or phone are welcome</h2>
					</div>
					<p class="wow lightSpeedIn" data-wow-delay="0.3s">Gentleman, introduce your self and get in touch with me privately</p>
					</div>

				</div>
			</div>
		</div>
	</div>
	<div class="container">

		<div class="row">
			<div class="col-lg-8 col-md-offset-2">
				<div class="form-wrapper marginbot-50">
					<form id="contact-form">
						<div class="row">

							<div class="form-group">
								<label for="name">
									Name</label>
								<input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
							</div>
							<div class="form-group">
								<label for="email">
									Email Address</label>
									<input type="email" class="form-control" id="email" placeholder="Enter email" required="required" />
							</div>
							<div class="form-group">
								<label for="subject">
									Subject</label>
								<select id="subject" name="subject" class="form-control" required="required">
									<option value="na" selected="">Choose One:</option>
									<option value="service">Friendship request</option>
									<option value="suggestions">Wanna marry you</option>
									<option value="product">Prom night invitation</option>
								</select>
							</div>
							<div class="form-group">
								<label for="name">
									Message</label>
								<textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
									placeholder="Message"></textarea>
							</div>
							<button type="submit" class="btn btn-skin btn-block" id="btnContactUs">
								Send Message
							</button>
						</div>
					</form>
				</div>
				<div class="text-center">
					<p class="lead"><i class="fa fa-phone"></i> Call me +1 888 9796 88</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- /Section: contact -->
