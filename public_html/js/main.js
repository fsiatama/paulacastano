jQuery(function($) {

	$(document).ajaxStart(function(){
		$.blockUI({ message: '<h4 class="margintop-10 marginbot-10"><i class="fa fa-spinner fa-spin"></i> Espere por favor</h4 class= "nomargin">' });
	}).ajaxComplete(function() {
		$.unblockUI();
	});

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
		thumbnailL1Width:'240C xs100C sm100C', thumbnailL1Height:'160C xs100C sm100C',
		thumbnailWidth:'auto', thumbnailHeight:'200 xs80 sm150 la250 xl290',
		viewerDisplayLogo:true,
		photoSorting:'random',
		albumSorting:'random',
		imageTransition : 'slide',
		galleryToolbarWidthAligned:false,
		galleryFullpageButton:true,
		supportIE8: false,
		/**/
	});

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

	$('#contactForm').on('submit', function(event){
		var $form = $(this);
		var $btn = $('#contactFormSubmit');
		//$btn.button('loading');
		$.ajax({
			type:"POST"
			,url:"contact/form"
			,data:$form.serialize()
			,dataType:"json"
			,success:function(data){
				if(data.success){
					$("#modal-success-msg").html(data.msg);
					$('#sucessModal').modal('show');
					$form[0].reset();
				} else {
					$('#modal-error-msg').html(data.error);
					$('#errorModal').modal('show');
				}
			}
		}).always(function(){
			//$btn.button('reset');
		});
	
		event.preventDefault();
	});
});

