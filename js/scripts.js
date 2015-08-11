$(document).ready(function() {
	viewportWidth = null;
	viewportHeight = null;
	navbarHeight = null;

	$(window).on("resize", function(){
		viewportWidth = $(window).width();
		viewportHeight = $(window).height();
		navbarHeight = $('#navbar').height();

		$('.home-featured').height(viewportHeight);

        if (viewportHeight < 700) {
            $('.obra-gallery').height(viewportHeight-96);
            //$('.noticia-gallery').height(viewportHeight-96);
        }
	}).resize();

	$('body').waypoint(function(direction) {
		$('#navbar').toggleClass("compact");
	}, {
		offset: -50
	});

	$('.home-slider').slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		pauseOnHover: false,
		arrows: false,
		easing: 'easeInOutQuad',
		cssEase: 'cubic-bezier(0.800, 0.020, 0.195, 0.960)',
		speed: 1500
	});

	$('.home-scroll').on('click', function() {
		$.smoothScroll({
			scrollElement: $('body').firstScrollable(),
			scrollTarget: '#home-obras',
			easing: 'easeInOutQuad',
			speed: 1000
		});
		return false;
	});

	$("#nav-trigger").click(function() {
		if ( $('body').hasClass('nav-visible') ) {
			$('body').removeClass('nav-visible');
		} else {
			$('body').addClass('nav-visible');
		}
	});

	$(".nav-mobile a").click(function() {
		if ( $('body').hasClass('nav-visible') ) {
			$('body').removeClass('nav-visible');
		} else {
			$('body').addClass('nav-visible');
		}
	});

    $(".video-container").fitVids();



	// NUESTROS SERVICIOS

	$('#servicios-items-load').load('ajax/servicios-items.html', function(){
		$('#servicios-btn-1').click(function(){
			$('#servicios-item-1').addClass('current');
			$('html').css('overflow', 'hidden');
		});
		$('#servicios-btn-2').click(function(){
			$('#servicios-item-2').addClass('current');
			$('html').css('overflow', 'hidden');
		});
		$('#servicios-btn-3').click(function(){
			$('#servicios-item-3').addClass('current');
			$('html').css('overflow', 'hidden');
		});
		$('#servicios-btn-4').click(function(){
			$('#servicios-item-4').addClass('current');
			$('html').css('overflow', 'hidden');
		});
		$('.servicios-back').click(function(){
			$('.servicios-item').removeClass('current');
			$('html').css('overflow', 'auto');
		});
	});


    // AJAX CONTACT FORM
    
    $("#contact-submit").click(function() {
        $('.navbar').removeClass('hidden');
        var proceed = true;
        //simple validation at client's end
        //loop through each field and we simply change border color to red for invalid fields       
        $("#contact-form input[required=true], #contact-form textarea[required=true]").each(function(){
            $(this).css('border-color','');
            if(!$.trim($(this).val())){ //if this field is empty 
                $(this).css('border-color','red'); //change border color to red   
                proceed = false; //set do not proceed flag
            }
            //check invalid email
            var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
                $(this).css('border-color','red'); //change border color to red   
                proceed = false; //set do not proceed flag              
            }
        });

        if(proceed) //everything looks good! proceed...
        {
            //get input field values data to be sent to server
            post_data = {
                'name' : $('input[name=contact-name]').val(),
                'email': $('input[name=contact-email]').val(),
                'msg'  : $('textarea[name=contact-msg]').val()
            };
            
            //Ajax post data to server
            $.post('contact-form.php', post_data, function(response){
                if(response.type == 'error'){ //load json data from server and output message     
                    output = '<div class="error">'+response.text+'</div>';
                }else{
                    output = '<div class="success">'+response.text+'</div>';
                    //reset values in all input fields
                    $("#contact-form input[required=true], #contact-form textarea[required=true]").val('');
                    $("#contact-form .contact-form-body").slideUp(); //hide form after success
                }
                $("#contact-form .contact-form-body").hide().html(output).slideDown();
            }, 'json');
        }
    });

    //reset previously set border colors and hide all message on .keyup()
    $("#contact-form input[required=true], #contact-form textarea[required=true]").keyup(function() {
        $(this).css('border-color','');
        $("#result").slideUp();
    });



    // OCULTAR NAVBAR PARA MOBILE

    /*$('.contact-form input, .contact-form textarea').focus(function() {
        $('.navbar').addClass('hidden');
    }).blur(function(){
        $('.navbar').removeClass('hidden');
    });*/
});

(function($, window, document, undefined) {
    'use strict';

    var gridContainer = $('.cbp-obras'),
        filtersContainer = $('.cbp-obras-filters'),
        wrap, filtersCallback;

    gridContainer.cubeportfolio({
        layoutMode: 'grid',
        rewindNav: true,
        scrollByPage: false,
        defaultFilter: '*',
        animationType: 'scaleSides',
        gapHorizontal: 4,
        gapVertical: 4,
        gridAdjustment: 'responsive',
        mediaQueries: [{
            width: 900,
            cols: 3
        }, {
            width: 500,
            cols: 2
        }, {
            width: 400,
            cols: 1
        }],
        caption: 'zoom',
        displayType: 'sequentially',
        displayTypeSpeed: 100
        }
    );
})(jQuery, window, document);

(function($, window, document, undefined) {
    'use strict';

    var gridContainer = $('.cbp-concursos'),
        filtersContainer = $('.cbp-concursos-filters'),
        wrap, filtersCallback;

    gridContainer.cubeportfolio({
        layoutMode: 'grid',
        rewindNav: true,
        scrollByPage: false,
        defaultFilter: '*',
        animationType: 'scaleSides',
        gapHorizontal: 4,
        gapVertical: 4,
        gridAdjustment: 'responsive',
        mediaQueries: [{
            width: 767,
            cols: 2
        }, {
            width: 766,
            cols: 1
        }],
        caption: 'zoom',
        displayType: 'sequentially',
        displayTypeSpeed: 100
    });
})(jQuery, window, document);

(function($, window, document, undefined) {
    'use strict';

    var gridContainer = $('.cbp-multimedia'),
        filtersContainer = $('.cbp-multimedia-filters'),
        wrap, filtersCallback;

    gridContainer.cubeportfolio({
        layoutMode: 'grid',
        rewindNav: true,
        scrollByPage: false,
        defaultFilter: '*',
        animationType: 'scaleSides',
        gapHorizontal: 4,
        gapVertical: 4,
        gridAdjustment: 'responsive',
        mediaQueries: [{
            width: 767,
            cols: 2
        }, {
            width: 766,
            cols: 1
        }],
        caption: 'zoom',
        displayType: 'sequentially',
        displayTypeSpeed: 100,

        // lightbox
        lightboxDelegate: '.cbp-lightbox',
        lightboxGallery: true,
        lightboxTitleSrc: 'data-title',
        lightboxCounter: '<div class="cbp-popup-lightbox-counter">{{current}} of {{total}}</div>',

        // singlePage popup
        singlePageDelegate: '.cbp-singlePage',
        singlePageDeeplinking: true,
        singlePageStickyNavigation: true,
        singlePageCounter: '<div class="cbp-popup-singlePage-counter">{{current}} of {{total}}</div>',
        singlePageCallback: function(url, element) {
            var t = this;

            $.ajax({
                url: url,
                type: 'GET',
                dataType: 'html',
                timeout: 5000
            })
            .done(function(result) {
                t.updateSinglePage(result);
            })
            .fail(function() {
                t.updateSinglePage("Error! Please refresh the page!");
            });
        },

        // single page inline
        singlePageInlineDelegate: '.cbp-singlePageInline',
        singlePageInlinePosition: 'above',
        singlePageInlineInFocus: true,
        singlePageInlineCallback: function(url, element) {
            // to update singlePage Inline content use the following method: this.updateSinglePageInline(yourContent)
        }
    });
})(jQuery, window, document);