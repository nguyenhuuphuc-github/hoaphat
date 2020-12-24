<script type="text/javascript" src="./js/jquery.min.js"></script>
<script type="text/javascript" src="./js/jquery.fancybox.js"></script>
<script type="text/javascript" src="./libs/lightgallery/lightgallery-all.min.js"></script>
<script type="text/javascript" src="./js/script.js?v=1"></script>
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