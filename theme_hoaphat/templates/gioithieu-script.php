<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/jquery.fancybox.js"></script>
<script type="text/javascript" src="./js/lightgallery-all.min.js"></script>
<script type="text/javascript" src="./js/script.js?v=1"></script>
	<script>
		$(document).ready(function(){
			var height_fixed = $('#banner-product').height() + $('#header').height() + $('#tab-about').height();
			// $(window).scroll(function(){
			// 	if ($(window).scrollTop() > height_fixed){
			// 		$('#tab-about').addClass('fixed');
			// 		$('#tab-about.fixed').css('display','block');
			// 	}else{
			// 		$('#tab-about').removeClass('fixed');
			// 	}
			// 	var array_tab = ['about-general','mission','history','maps-about','company-members','news-home'];
			// 	for(var i = 0; i <= 5; i ++){
			// 		if($(window).scrollTop() > ($('#'+array_tab[i]).offset().top - 90)){
			// 			$('#tab-about li').removeClass('active');
			// 			$('#tab-about li.'+array_tab[i]).addClass('active');
			// 		}
			// 	}
			// });
			setTimeout(function(){ 
				 $('#tab-about.fixed').css('display','none');
			}, 200);
			$('#company-members .show-more').on('click', function(){
				var page = $(this).attr('data-page');
				var token = $('input[name="_token"]').val();
				var locale = 'vi';
				$.ajax({
					type: 'post',
					dataType: 'json',
					data: {"_token":token, page:page,locale:locale},
					url: '/ajax/company-members',
					success:function(data){
						if(data.status == 1){
							$('#company-members ul').append(data.html);
							$('#company-members .show-more').attr('data-page', data.page);
						}else{
							if(locale == 'vi'){
								$('#company-members .show-more a').html('Đã hết dữ liệu');
							}else{
								$('#company-members .show-more a').html('Out of data');
							}
						}
					}
				});
			});
		    $('.timeline .item').on('click', function(){
		    	$('.timeline .item').removeClass('active');
		    	$(this).addClass('active');
		    });
		    $('#tab-about li').on('click', function(){
		    	var data_scroll = $(this).attr('data-scroll');
			    $('html, body').animate({
			        scrollTop: $("#"+data_scroll).offset().top - 70
			    }, 500);
		    });
		    $('#history .item').on('click', function(){
		    	var history_id = $(this).attr('data-id');
		    	var token = $('input[name="_token"]').val();
		    	$.ajax({
		    		type: 'post',
		    		dataType: 'json',
		    		data: {"_token":token, id:history_id},
		    		url: '/ajax/get-history',
		    		beforeSend:function(){
		    			$("#history").addClass('history');
		    			$('#history .image-loading').css('display','block');
		    		},
		    		success:function(data){
		    			if(data.status == 1){
		    				$('#history .image img').attr('src', data.image);
		    				$('#history .event ul').html(data.content);
		    				setTimeout(function(){ 
		    					$("#history").removeClass('history');
		    					$('#history .image-loading').css('display','none');
		    				}, 500);
		    				
		    			}
		    		}
		    	});
		    });
		});
	</script>
<script>
    $(document).ready(function(){
        $('.item-messenger').on('click', function(){
            $('.fb-button').css('display','none');
            $('.fb-widget').css('display','block');
            $('.fb-widget').css('opacity',1);
            $('.fb-overlay').css('display','block');
            $('textarea._58an').focus();
        });
    });
</script>