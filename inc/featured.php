<?php
// Query featured entries
$featured = new WP_Query(
	array(
		'no_found_rows'				=> false,
		'update_post_meta_cache'	=> false,
		'update_post_term_cache'	=> false,
		'ignore_sticky_posts'		=> 1,
		'posts_per_page'			=> absint( get_theme_mod('featured-posts-count','4') ),
		'cat'						=> absint( get_theme_mod('featured-category','') )
	)
);
// Query highlight entries
$highlight = new WP_Query(
	array(
		'no_found_rows'				=> false,
		'update_post_meta_cache'	=> false,
		'update_post_term_cache'	=> false,
		'ignore_sticky_posts'		=> 1,
		'posts_per_page'			=> absint( get_theme_mod('highlight-posts-count','4') ),
		'cat'						=> absint( get_theme_mod('highlight-category','') )
	)
);
?>

<?php if ( is_home() && !is_paged() && ( get_theme_mod('featured-section','on') =='on') ): ?>
	
	<div class="stickywrap">
		
		<h3 class="stickywrap-heading"><span class="stickywrap-heading-inside"><i class="far fa-star"></i></span></h3>
		
		<div class="stickywrap-inner">
			
			<?php if ( ( get_theme_mod('featured-posts-count','4') !='0') && $featured->have_posts() ): ?>
			<div class="featured-large group">
		
				<div class="slick-featured">
					<div class="slick-posts">
						<?php while ( $featured->have_posts() ): $featured->the_post(); ?>
							<div>	
								<?php get_template_part('content-featured-large'); ?>
							</div>
						<?php endwhile; ?>
					</div>
					<div class="slick-posts-nav"></div>
				</div>
					
			</div>
			<?php endif; ?>
			
			<?php if ( ( get_theme_mod('highlight-posts-count','4') !='0') && $highlight->have_posts() ): ?>
				<?php while ( $highlight->have_posts() ): $highlight->the_post(); ?>
					<?php get_template_part('content-featured'); ?>
				<?php endwhile; ?>
			<?php endif; ?>
			
			<?php if ( get_theme_mod( 'featured-search', 'on' ) == 'on' ): ?>
				<div class="featured-search">
					<?php get_search_form(); ?>
				</div>
			<?php endif; ?>
			
		</div>	
		
	</div>

<?php endif; ?>

<?php wp_reset_postdata(); ?>
