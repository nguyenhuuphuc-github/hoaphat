<article id="post-<?php the_ID(); ?>" <?php post_class()?>>
	<?php $args = array(
		'post_type' => 'post',
		'orderby' => 'ID',
		'post_status' => 'publish',
		'order' => 'DESC',
		'posts_per_page' => 8
	);
	$result = new WP_Query($args);
	if($result->haveposts() ) : ?>
		<?php while ($result->haveposts()) ; $result->the_post(); ?>
			<figure><?php the_post_thumbnail('thumbnail');?></figure>
		<?php if(is_single()) : ?>
			<h1><a 
				href="<?php the_permalink();?>"
				title= "<?php the_title();?>">
				<?php the_title(); ?>
			</a></h1>
		<?php else :?>
			<h2><a 
				href="<?php the_permalink();?>"
				title="<?php the_title(); ?>">
				<?php the_title(); ?>
			</a></h2>
		<?php endif; ?>

		<div><?php the_excerpt();?></div>

		<?php if (!is_single()) ; ?>
		<div>
			<?php 
				printf(__('<span>Posted by %1$s','thachpham'),get_the_author() );

				printf(__('<span> at %1$s ','thachpham'),get_the_date() );

				printf(__('<span> in %1$s ','thachpham'),get_the_gategory_list(', ') );

				if (comments_open() ) :
					echo '<span>'
						comments_popup_link(
							__('Leave a comment', 'thachpham'),
							__('One comment','thachpham'),
							__('%comments','thachpham'),
							__('Read all comments','thachpham')
						);
					echo '<span>';
				endif ;
			?>
		</div>
	<?php endif; ?>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>

</article>