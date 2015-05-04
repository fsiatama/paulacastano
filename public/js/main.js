jQuery(function($) {
	
	new WOW().init();
	
	$(window).load(function(){
	  $("#navigation").sticky({ topSpacing: 0 });
	});

	jQuery(window).load(function() { 
		jQuery("#preloader").delay(100).fadeOut("slow");
		jQuery("#load").delay(100).fadeOut("slow");
	});


	//jQuery for page scrolling feature - requires jQuery Easing plugin
	$(function() {
		$('.navbar-nav li a').bind('click', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1500, 'easeInOutExpo');
			event.preventDefault();
		});
		$('.page-scroll a, .btn-scroll').bind('click', function(event) {
			var $anchor = $(this);
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1500, 'easeInOutExpo');
			event.preventDefault();
		});
	});

	$("#paulacastano-gallery").nanoGallery({
		kind: 'flickr',
		userID: '132809091@N04',
		thumbnailHoverEffect:[{'name':'imageScale150', 'duration':700},{'name':'labelAppear75', 'duration':400},{'name':'descriptionAppear', 'duration':1000}],
		thumbnailLabel:{display:false,align:'center', position:'overImageOnMiddle'},
		thumbnailL1Label:{display:true,align:'center', position:'overImageOnMiddle'},
		touchAnimationL1: true,
		touchAnimation:false,
		touchAutoOpenDelay: -1,
		i18n:{
			thumbnailImageDescription:'view photo', thumbnailImageDescription_FR:'afficher photo',
			thumbnailAlbumDescription:'open gallery', thumbnailAlbumDescription_FR:'ouvrir galerie'
		},
		paginationMaxLinesPerPage:1,
		viewerToolbar: { standard:'minimizeButton,pageCounter,playPauseButton,linkOriginalButton,label', autoMinimize:5000 },
		paginationDots: true,
		breadcrumbAutoHideTopLevel:true,
		locationHash:false,
		/*thumbnailL1Width:'240C xs100C sm100C', thumbnailL1Height:'160C xs100C sm100C',
		thumbnailWidth:'auto', thumbnailHeight:'200 xs80 sm150 la250 xl290',
		viewerDisplayLogo:true,
		photoSorting:'random',
		albumSorting:'random',
		imageTransition : 'slide',
		galleryToolbarWidthAligned:false,
		galleryFullpageButton:true,
		supportIE8: false,
		*/
	});
	
	//owl carousel
	/*$('#owl-works').owlCarousel({
		items : 4,
		itemsDesktop : [1199,5],
		itemsDesktopSmall : [980,5],
		itemsTablet: [768,5],
		itemsTabletSmall: [550,2],
		itemsMobile : [480,2],
	});*/
	
	//nivo lightbox
	/*$('.owl-carousel .item a').nivoLightbox({
		effect: 'fadeScale',                             // The effect to use when showing the lightbox
		theme: 'default',                           // The lightbox theme to use
		keyboardNav: true,                          // Enable/Disable keyboard navigation (left/right/escape)
		clickOverlayToClose: true,                  // If false clicking the "close" button will be the only way to close the lightbox
		onInit: function(){},                       // Callback when lightbox has loaded
		beforeShowLightbox: function(){},           // Callback before the lightbox is shown
		afterShowLightbox: function(lightbox){},    // Callback after the lightbox is shown
		beforeHideLightbox: function(){},           // Callback before the lightbox is hidden
		afterHideLightbox: function(){},            // Callback after the lightbox is hidden
		onPrev: function(element){},                // Callback when the lightbox gallery goes to previous item
		onNext: function(element){},                // Callback when the lightbox gallery goes to next item
		errorMessage: 'The requested content cannot be loaded. Please try again later.' // Error message when content can't be loaded
	});*/
	
	
	//parallax
	if ($('.parallax').length)
	{
		$(window).stellar({
			responsive:true,
			scrollProperty: 'scroll',
			parallaxElements: false,
			horizontalScrolling: false,
			horizontalOffset: 0,
			verticalOffset: 0
		});

	}	

});

