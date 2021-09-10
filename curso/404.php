<?php get_header(); ?>
 <img class="img-fluid" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>">
	<div class="content-area">
		<main>
			<section class="slide">
				<div class="container">
					<div class="row"><?php _e('Slide', 'wpcurso'); ?></div>
				</div>
			</section>
			<section class="services">
				<div class="container">
					<div class="row"><?php _e('Serviçe','wpcurso'); ?></div>
				</div>
			</section>
			<section class="middle-area">
				<div class="container">
					<div class="row">
						
						<div class="error-404">

						<header>
							<h1><?php _e('Page not found', 'wpcurso'); ?></h1>
							<p><?php _e('unforunately, the page you tried to reach does not exist on this site!', 'wpcurso'); ?></p>
						</header>
						<div class="error">
							<p><?php _e('How about doing a search?', 'wpcurso'); ?></p>
							<?php get_search_form(); ?>
							<?php the_widget('WP_Widget_Recent_Posts', array('title'=> __('Latest Posts', 'wpcurso'), 'number'=>3)); ?>
						</div>
					</div>
				</div>
			</section>
			<section class="map">
				<div class="container">
					<div class="row"><?php _e('Map', 'wpcurso'); ?></div>
				</div>
			</section>
		</main>
	</div>
<?php get_footer(); ?>