jQuery(function(a){a(document).ajaxStart(function(){a.blockUI({message:'<h4 class="margintop-10 marginbot-10"><i class="fa fa-spinner fa-spin"></i> Espere por favor</h4 class= "nomargin">'})}).ajaxComplete(function(){a.unblockUI()}),(new WOW).init(),a(window).load(function(){a("#navigation").sticky({topSpacing:0})}),jQuery(window).load(function(){jQuery("#preloader").delay(100).fadeOut("slow"),jQuery("#load").delay(100).fadeOut("slow")}),a(function(){a(".navbar-nav li a").bind("click",function(o){var e=a(this);a("html, body").stop().animate({scrollTop:a(e.attr("href")).offset().top},1500,"easeInOutExpo"),o.preventDefault()}),a(".page-scroll a, .btn-scroll").bind("click",function(o){var e=a(this);a("html, body").stop().animate({scrollTop:a(e.attr("href")).offset().top},1500,"easeInOutExpo"),o.preventDefault()})}),a("#art-fusion-gallery").nanoGallery({kind:"flickr",userID:"132809091@N04",thumbnailHoverEffect:[{name:"labelAppear75",duration:400},{name:"descriptionAppear",duration:1e3}],thumbnailLabel:{display:!1,align:"center",position:"overImageOnMiddle"},thumbnailL1Label:{display:!0,align:"center",position:"overImageOnMiddle"},touchAnimationL1:!0,touchAnimation:!1,touchAutoOpenDelay:-1,photoset:"72157658351769278",i18n:{thumbnailImageDescription:"view photo",thumbnailImageDescription_FR:"afficher photo",thumbnailAlbumDescription:"open gallery",thumbnailAlbumDescription_FR:"ouvrir galerie"},locationHash:!1,thumbnailWidth:"auto",viewerDisplayLogo:!0,imageTransition:"slide",colorScheme:"light",backgroundColor:"light",supportIE8:!1,galleryFullpageButton:!1}),a("#paulacastano-gallery").nanoGallery({kind:"flickr",userID:"132809091@N04",thumbnailHoverEffect:[{name:"labelAppear75",duration:400},{name:"descriptionAppear",duration:1e3}],thumbnailLabel:{display:!1,align:"center",position:"overImageOnMiddle"},thumbnailL1Label:{display:!0,align:"center",position:"overImageOnMiddle"},touchAnimationL1:!0,touchAnimation:!1,touchAutoOpenDelay:-1,photoset:"72157656426440974",i18n:{thumbnailImageDescription:"view photo",thumbnailImageDescription_FR:"afficher photo",thumbnailAlbumDescription:"open gallery",thumbnailAlbumDescription_FR:"ouvrir galerie"},locationHash:!1,thumbnailWidth:"auto",viewerDisplayLogo:!0,imageTransition:"slide",colorScheme:"light",backgroundColor:"light",supportIE8:!1,galleryFullpageButton:!1}),a(".parallax").length>0&&a(window).stellar({responsive:!0,scrollProperty:"scroll",parallaxElements:!1,horizontalScrolling:!1,horizontalOffset:0,verticalOffset:0}),a("#contactForm").on("submit",function(o){{var e=a(this);a("#contactFormSubmit")}a.ajax({type:"POST",url:"contact/form",data:e.serialize(),dataType:"json",success:function(o){o.success?(a("#modal-success-msg").html(o.msg),a("#sucessModal").modal("show"),e[0].reset()):(a("#modal-error-msg").html(o.error),a("#errorModal").modal("show"))}}).always(function(){}),o.preventDefault()})});