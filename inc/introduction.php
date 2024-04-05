<?php if ( get_theme_mod('profile-image') || get_theme_mod('profile-name') || get_theme_mod('profile-description') ): ?>
<div class="stickywrap">
	
	<h3 class="stickywrap-heading">
		<span class="stickywrap-heading-inside"><i class="far fa-user"></i></span>
	</h3>
	
	<div class="stickywrap-inner">
	
		<div class="intro-card-inner">
			
			<div class="intro-card-left">
			
				<div class="intro-card-thumb">
				
					<?php if ( get_theme_mod('profile-image') ): ?>
						<img src="<?php echo esc_html( get_theme_mod('profile-image') ); ?>" alt="" />
					<?php else: ?>
						<div class="intro-card-thumb-empty"><i class="fas fa-image"></i></div>
					<?php endif; ?>
					
				</div>
			
			</div>
			<div class="intro-card-right">
				
				<?php if ( get_theme_mod('profile-name') ): ?>
					<h1 class="intro-card-title">
						<?php echo esc_html( get_theme_mod('profile-name') ); ?>
					</h1>
				<?php endif; ?>
				
				<?php if ( get_theme_mod('profile-description') ): ?>
					<div class="intro-card-desc">
						<?php echo wp_kses_post( get_theme_mod('profile-description') ); ?>
					</div>
				<?php endif; ?>
				
				<?php if ( get_theme_mod( 'header-social', 'on' ) == 'on' ): ?>
					<?php typeflow_social_links() ; ?>
				<?php endif; ?>
				
			</div>

		</div>

	</div>
	
</div>
<?php endif; ?>