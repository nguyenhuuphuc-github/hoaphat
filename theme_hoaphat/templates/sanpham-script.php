<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/jquery.fancybox.js"></script>
<script type="text/javascript" src="./libs/lightgallery/lightgallery-all.min.js"></script>
<script type="text/javascript" src="./js/script.js?v=1"></script>
<script>
	$(document).ready(function(){
        $("body").on("click","#product-content_showmore",function(){
            var data_show = $(this).attr('data-show');
            if(data_show == 1){
            	$('.detail-list-product .css-content').css('max-height','initial');
            	$(this).attr('data-show', 0);
            	$(this).find('a').html('Ẩn bớt <i class="fa fa-angle-up"></i>');
            	$(this).css('padding-top', 0);
            }else{
            	$('.detail-list-product .css-content').css('max-height','200px');
            	$(this).attr('data-show', 1);
            	$(this).find('a').html('Xem thêm <i class="fa fa-angle-down"></i>');
            	$(this).css('padding-top', '50px');
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