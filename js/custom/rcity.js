$(window).scroll(function() {
    if ($(this).scrollTop() > 80 ) {
        $('.scrolltop:hidden').stop(true, true).fadeIn();
    } else {
        $('.scrolltop').stop(true, true).fadeOut();
    }
});
$(function(){$(".scroll").click(function(){$("html,body").animate({scrollTop:$(".thetop").offset().top - 200},"1000");return false})})

$(function(){$(".socialMenuSlide").click(function(){
	$("html,body").animate({scrollTop:$(".thetop").offset().top - 200},"1000");
	$('.off-canvas-wrap').foundation('offcanvas', 'show', 'move-right');	
	return false;
	})
});


$(document).ready(function() {  

	var fixScrollTop = $('.fixScroll').offset().top - 28;

	var fixScroll  = function() { 
		var scrollTop = $(window).scrollTop() + 48;  
		var contentLeft =  $('.card').offset().left;
		var contentWidth = $('.card').width();
		var fixScrollLeft = contentWidth + contentLeft + 50;
	
		if (fixScrollTop < scrollTop) {
			if ($(window).width() > 1024) {
				$('.fixScroll').css({"top":"48px","max-width":"338px","left":fixScrollLeft + "px","position":"fixed"});
			} else {
				$('.fixScroll').css({"top":"","max-width":"100%","left":"","position":"relative"});
			}
		} else {
				$('.fixScroll').css({"top":"","width":"","left":"","position":"relative"});
		}	
	};
	
	$('.fixScroll').css({"top":"auto","position":"relative"});
	
	

	var stickySocial = function() {  

		var stickySocialTop = $('#postSocial').offset().top;	
		var scrollTop = $(window).scrollTop() + 48;  
		var contentLeft =  $('.card').offset().left + 16;
		var contentWidth = $('.card').width(); 


		if (scrollTop > stickySocialTop) {
			// when show top
			$('.socialNext').show();

			if ($(window).width() > 640) {
				// medium screen up when show top
				$('.fixedPostBar').css({"top":"48px","width":contentWidth + "px","left":contentLeft + "px","position":"fixed"});
				$('.whiteBar').css({"margin":""});
				
			} else {
				// small screen when show top
				$('.fixedPostBar').css({"top":"0px","width": "100%","left":"0px","position":"fixed"});
				$('.socialMenuSlide').show();
				$('.whiteBar').css({"margin":"0"});
			}
		} else {  
			// when no show top
			$('.socialNext').hide();
			$('.socialMenuSlide').hide();
			
			$('.fixedPostBar').css({"top":"0px","left":"0px","position":"relative"});
			$('.whiteBar').css({"margin":""});
			
			if ($(window).width() < 640) {
				// small screen when no show top
			}			
		}  
	};  

	if ($("#postSocial")[0]){
		stickySocial();  
	}
	fixScroll();

	$(window).scroll(function() {  
		if ($("#postSocial")[0]){
			stickySocial();  
		}
		fixScroll();

	});

	$(window).resize(function() {  
		if ($("#postSocial")[0]){
			stickySocial(); 
		}
		fixScroll();
	});

 
});  

$(function() {
	if ($("#last")[0]){
		$(window).scroll(function(){
			var distanceTop = $('#last').offset().top - $(window).height();
 
			if  ($(window).scrollTop() > distanceTop)
				$('#slidebox').animate({'right':'0px'},300);
			else
				$('#slidebox').stop(true).animate({'right':'-430px'},100);
		});
 
		$('#slidebox .close').bind('click',function(){
			$(this).parent().remove();
		});
    }
});


