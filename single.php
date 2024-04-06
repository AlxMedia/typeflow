<?php get_header(); ?>

<div class="stickywrap-container">

	<div class="stickywrap">

		<h3 class="stickywrap-heading">
			<span class="stickywrap-heading-inside"><i class="fas fa-pencil"></i></span>
		</h3>
		
		<div class="stickywrap-inner">

			<?php while ( have_posts() ): the_post(); ?>
			
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					
					<header class="entry-header group">
						<h1 class="entry-title"><?php the_title(); ?></h1>
						<div class="entry-byline"><?php esc_html_e('by','typeflow'); ?> <?php the_author_posts_link(); ?></div>
						
						<?php if ( get_theme_mod( 'header-featured-image', 'on' ) == 'on' ): ?>
						
							<?php if ( has_post_thumbnail() ) : ?>
								<div class="entry-featured-image">
									<?php the_post_thumbnail('typeflow-large'); ?>
								</div>
							<?php endif; ?>
							
						<?php endif; ?>	
						
						<div class="blog-card-bottom group">
							<div class="blog-card-date"><?php the_time( get_option('date_format') ); ?></div>
							<div class="blog-card-category"><?php the_category(' '); ?></div>
							
							<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
								<?php $number = get_comments_number( $post->ID ); if ( $number > 0 ) { ?>
									<a class="card-comments" href="<?php comments_link(); ?>"><i class="far fa-comment-alt"></i><span><?php comments_number( '0', '1', '%' ); ?></span></a>
								<?php } ?>
							<?php endif; ?>
							
						</div>
						
						<?php do_action( 'alx_ext_sharrre' ); ?>
						
					</header>
					
					<div class="entry themeform">
						<?php the_content(); ?>
						<?php wp_link_pages(array('before'=>'<div class="post-pages">'.esc_html__('Pages:','typeflow'),'after'=>'</div>')); ?>
						<div class="clear"></div>
					</div>
					
				</article>
				
				<div class="entry-footer group">

					<?php the_tags('<p class="post-tags"><span>'.esc_html__('Tags:','typeflow').'</span> ','','</p>'); ?>
					
					<div class="clear"></div>
					
					<?php if ( ( get_theme_mod( 'author-bio', 'on' ) == 'on' ) && get_the_author_meta( 'description' ) ): ?>
						<div class="author-bio">
							<div class="bio-avatar"><?php echo get_avatar(get_the_author_meta('user_email'),'128'); ?></div>
							<p class="bio-name"><?php the_author_meta('display_name'); ?></p>
							<p class="bio-desc"><?php the_author_meta('description'); ?></p>
							<div class="clear"></div>
						</div>
					<?php endif; ?>
					
					<?php do_action( 'alx_ext_sharrre_footer' ); ?>
					
					<?php if ( get_theme_mod( 'post-nav', 'content' ) == 'content' ) { get_template_part('inc/post-nav'); } ?>
					
					<div class="entry-comments themeform">
						<?php comments_template(); ?>
					</div>
					
					<?php if ( get_theme_mod( 'related-posts', 'categories' ) != 'disable' ) { get_template_part('inc/related-posts'); } ?>
					
				</div><!--/.entry-footer-->

			<?php endwhile; ?>

		</div>
		
	</div>

</div><!--/.stickywrap-container-->

<?php get_footer(); ?>