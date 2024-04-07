<?php
/* ------------------------------------------------------------------------- *
 *  Custom functions
/* ------------------------------------------------------------------------- */
	
	// Use a child theme instead of placing custom functions here
	// http://codex.wordpress.org/Child_Themes

	
/* ------------------------------------------------------------------------- *
 *  Load theme files
/* ------------------------------------------------------------------------- */	

// Load Kirki
include( get_template_directory() . '/functions/kirki/kirki.php' );

if ( ! function_exists( 'typeflow_load' ) ) {
	
	function typeflow_load() {
		// Load theme languages
		load_theme_textdomain( 'typeflow', get_template_directory().'/languages' );
		
		// Load theme options and meta boxes
		include( get_template_directory() . '/functions/theme-options.php' );

		// Load dynamic styles
		include( get_template_directory() . '/functions/dynamic-styles.php' );
		
		// Load TGM plugin activation
		include( get_template_directory() . '/functions/class-tgm-plugin-activation.php' );
	}
	
}
add_action( 'after_setup_theme', 'typeflow_load' );	


/* ------------------------------------------------------------------------- *
 *  Base functionality
/* ------------------------------------------------------------------------- */
	
	// Content width
	if ( !isset( $content_width ) ) { $content_width = 590; }


/*  Theme setup
/* ------------------------------------ */
if ( ! function_exists( 'typeflow_setup' ) ) {
	
	function typeflow_setup() {
		// Enable title tag
		add_theme_support( 'title-tag' );
		
		// Enable automatic feed links
		add_theme_support( 'automatic-feed-links' );
		
		// Enable featured image
		add_theme_support( 'post-thumbnails' );
		
		// Enable responsive embeds
		add_theme_support( 'responsive-embeds' );
		
		// Enable HTML5 semantic markup
		add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );
		
		// Declare WooCommerce support
		add_theme_support( 'woocommerce' );
		
		// Enable support for selective refresh of widgets in customizer
		add_theme_support( 'customize-selective-refresh-widgets' );
		
		// Disable support for widgets block editor
		remove_theme_support( 'widgets-block-editor' );
		
		// Thumbnail sizes
		add_image_size( 'typeflow-small', 150, 150, true );
		add_image_size( 'typeflow-medium', 300, 300, true );
		add_image_size( 'typeflow-large', 640, 360, true );
		
		// Thumbnail sizes custom widgets
		add_image_size( 'alx-small', 200, 200, true );
		add_image_size( 'alx-medium', 520, 293, true );

		// Custom menu areas
		register_nav_menus( array(
			'mobile' 	=> esc_html__( 'Mobile', 'typeflow' ),
			'header' 	=> esc_html__( 'Header', 'typeflow' ),
		) );
	}
	
}
add_action( 'after_setup_theme', 'typeflow_setup' );


/*  Custom navigation
/* ------------------------------------ */
if ( ! class_exists( '\Typeflow\Nav' ) ) {
	require_once 'functions/nav.php';
}
add_action( 'wp', function() {
	$nav = new \Typeflow\Nav();
	$nav->enqueue(
		[
			'script' => 'js/nav.js',
			'inline' => false,
		]
	);
	$nav->init();
} );


/*  Custom logo
/* ------------------------------------ */
if ( ! function_exists( 'typeflow_custom_logo' ) ) {
	
	function typeflow_custom_logo() {
		$defaults = array(
			'height'		=> 120,
			'width'			=> 400,
			'flex-height'	=> true,
			'flex-width'	=> true,
			'header-text'	=> array( 'site-title', 'site-description' ),
		);
		add_theme_support( 'custom-logo', $defaults );
	}

}	
add_action( 'after_setup_theme', 'typeflow_custom_logo' );


/*  Custom header
/* ------------------------------------ */
if ( ! function_exists( 'typeflow_custom_header' ) ) {
	
	function typeflow_custom_header() {
		$args = array(
			'default-image'	=> false,
			'default-text'	=> false,
			'width'			=> 1120,
			'height'		=> 300,
			'flex-width'	=> true,
			'flex-height'	=> true,
		);
		add_theme_support( 'custom-header', $args );
	}
	
}
add_action( 'after_setup_theme', 'typeflow_custom_header' );


/*  Custom background
/* ------------------------------------ */
if ( ! function_exists( 'typeflow_custom_background' ) ) {
	
	function typeflow_custom_background() {
		$args = array();
		add_theme_support( 'custom-background', $args );
	}
	
}
add_action( 'after_setup_theme', 'typeflow_custom_background' );


/*  Deregister
/* ------------------------------------ */
if ( ! function_exists( 'typeflow_deregister' ) ) {
	
	function typeflow_deregister() {
		wp_deregister_style( 'wp-pagenavi' );
	}
	
}
add_action( 'wp_enqueue_scripts', 'typeflow_deregister', 100 );


/*  Register sidebars
/* ------------------------------------ */	
if ( ! function_exists( 'typeflow_sidebars' ) ) {

	function typeflow_sidebars()	{
		if ( get_theme_mod('footer-widgets') >= '1' ) { register_sidebar(array( 'name' => esc_html__('Footer 1','typeflow'),'id' => 'footer-1', 'description' => esc_html__("Widgetized footer","typeflow"), 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>')); }
		if ( get_theme_mod('footer-widgets') >= '2' ) { register_sidebar(array( 'name' => esc_html__('Footer 2','typeflow'),'id' => 'footer-2', 'description' => esc_html__("Widgetized footer","typeflow"), 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>')); }
		if ( get_theme_mod('footer-widgets') >= '3' ) { register_sidebar(array( 'name' => esc_html__('Footer 3','typeflow'),'id' => 'footer-3', 'description' => esc_html__("Widgetized footer","typeflow"), 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>')); }
		if ( get_theme_mod('footer-widgets') >= '4' ) { register_sidebar(array( 'name' => esc_html__('Footer 4','typeflow'),'id' => 'footer-4', 'description' => esc_html__("Widgetized footer","typeflow"), 'before_widget' => '<div id="%1$s" class="widget %2$s">','after_widget' => '</div>','before_title' => '<h3>','after_title' => '</h3>')); }
	}
	
}
add_action( 'widgets_init', 'typeflow_sidebars' );


/*  Enqueue javascript
/* ------------------------------------ */	
if ( ! function_exists( 'typeflow_scripts' ) ) {
	
	function typeflow_scripts() {
		wp_enqueue_script( 'typeflow-slick', get_template_directory_uri() . '/js/slick.min.js', array( 'jquery' ),'', false );
		if ( get_theme_mod( 'theme-toggle','on' ) == 'on' ) { wp_enqueue_script( 'typeflow-theme-toggle', get_template_directory_uri() . '/js/theme-toggle.js', array( 'jquery' ),'', true ); }
		wp_enqueue_script( 'typeflow-scripts', get_template_directory_uri() . '/js/scripts.js', array( 'jquery' ),'', true );
		if ( is_singular() && get_option( 'thread_comments' ) )	{ wp_enqueue_script( 'comment-reply' ); }
	}  
	
}
add_action( 'wp_enqueue_scripts', 'typeflow_scripts' ); 


/*  Enqueue css
/* ------------------------------------ */	
if ( ! function_exists( 'typeflow_styles' ) ) {
	
	function typeflow_styles() {
		wp_enqueue_style( 'typeflow-style', get_stylesheet_uri() );
		wp_enqueue_style( 'typeflow-responsive', get_template_directory_uri().'/responsive.css' );
		if ( ( get_theme_mod( 'dark-theme','off' ) == 'on' ) || ( get_theme_mod( 'theme-toggle','on' ) == 'on' ) ) { wp_enqueue_style( 'typeflow-dark', get_template_directory_uri().'/dark.css' ); }
		wp_enqueue_style( 'typeflow-font-awesome', get_template_directory_uri().'/fonts/all.min.css' );
	}
	
}
add_action( 'wp_enqueue_scripts', 'typeflow_styles' );


/* ------------------------------------------------------------------------- *
 *  Template functions
/* ------------------------------------------------------------------------- */	


/*  Social links
/* ------------------------------------ */
if ( ! function_exists( 'typeflow_social_links' ) ) {

	function typeflow_social_links() {
		if ( !get_theme_mod('social-links') =='' ) {
			$links = get_theme_mod('social-links', array());
			if ( !empty( $links ) ) {
				echo '<ul class="social-links">';	
				foreach( $links as $item ) {
					
					// Build each separate html-section only if set
					if ( isset($item['social-title']) && !empty($item['social-title']) ) 
						{ $title = 'title="' .esc_attr( $item['social-title'] ). '"'; } else $title = '';
					if ( isset($item['social-link']) && !empty($item['social-link']) ) 
						{ $link = 'href="' .esc_url( $item['social-link'] ). '"'; } else $link = '';
					if ( isset($item['social-target']) && !empty($item['social-target']) ) 
						{ $target = 'target="_blank"'; } else $target = '';
					if ( isset($item['social-icon']) && !empty($item['social-icon']) ) 
						{ $icon = 'class="fab ' .esc_attr( $item['social-icon'] ). '"'; } else $icon = '';
					if ( isset($item['social-color']) && !empty($item['social-color']) ) 
						{ $color = 'style="color: ' .esc_attr( $item['social-color'] ). ';"'; } else $color = '';
					
					// Put them together
					if ( isset($item['social-title']) && !empty($item['social-title']) && isset($item['social-icon']) && !empty($item['social-icon']) && ($item['social-icon'] !='fa-') ) {
						echo '<li><a rel="nofollow" class="social-tooltip" '.$title.' '.$link.' '.$target.'><i '.$icon.' '.$color.'></i></a></li>';
					}
				}
				echo '</ul>';
			}
		}
	}
	
}


/*  Site name/logo
/* ------------------------------------ */
if ( ! function_exists( 'typeflow_site_title' ) ) {

	function typeflow_site_title() {
		
		$custom_logo_id = get_theme_mod( 'custom_logo' );
		$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
		
		// Text or image?
		if ( has_custom_logo() && $logo !== false ) {
			$logo = '<img src="'. esc_url( $logo[0] ) .'" alt="'.esc_attr( get_bloginfo('name')).'">';
		} else {
			$logo = esc_html( get_bloginfo('name') );
		}
		
		$link = '<a href="'.esc_url( home_url('/') ).'" rel="home">'.$logo.'</a>';
		
		if ( is_front_page() || is_home() ) {
			$sitename = '<h1 class="site-title">'.$link.'</h1>'."\n";
		} else {
			$sitename = '<p class="site-title">'.$link.'</p>'."\n";
		}
		
		return $sitename;
	}
	
}


/*  Blog title
/* ------------------------------------ */
if ( ! function_exists( 'typeflow_blog_title' ) ) {

	function typeflow_blog_title() {
		global $post;
		$heading = esc_html( get_theme_mod('blog-heading') );
		$subheading = esc_html( get_theme_mod('blog-subheading') );
		if($heading) {
			$title = $heading;
		} else {
			$title = esc_html( get_bloginfo('name') );
		}
		if($subheading) {
			$title = $title.' <span>'.$subheading.'</span>';
		}

		return $title;
	}
	
}


/*  Related posts
/* ------------------------------------ */
if ( ! function_exists( 'typeflow_related_posts' ) ) {

	function typeflow_related_posts() {
		wp_reset_postdata();
		global $post;

		// Define shared post arguments
		$args = array(
			'no_found_rows'				=> true,
			'update_post_meta_cache'	=> false,
			'update_post_term_cache'	=> false,
			'ignore_sticky_posts'		=> 1,
			'orderby'					=> 'rand',
			'post__not_in'				=> array($post->ID),
			'posts_per_page'			=> 2
		);
		// Related by categories
		if ( get_theme_mod( 'related-posts','categories' ) == 'categories' ) {
			
			$cats = get_post_meta($post->ID, 'related-cat', true);
			
			if ( !$cats ) {
				$cats = wp_get_post_categories($post->ID, array('fields'=>'ids'));
				$args['category__in'] = $cats;
			} else {
				$args['cat'] = $cats;
			}
		}
		// Related by tags
		if ( get_theme_mod( 'related-posts','categories' ) == 'tags' ) {
		
			$tags = get_post_meta($post->ID, 'related-tag', true);
			
			if ( !$tags ) {
				$tags = wp_get_post_tags($post->ID, array('fields'=>'ids'));
				$args['tag__in'] = $tags;
			} else {
				$args['tag_slug__in'] = explode(',', $tags);
			}
			if ( !$tags ) { $break = true; }
		}
		
		$query = !isset($break)?new WP_Query($args):new WP_Query;
		return $query;
	}
	
}


/*  Get featured post ids
/* ------------------------------------ */
if ( ! function_exists( 'typeflow_get_featured_post_ids' ) ) {

	function typeflow_get_featured_post_ids() {
		$args = array(
			'category'		=> absint( get_theme_mod('featured-category','') ),
			'numberposts'	=> absint( get_theme_mod('featured-posts-count','4')),
		);
		$posts = get_posts($args);
		if ( !$posts ) return false;
		foreach ( $posts as $post )
			$ids[] = $post->ID;
		return $ids;
	}
	
}


/* ------------------------------------------------------------------------- *
 *  Filters
/* ------------------------------------------------------------------------- */

/*  Body class
/* ------------------------------------ */
if ( ! function_exists( 'typeflow_body_class' ) ) {
	
	function typeflow_body_class( $classes ) {
		if ( get_theme_mod( 'boxed','off' ) != 'on' ) { $classes[] = 'full-width'; }
		if ( get_theme_mod( 'boxed','off' ) == 'on' ) { $classes[] = 'boxed'; }
		if ( has_nav_menu( 'mobile' ) ) { $classes[] = 'mobile-menu'; }
		if ( get_theme_mod( 'dark-theme' ,'off' ) == 'on' ) { $classes[] = 'dark'; }
		if ( get_theme_mod( 'invert-logo' ,'on' ) == 'on' ) { $classes[] = 'invert-dark-logo'; }
		if ( get_theme_mod( 'dotted-pattern' ,'off' ) == 'on' ) { $classes[] = 'dotted-pattern'; }
		if (! ( is_user_logged_in() ) ) { $classes[] = 'logged-out'; }
		return $classes;
	}
	
}
add_filter( 'body_class', 'typeflow_body_class' );


/*  Excerpt ending
/* ------------------------------------ */
if ( ! function_exists( 'typeflow_excerpt_more' ) ) {

	function typeflow_excerpt_more( $more ) {
		if ( is_admin() ) {
			return $more;
		}
		return '&#46;&#46;&#46;';
	}
	
}
add_filter( 'excerpt_more', 'typeflow_excerpt_more' );


/*  Excerpt length
/* ------------------------------------ */
if ( ! function_exists( 'typeflow_excerpt_length' ) ) {

	function typeflow_excerpt_length( $length ) {
		if ( is_admin() ) {
			return $length;
		}

		$new_length = $length;
		$custom_length = get_theme_mod( 'excerpt-length', '20' );
		if ( absint( $custom_length ) > 0 ) {
			$new_length = absint( $custom_length );
		}
		return $new_length;
	}
	
}
add_filter( 'excerpt_length', 'typeflow_excerpt_length', 999 );


/*  Comments avatar size
/* ------------------------------------ */
if ( ! function_exists( 'typeflow_comments_avatar_size' ) ) {
	
	function typeflow_comments_avatar_size( $args ) {
		$args['avatar_size'] = 64;
		return $args;
	}
	
}
add_filter( 'wp_list_comments_args', 'typeflow_comments_avatar_size' );


/* ------------------------------------------------------------------------- *
 *  Actions
/* ------------------------------------------------------------------------- */	

/*  Include or exclude featured articles in loop
/* ------------------------------------ */
if ( ! function_exists( 'typeflow_pre_get_posts' ) ) {

	function typeflow_pre_get_posts( $query ) {
		// Are we on main query ?
		if ( !$query->is_main_query() ) return;
		if ( $query->is_home() ) {

			// Featured posts enabled
			if ( get_theme_mod('featured-posts-count','4') != '0' ) {
				// Get featured post ids
				$featured_post_ids = typeflow_get_featured_post_ids();
				// Exclude posts
				if ( $featured_post_ids && get_theme_mod('featured-posts-include','off') =='on' )
					$query->set('post__not_in', $featured_post_ids);
			}
		}
	}
	
}
add_action( 'pre_get_posts', 'typeflow_pre_get_posts' );


/*  Script for no-js / js class
/* ------------------------------------ */
if ( ! function_exists( 'typeflow_html_js_class' ) ) {

	function typeflow_html_js_class () {
		echo '<script>document.documentElement.className = document.documentElement.className.replace("no-js","js");</script>'. "\n";
	}
	
}
add_action( 'wp_head', 'typeflow_html_js_class', 1 );


/*  Admin panel css
/* ------------------------------------ */
if ( ! function_exists( 'typeflow_admin_panel_css' ) ) {
	
	function typeflow_admin_panel_css() {
		global $pagenow;
		if ( 'post.php' === $pagenow || 'post-new.php' === $pagenow ) {
			echo '<style>
				.rwmb-image-select { width: auto!important; height: auto!important; }
				.rwmb-text { width: 100%; }
			</style>';
		}
	}

}
add_action( 'admin_head', 'typeflow_admin_panel_css' );


/*  TGM plugin activation
/* ------------------------------------ */
if ( ! function_exists( 'typeflow_plugins' ) ) {
	
	function typeflow_plugins() {	
		if ( get_theme_mod('recommended-plugins','on') =='on' ) { 	
			// Add the following plugins
			$plugins = array(
				array(
					'name' => esc_html__( 'Alx Extensions', 'typeflow' ),
					'slug' => 'alx-extensions',
				),
				array(
					'name' => esc_html__( 'Meta Box', 'typeflow' ),
					'slug' => 'meta-box',
				),
				array(
					'name' => esc_html__( 'Regenerate Thumbnails', 'typeflow' ),
					'slug' => 'regenerate-thumbnails',
				),
				array(
					'name' => esc_html__( 'WP-PageNavi', 'typeflow' ),
					'slug' => 'wp-pagenavi',
				)
			);	
			tgmpa( $plugins );
		}
	}
	
}
add_action( 'tgmpa_register', 'typeflow_plugins' );


/*  WooCommerce basic support
/* ------------------------------------ */
function typeflow_wc_wrapper_start() {
	echo '<div class="stickywrap-container">';
}
function typeflow_wc_wrapper_end() {
	echo '</div>';
}
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
add_action('woocommerce_before_main_content', 'typeflow_wc_wrapper_start', 10);
add_action('woocommerce_after_main_content', 'typeflow_wc_wrapper_end', 10);


/*  Accessibility IE11 fix - https://git.io/vWdr2
/* ------------------------------------ */
function typeflow_skip_link_focus_fix() {
	?>
	<script>
	/(trident|msie)/i.test(navigator.userAgent)&&document.getElementById&&window.addEventListener&&window.addEventListener("hashchange",function(){var t,e=location.hash.substring(1);/^[A-z0-9_-]+$/.test(e)&&(t=document.getElementById(e))&&(/^(?:a|select|input|button|textarea)$/i.test(t.tagName)||(t.tabIndex=-1),t.focus())},!1);
	</script>
	<?php
}
add_action( 'wp_print_footer_scripts', 'typeflow_skip_link_focus_fix' );
