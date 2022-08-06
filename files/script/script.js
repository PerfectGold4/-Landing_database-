$(function(){
/*при обновлении страница прокручивается вверх*/
	window.onbeforeunload = function () {
	  window.scrollTo(0, 0);
	}
/*декоративное появление блока*/
	$('p', '#fourth').fadeOut();
	$('img', '#fourth').fadeOut();
	$(window).scroll(function(){
			if($(window).scrollTop()>350){
				$('p', '#fourth').fadeIn(800);
				$('img', '#fourth').fadeIn(800);
			}
		})
/*оформление отправки эл. почты*/
	$('.hid,.fin_hid,.err').css({'visibility':'hidden'});

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
		$('#1').css({'visibility':'hidden'})
		$('main').css({'filter':'brightness(100%)'})
		$('html, body').css({overflow: 'auto'})
	});
	$('#for_h_2').click(function(){
		$('#hidden_2').css({'visibility':'hidden'})
		$('#2').css({'visibility':'hidden'})
		$('main').css({'filter':'brightness(100%)'})
		$('html, body').css({overflow: 'auto'})
	});
	$('#for_h_3').click(function(){
		$('#hidden_3').css({'visibility':'hidden'})
		$('#3').css({'visibility':'hidden'})
		$('main').css({'filter':'brightness(100%)'})
		$('html, body').css({overflow: 'auto'})
	});

	$('#for_fh').click(function(){
		$('.fin_hid').css({'visibility':'hidden'})
		$('main').css({'filter':'brightness(100%)'})
		$('html, body').css({overflow: 'auto'})
	});

})

