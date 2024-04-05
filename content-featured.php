<div class="featured-card">
	<div class="featured-card-inner">
	
		<div class="featured-card-left">
		
			<div class="featured-card-thumb">
				<?php if ( has_post_thumbnail() ): ?>
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('typeflow-small'); ?></a>
				<?php else: ?>
					<a class="featured-card-thumb-empty" href="<?php the_permalink(); ?>"><i class="fas fa-image"></i></a>
				<?php endif; ?>
			</div>
		
		</div>
		
		<div class="featured-card-right">
		
			<h3 class="featured-card-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h3>
			
			<div class="featured-card-date"><?php the_time( get_option('date_format') ); ?></div>
		
		</div>
		
	</div>
</div>