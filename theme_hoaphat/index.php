<?php get_header(); ?>
<?php if(is_home())get_template_part('templates/slides');?>
<?php get_template_part('templates/content','news');?>
<?php get_template_part('templates/content','about');?>
<?php get_template_part('templates/content','vanhoa');?>

<?php get_footer(); ?>
<?php if(is_home())get_template_part('templates/home','script');?>