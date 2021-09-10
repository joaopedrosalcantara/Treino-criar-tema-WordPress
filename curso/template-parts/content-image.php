<article <?php post_class() ?>>
	<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(array(275, 275)) ?></a>
	<div class="meta-info">
		<p> <?php _e('by', 'wpcurso'); ?> <?php the_author(); ?></p>
		<p><?php _e('Categories:'); ?> <?php the_category( ' ' ); ?></p>
		<p><?php the_tags(__('Tags: ', 'wpcurso'), ','); ?></p>
	</div>
	<?php the_content(); ?>
</article>