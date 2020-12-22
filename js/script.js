$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
function isEmail(email) {
    var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    return regex.test(email);
}
function isPhone(phone) {
    var regex = /^\+?\d{1,3}?[- .]?\(?(?:\d{2,3})\)?[- .]?\d\d\d[- .]?\d\d\d\d$/;
    return regex.test(phone);
}
function validateFormContacts(){
	var name = $('#contacts input[name="name"]').val();
	var email = $('#contacts input[name="email"]').val();
	var phone = $('#contacts input[name="phone"]').val();
	var content = $('#contacts textarea[name="content"]').val();
	$('#contacts input').removeClass('error');
	$('#contacts textarea').removeClass('error');
	$('#contacts .right p.error').html('');
	if(name == ''){
		$('#contacts input[name="name"]').addClass('error');
	}
	if(email == ''){
		$('#contacts input[name="email"]').addClass('error');
	}
	if(phone == ''){
		$('#contacts input[name="phone"]').addClass('error');
	}
	if(content == ''){
		$('#contacts textarea[name="content"]').addClass('error');
	}
	if(name == '' || email == '' || phone =='' || content == ''){
		$('#contacts p.error').html('Những trường đánh dấu (*) là bắt buộc nhập');
	}else if(!isEmail(email)){
		$('#contacts p.error').html('Nhập sai định dạng email');
		$('#contacts input[name="email"]').addClass('error');
	}else if(!isPhone(phone)){
		$('#contacts p.error').html('Nhập sai định dạng SĐT');
		$('#contacts input[name="phone"]').addClass('error');
	}else{
		$('#form-contacts').submit();
	}
}
function validateFormSupport(){
	var name = $('#support input[name="name"]').val();
	var email = $('#support input[name="email"]').val();
	var phone = $('#support input[name="phone"]').val();
	var content = $('#support textarea[name="content"]').val();
	$('#support input').removeClass('error');
	$('#support textarea').removeClass('error');
	$('#support .right p.error').html('');
	if(name == ''){
		$('#support input[name="name"]').addClass('error');
	}
	if(email == ''){
		$('#support input[name="email"]').addClass('error');
	}
	if(phone == ''){
		$('#support input[name="phone"]').addClass('error');
	}
	if(content == ''){
		$('#support textarea[name="content"]').addClass('error');
	}
	if(name == '' || email == '' || phone =='' || content == ''){
		$('#support p.error').html('Những trường đánh dấu (*) là bắt buộc nhập');
	}else if(!isEmail(email)){
		$('#support p.error').html('Nhập sai định dạng email');
		$('#support input[name="email"]').addClass('error');
	}else if(!isPhone(phone)){
		$('#support p.error').html('Nhập sai định dạng SĐT');
		$('#support input[name="phone"]').addClass('error');
	}else{
		$('#form-support').submit();
	}
}
function showCertification(id){
	var page = $('#show-more-'+id).attr('data-page');
	$.ajax({
		type: 'post',
		dataType: 'json',
		url: '/ajax/show-certification',
		data: {id:id,page:page},
		success:function(data){
			$('.item-certificate-'+id+' .clear').append(data.html);
			if(data.status == 1){
				$('#show-more-'+id).attr('data-page', parseInt(page)+1);
			}
			if(data.status == 0){
				$('#show-more-'+id).remove();
			}
		}
	});
}
$(document).ready(function(){
	setTimeout(function(){ 
		var height_image_video1 = $('#news-event .bottom-right').height();
		var height_image_video2 = $('#quality .right .video').height();
		var top1 = (height_image_video1 - 100)/2;
		var top2 = (height_image_video2 - 100)/2;
		$('#news-event .bottom-right .play-video').css('top', top1);
		$('#quality .right .video .play-video').css('top', top2);
	}, 5000);
	$("*[data-gototop]").on("click", function(t) {
        t.preventDefault(), $("html, body").animate({
            scrollTop: 0
        }, "slow")
    });

	$('#header .icon-search').on('click', function(){
		$('#search-header').submit();
	});
	$('.lightGallery-video').lightGallery({
    	youtubePlayerParams: {
	        modestbranding: 1,
	        autoplayFirstVideo: 1,
	    },
    });
    $('.lightGallery-image').lightGallery({
	    thumbnail:true
	});
    if($('#home-slider').length) {
	    var sync1 = $("#home-slider");
	    var sync2 = $("#home-slider-thumbnail");

	    sync1.owlCarousel({
	        singleItem : true,
	        autoPlay:8000,
	        lazyLoad: true,
	        afterAction : syncPosition
	    });

	    sync2.owlCarousel({
	        items : 9,
	        pagination:false,
	        autoHeight:true,
	        afterInit : function(el){
	            el.find(".owl-item").eq(0).addClass("active");
	        }
	    });
	    function syncPosition(el){
	        var current = this.currentItem;
	        $(sync2)
	            .find(".owl-item")
	            .removeClass("active")
	            .eq(current)
	            .addClass("active")
	        if($(sync2).data("owlCarousel") !== undefined){
	            center(current)
	        }
	    }

	    $(sync2).on("click", ".owl-item", function(e){
	        e.preventDefault();
	        var number = $(this).data("owlItem");
	        sync1.trigger("owl.goTo",number);
	    });

	    $("#home-slider-thumbnail .owl-item").hover(function(e){
			  	e.preventDefault();
		        var number = $(this).data("owlItem");
		        sync1.trigger("owl.goTo",number);
		  	}, function(){
		});

	    function center(number){
	        var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
	        var num = number;
	        var found = false;
	        for(var i in sync2visible){
	            if(num === sync2visible[i]){
	                var found = true;
	            }
	        }

	        if(found===false){
	            if(num>sync2visible[sync2visible.length-1]){
	                sync2.trigger("owl.goTo", num - sync2visible.length+2)
	            }else{
	                if(num - 1 === -1){
	                    num = 0;
	                }
	                sync2.trigger("owl.goTo", num);
	            }
	        } else if(num === sync2visible[sync2visible.length-1]){
	            sync2.trigger("owl.goTo", sync2visible[1])
	        } else if(num === sync2visible[0]){
	            sync2.trigger("owl.goTo", num-1)
	        }

	    }
	}
});
jQuery(window).scroll(function() {
    var e = jQuery(window).scrollTop();
    $(".animated").each(function(i) {
        var t = $(this).offset().top;
        e + $(window).height() > t && $(this)[0].classList.value.indexOf("fadeIn") < 0 && (animate = $(this).data("animate"), $(this).addClass(animate))
    });
    if(e > 120){
    	$('#header.header-fix').css('opacity', 1);
    	$('#header.header-fix').css('visibility', 'visible');
    }else{
    	$('#header.header-fix').css('opacity', 0);
    	$('#header.header-fix').css('visibility', 'hidden');
    }
});