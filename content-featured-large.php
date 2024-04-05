<div class="featured-card-large">
	<div class="featured-card-large-inner">
			
			<a href="<?php the_permalink(); ?>" class="featured-card-large-thumb" style="background-image:url('<?php the_post_thumbnail_url('typeflow-medium'); ?>');">
				
				<?php if ( has_post_thumbnail() ): ?>
					
				<?php else: ?>
					<i class="fas fa-image"></i>
				<?php endif; ?>
			
			</a>
			
			<h2 class="feaured-large-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<div class="featured-large-date"><?php the_time( get_option('date_format') ); ?></div>
		
	</div>
</div>