<article id="post-<?php the_ID(); ?>" <?php post_class('blog-card'); ?>>
	
	<div class="blog-card-inner">
		
		<div class="blog-card-left">
		
			<div class="blog-card-thumb">
				<?php if ( has_post_thumbnail() ): ?>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('typeflow-small'); ?></a>
				<?php else: ?>
					<a class="blog-card-thumb-empty" href="<?php the_permalink(); ?>"><i class="fas fa-image"></i></a>
				<?php endif; ?>
			</div>
		
		</div>
		<div class="blog-card-right">
		
			<h2 class="blog-card-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2>
			
			<?php if (get_theme_mod('excerpt-length','20') != '0'): ?>
				<div class="blog-card-excerpt">
					<?php the_excerpt(); ?>
				</div>
			<?php endif; ?>
		
		</div>

	</div>
	
	<div class="blog-card-bottom group">
		<div class="blog-card-date"><?php the_time( get_option('date_format') ); ?></div>
		<div class="blog-card-category"><?php the_category(' '); ?></div>
		
		<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
			<?php $number = get_comments_number( $post->ID ); if ( $number > 0 ) { ?>
				<a class="card-comments" href="<?php comments_link(); ?>"><strong><i class="far fa-comment-alt"></i><span><?php comments_number( '0', '1', '%' ); ?></span></strong></a>
			<?php } ?>
		<?php endif; ?>
		
	</div>

</article>