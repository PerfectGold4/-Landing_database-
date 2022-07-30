$(function(){

	window.onbeforeunload = function () {
	  window.scrollTo(0, 0);
	}

	$('p', '#fourth').fadeOut();
	$('img', '#fourth').fadeOut();
	$(window).scroll(function(){
			if($(window).scrollTop()>350){
				$('p', '#fourth').fadeIn(800);
				$('img', '#fourth').fadeIn(800);
			}
		})

	$(document).ready(function(){
		$('#hidden_2,#hidden_3,.fin_hid,#hidden_1').css({'visibility':'hidden'})
	})
	$('#one').click(function(){
		$('#hidden_1').css({'visibility':'visible'})
		$('main').css({'filter':'brightness(40%)'})
		$('html, body').css({overflow: 'hidden'})
	});
	$('#two').click(function(){
		$('#hidden_2').css({'visibility':'visible'})
		$('main').css({'filter':'brightness(40%)'})
		$('html, body').css({overflow: 'hidden'})
	});
	$('#three').click(function(){
		$('#hidden_3').css({'visibility':'visible'})
		$('main').css({'filter':'brightness(40%)'})
		$('html, body').css({overflow: 'hidden'})
	});
	$('#for_h_1').click(function(){
		$('#hidden_1').css({'visibility':'hidden'})
		$('main').css({'filter':'brightness(100%)'})
		$('html, body').css({overflow: 'auto'})
	});
	$('#for_h_2').click(function(){
		$('#hidden_2').css({'visibility':'hidden'})
		$('main').css({'filter':'brightness(100%)'})
		$('html, body').css({overflow: 'auto'})
	});
	$('#for_h_3').click(function(){
		$('#hidden_3').css({'visibility':'hidden'})
		$('main').css({'filter':'brightness(100%)'})
		$('html, body').css({overflow: 'auto'})
	});

	$('.butt').click(function(){
		$('.fin_hid').css({'visibility':'visible'});
		$('#hidden_1,#hidden_2,#hidden_3').css({'visibility':'hidden'})});
	$('#for_fh').click(function(){
		$('.fin_hid').css({'visibility':'hidden'})
		$('main').css({'filter':'brightness(100%)'})
		$('html, body').css({overflow: 'auto'})
	});
})

