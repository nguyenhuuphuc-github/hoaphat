<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/jquery.fancybox.js"></script>
<script type="text/javascript" src="./libs/lightgallery/lightgallery-all.min.js"></script>
<script type="text/javascript" src="./js/script.js?v=1"></script>
<script src="./js/owl.carousel.min.js"></script>
<script>
	$(document).ready(function(){
		$('#prize .content').owlCarousel({
		    items:4,//số item trên một màn hình
	        margin: 30,
	        dots:true, //show ...
	        loop: false,
	        autoplay:true,
			autoplayTimeout:3000,
			autoplayHoverPause:true,
	        navContainer: '#prize .content',
	        navText: ['<i class="fa fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-chevron-right" aria-hidden="true"></i>']
	    });
	    setTimeout(function(){ 
	    	 var height_image_video = $('#certificate-quality .video-tech').height();
			var top = (height_image_video - 100)/2;
			$('#certificate-quality .video-tech .play-video').css('top', top);
	    }, 3000);
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