$(function(){

			/*$.getJSON('script/json.php', function(data) { 
				htmlstr = '<ul id="slidewrapper">';          
  				for (var i=0; i<data.length; i++) {
  					htmlstr += '<li class="slide">';
  					htmlstr += '<img src="' + data[i] + '" alt="3" class="slide-img">';
  					htmlstr += '</li>';
  				}
  				htmlstr += '</ul>';
  				$('.viewport').append(htmlstr);
			});*/

			function nextSlide() {
			    if (slideNow == slideCount || slideNow <= 0 || slideNow > slideCount) {
			        $('#slidewrapper').css('transform', 'translate(0, 0)');
			        slideNow = 1;
			    } else {
			        translateWidth = -$('#viewport').width() * (slideNow);
			        $('#slidewrapper').css({
			            'transform': 'translate(' + translateWidth + 'px, 0)',
			            '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
			            '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
			        });
			        slideNow++;
			    }
			}

			function prevSlide() {
			    if (slideNow == 1 || slideNow <= 0 || slideNow > slideCount) {
			        translateWidth = -$('#viewport').width() * (slideCount - 1);
			        $('#slidewrapper').css({
			            'transform': 'translate(' + translateWidth + 'px, 0)',
			            '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
			            '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
			        });
			        slideNow = slideCount;
			    } else {
			        translateWidth = -$('#viewport').width() * (slideNow - 2);
			        $('#slidewrapper').css({
			            'transform': 'translate(' + translateWidth + 'px, 0)',
			            '-webkit-transform': 'translate(' + translateWidth + 'px, 0)',
			            '-ms-transform': 'translate(' + translateWidth + 'px, 0)',
			        });
			        slideNow--;
			    }
			}

			var slideNow = 1;
			var slideCount = $('#slidewrapper').children().length;
			var translateWidth = 0;

			$("#prev-btn").click (function() {prevSlide();});
			$("#next-btn").click (function() {nextSlide();});



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

