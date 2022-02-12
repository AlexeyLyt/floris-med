$(document).ready(function(){

	$('.menu-mobile-btn').on('click', function(e){
	    e.preventDefault();
	    var $t = $(this);
	    if( $t.hasClass('active') ){
	      $t.removeClass('active');
	      $(document.body).removeClass('show-mobile-menu');
	      $('.overlay-menu').fadeOut();
	    }
	    else{
	      $t.addClass('active');
	      $(document.body).addClass('show-mobile-menu'); 
	      $('.overlay-menu').fadeIn();
	    }
	});

	$('.menu .cl-effect-21').clone().appendTo('.mobile-menu-main-ul');

  	$('.mobile-menu-close').on('click', function(e){
    	e.preventDefault();
    	$('.menu-mobile-btn').trigger('click');
		});
		
		// Кнопка "Вверх"

		$('body').append('<button class="btn_up" />');

		$('.btn_up').click(function(){
			console.log(1);
			$('body').animate({'scrollTop': 0}, 1000);
			$('html').animate({'scrollTop': 0}, 1000);
		});

		// $(window).scroll(function(){

		// });

	function hideShow(){
		var scrollTop = $(document).scrollTop();
			if(scrollTop > 200 && !$(".btn_up").hasClass("active")){
				$(".btn_up").addClass("active");
			}else{
			if(scrollTop < 200 && $(".btn_up").hasClass("active")){
				$(".btn_up").removeClass("active");
			}
		}
	}
	
	$(document).scroll(function(){
			hideShow();
	});
	
	hideShow();

	// Раскрывающееся меню

	$(".main-menu__open-close-mobile-menu").click(function(){
		console.log(1);
        $(this).toggleClass("main-menu__open-close-mobile-menu-open");
        $(".main-menu__mobile-menu").toggleClass("main-menu__mobile-menu-active");
        var scrollMenu = $(window).scrollTop() + "px";
        $(".main-menu__mobile-menu-active").css("top" , 0);
	});
	
	// $(".rist").click(function(){
	// 	var rist = $(".rist");
	// 	if(rist.hasClass("rist-open")){
	// 		rist.removeClass('rist-open');
	// 		$(this).parent().children(".adaptive-menu-top").removeClass("adaptive-menu-top-active");
	// 		$(this).parent().children(".adaptive-menu-top").css("top" , "-250%");
	// 	}else{
	// 		rist.addClass('rist-open');
	// 		$(this).parent().children(".adaptive-menu-top").addClass("adaptive-menu-top-active");
	// 		var scrollMenu = $(window).scrollTop() + "px";
	// 		$(this).parent().children(".adaptive-menu-top-active").css("top" , scrollMenu);
	// 	}
	// });

    $(".main-menu__mobile-menu a").click(function(){
		$(".main-menu__mobile-menu").toggleClass("main-menu__mobile-menu-active");
		$(".main-menu__mobile-menu-active").css("top" , 0);
        $(".main-menu__open-close-mobile-menu").toggleClass("main-menu__open-close-mobile-menu-open");
    });
  
});