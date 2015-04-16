jQuery(function($) {
	$(document).ajaxStart(function(){
		$.blockUI({ message: '<h4 class="margin-top10 margin-bottom10"><i class="fa fa-spinner fa-spin"></i> Espere por favor</h4 class= "nomargin">' });
	}).ajaxComplete(function() {
		$.unblockUI();
	});

	var is_msie = (navigator.appVersion.indexOf("MSIE")!=-1) ? true : false;
	var map;

	if ( $('.scrollup').length > 0 ) {
		$(window).scroll(function(){
			if ($(this).scrollTop() > 100) {
				$('.scrollup').fadeIn();
			} else {
				$('.scrollup').fadeOut();
			}
		});
		
		$('.scrollup').click(function(){
			$("html, body").animate({ scrollTop: 0 }, 1000);
			return false;
		});
	}

	toggle();

	if ( $('#sample-download-modal-btn').length > 0 ) {
		$( '#sample-download-modal-btn' ).click(function() {

			$.ajax({
				type:'POST'
				,url:'samples/form-download'
				,dataType:'json'
				,success:function(data){
					if(data.success){
						
						$("#defaultModal .modal-content").html(data.html);
						$('#defaultModal').modal('show');
					
					} else {
						$('#modal-error-msg').html(data.error);
						$('#errorModal').modal('show');
					}
				}
			}).always(function(){
			});
		  
		});
	}
	if ( $('#audiomu-tutorial-modal-btn').length > 0 ) {
		$( '#audiomu-tutorial-modal-btn' ).click(function() {
			var theModal = $(this).data('target'),
			videoSRC     = 'http://www.youtube.com/embed/yozAaOcddjs',
			videoSRCauto = videoSRC + '?autoplay=1';

			$(theModal + ' iframe').attr('src', videoSRCauto);
			$(theModal + ' button.close').click(function () {
				$(theModal + ' iframe').attr('src', videoSRC);
			});
		});
	}

	if ( $('#contactForm').length > 0 ) {
		
	}
	if ( $('.pageScrollerNav').length > 0 ) {
		// local scroll
		jQuery('.pageScrollerNav, .page-scroll').localScroll({
			hash:true
			,offset:{top: 0}
			,duration: 1200
			,easing:'easeInOutExpo'
		});

		//scroll menu
		jQuery('.appear').appear();
		jQuery(".appear").on("appear", function(data) {
			var id = $(this).closest("section").attr("id");
			jQuery('.pageScrollerNav li').removeClass('active');
			jQuery(".pageScrollerNav a[href='#" + id + "']").parent().addClass("active");					
		});
	}

	if (typeof(soundManager) != "undefined") {
		soundManager.setup({
			// path to directory containing SM2 SWF
			url: 'js/vendor/soundmanager/swf/'
		});

		threeSixtyPlayer.config.scaleFont = (navigator.userAgent.match(/msie/i)?false:true);
		threeSixtyPlayer.config.showHMSTime = true;

		// enable some spectrum stuffs
		threeSixtyPlayer.config.useWaveformData = true;
		threeSixtyPlayer.config.useEQData = true;

		// enable this in SM2 as well, as needed
		if (threeSixtyPlayer.config.useWaveformData) {
		  soundManager.flash9Options.useWaveformData = true;
		}
		if (threeSixtyPlayer.config.useEQData) {
		  soundManager.flash9Options.useEQData = true;
		}
		if (threeSixtyPlayer.config.usePeakData) {
		  soundManager.flash9Options.usePeakData = true;
		}
		if (threeSixtyPlayer.config.useWaveformData || threeSixtyPlayer.flash9Options.useEQData || threeSixtyPlayer.flash9Options.usePeakData) {
		  // even if HTML5 supports MP3, prefer flash so the visualization features can be used.
		  soundManager.preferFlash = true;
		}
		// favicon is expensive CPU-wise, but can be used.
		if (window.location.href.match(/hifi/i)) {
		  threeSixtyPlayer.config.useFavIcon = true;
		}
		if (window.location.href.match(/html5/i)) {
		  // for testing IE 9, etc.
		  soundManager.useHTML5Audio = true;
		}
	}

});

function toggle() {

	var $_t = this,
		previewParClosedHeight = 25;

	jQuery("div.toggle.active > p").addClass("preview-active");
	jQuery("div.toggle.active > div.toggle-content").slideDown(400);
	jQuery("div.toggle > label").click(function(e) {

		var parentSection 	= jQuery(this).parent(),
			parentWrapper 	= jQuery(this).parents("div.toogle"),
			previewPar 		= false,
			isAccordion 	= parentWrapper.hasClass("toogle-accordion");

		if(isAccordion && typeof(e.originalEvent) != "undefined") {
			parentWrapper.find("div.toggle.active > label").trigger("click");
		}

		parentSection.toggleClass("active");

		if(parentSection.find("> p").get(0)) {

			previewPar 					= parentSection.find("> p");
			var previewParCurrentHeight = previewPar.css("height");
			var previewParAnimateHeight = previewPar.css("height");
			previewPar.css("height", "auto");
			previewPar.css("height", previewParCurrentHeight);

		}

		var toggleContent = parentSection.find("> div.toggle-content");

		if(parentSection.hasClass("active")) {

			jQuery(previewPar).animate({height: previewParAnimateHeight}, 350, function() {jQuery(this).addClass("preview-active");});
			toggleContent.slideDown(350);

		} else {

			jQuery(previewPar).animate({height: previewParClosedHeight}, 350, function() {jQuery(this).removeClass("preview-active");});
			toggleContent.slideUp(350);

		}

	});
}

