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
		$('#hidden_2,#hidden_3,.fin_hid,.back_hid').css({'visibility':'hidden'})
	})
	$('#one').click(function(){$('.back_hid').css({'visibility':'visible'})});
	$('#two').click(function(){$('#hidden_2').css({'visibility':'visible'})});
	$('#three').click(function(){$('#hidden_3').css({'visibility':'visible'})});
	$('#for_h_1').click(function(){$('.back_hid').css({'visibility':'hidden'})});
	$('#for_h_2').click(function(){$('#hidden_2').css({'visibility':'hidden'})});
	$('#for_h_3').click(function(){$('#hidden_3').css({'visibility':'hidden'})});

	$('.butt').click(function(){
		$('.fin_hid').css({'visibility':'visible'});
		$('.back_hid,#hidden_2,#hidden_3').css({'visibility':'hidden'})});
	$('#for_fh').click(function(){$('.fin_hid').css({'visibility':'hidden'})});
})

