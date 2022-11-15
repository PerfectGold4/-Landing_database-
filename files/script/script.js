$(function(){
/*декоративное появление блока*/
	$('p', '.anim_decor').fadeOut()
	$('img', '.anim_decor').fadeOut()
	$(window).scroll(function(){
			if($(window).scrollTop()>350){
				$('p', '.anim_decor').fadeIn(800)
				$('img', '.anim_decor').fadeIn(800)
			}
		})
/*оформление отправки эл. почты*/
	$('.hid,.fin_hid,.error').css({'visibility':'hidden'})
	function butt_prod(butt, form) {
		$(butt).click(function(){
			$(form).css({'visibility':'visible'})
			$('main').css({'filter':'brightness(40%)'})
			$('html, body').css({overflow: 'hidden'})
		})
	}
	function back(symbol, block, er_txt, input_data) {
		$(symbol).click(function(){
			$(block).css({'visibility':'hidden'})
			$(er_txt).css({'visibility':'hidden'})
			$(input_data).val('')
			$('main').css({'filter':'brightness(100%)'})
			$('html, body').css({overflow: 'auto'})
		})
	}

	butt_prod('#prod_1', '#hidden_1')
	butt_prod('#prod_2', '#hidden_2')
	butt_prod('#prod_3', '#hidden_3')

	back('#back_1', '#hidden_1', '#er_1', 'input.data_1')
	back('#back_2', '#hidden_2', '#er_2', 'input.data_2')
	back('#back_3', '#hidden_3', '#er_3', 'input.data_3')

	$('.back_fh').click(function(){
		$('.fin_hid').css({'visibility':'hidden'})
		$('main').css({'filter':'brightness(100%)'})
		$('html, body').css({overflow: 'auto'})
	})
/*оформление комментариев*/
	if ($('.the_comment').length < 1) {
		$('.no_comment').append('<p>Оставьте комментарий первым...</p>')
	}
/*Оформление слайдера с картинками*/
	var slideNow = 1;
	var slideCount = $('#slidewrapper').children().length;
	var translateWidth = 0;
	function nextSlide() {
		if (slideNow == slideCount || slideNow <= 0 || slideNow > slideCount) {
	        $('#slidewrapper').css('transform', 'translate(0, 0)');
	        slideNow = 1;
		} else {
	        translateWidth = -$('#viewport').width() * (slideNow);
	        $('#slidewrapper').css({
		        'transform': 'translate(' + translateWidth + 'px, 0)'
	        });
	        slideNow++;
		}
	}
	function prevSlide() {
	    if (slideNow == 1 || slideNow <= 0 || slideNow > slideCount) {
	        translateWidth = -$('#viewport').width() * (slideCount - 1);
	        $('#slidewrapper').css({
	            'transform': 'translate(' + translateWidth + 'px, 0)'
	        });
	        slideNow = slideCount;
	    } else {
	        translateWidth = -$('#viewport').width() * (slideNow - 2);
	        $('#slidewrapper').css({
	            'transform': 'translate(' + translateWidth + 'px, 0)'
	        });
	        slideNow--;
	    }
	}
	$('#next-btn').click(function() {
        nextSlide();
    });
    $('#prev-btn').click(function() {
        prevSlide();
	});
})