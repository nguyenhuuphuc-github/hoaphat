<?php get_header(); ?>
	<style>
		.detail-list-product{
			width: 1170px;
			float: left;
			margin-top: 20px;
			margin-left: calc((100% - 1170px) / 2);
			position: relative;
		}
		.detail-list-product .css-content{
			max-height: 200px;
			margin-bottom: 20px;
			overflow: hidden;
		}
		#product-content_showmore, #product-img_showmore {
		    position: absolute;
		    bottom: 0;
		    left: 0;
		    right: 0;
		    width: 100%;
		    padding-top: 50px;
		    text-align: center;
		    background: 0 0;
		    background: -moz-linear-gradient(top,rgba(255,255,255,0) 0,rgba(255,255,255,.91) 50%,#fff 55%);
		    background: -webkit-gradient(left top,left bottom,color-stop(0,rgba(255,255,255,0)),color-stop(50%,rgba(255,255,255,.91)),color-stop(55%,#fff));
		    background: -webkit-linear-gradient(top,rgba(255,255,255,0) 0,rgba(255,255,255,.91) 50%,#fff 55%);
		    background: -o-linear-gradient(top,rgba(255,255,255,0) 0,rgba(255,255,255,.91) 50%,#fff 55%);
		    background: -ms-linear-gradient(top,rgba(255,255,255,0) 0,rgba(255,255,255,.91) 50%,#fff 55%);
		    background: linear-gradient(to bottom,rgba(255,255,255,0) 0,rgba(255,255,255,.91) 50%,#fff 55%);
		    display: block;
		    margin-bottom: 0;
		}
		#product-content_showmore a, #product-img_showmore a {
		    color: #1d428a;
		}
	</style>
<?php get_template_part('templates/banner','sanpham');?>    	
<?php get_template_part('templates/sanpham','products') ?>
<?php get_footer();?>
<?php get_template_part('templates/sanpham','script'); ?>