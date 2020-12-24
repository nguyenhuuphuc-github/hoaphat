<script type="text/javascript">
	$(document).ready(function(){
		$('.slider-thumbnail .item a').on('click', function(){
			var link = $(this).attr('href');
			if(link != ''){
				window.open(link, '_blank');
			}
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