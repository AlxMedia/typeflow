<?php
if ( ! class_exists( 'Kirki' ) ) {
	return;
}

/*  Add Config
/* ------------------------------------ */
Kirki::add_config( 'typeflow', array(
	'capability'    => 'edit_theme_options',
	'option_type'   => 'theme_mod',
) );

/*  Add Links
/* ------------------------------------ */
Kirki::add_section( 'morelink', array(
	'title'       => esc_html__( 'AlxMedia', 'typeflow' ),
	'type'        => 'link',
	'button_text' => esc_html__( 'View More Themes', 'typeflow' ),
	'button_url'  => 'http://alx.media/themes/',
	'priority'    => 13,
) );
Kirki::add_section( 'reviewlink', array(
	'title'       => esc_html__( 'Like This Theme?', 'typeflow' ),
	'panel'       => 'options',
	'type'        => 'link',
	'button_text' => esc_html__( 'Write a Review', 'typeflow' ),
	'button_url'  => 'https://wordpress.org/support/theme/typeflow/reviews/#new-post',
	'priority'    => 1,
) );

/*  Add Panels
/* ------------------------------------ */
Kirki::add_panel( 'options', array(
    'priority'    => 10,
    'title'       => esc_html__( 'Theme Options', 'typeflow' ),
) );

/*  Add Sections
/* ------------------------------------ */
Kirki::add_section( 'general', array(
    'priority'    => 10,
    'title'       => esc_html__( 'General', 'typeflow' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'blog', array(
    'priority'    => 20,
    'title'       => esc_html__( 'Blog', 'typeflow' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'header', array(
    'priority'    => 30,
    'title'       => esc_html__( 'Header', 'typeflow' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'footer', array(
    'priority'    => 40,
    'title'       => esc_html__( 'Footer', 'typeflow' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'social', array(
    'priority'    => 70,
    'title'       => esc_html__( 'Social Links', 'typeflow' ),
	'panel'       => 'options',
) );
Kirki::add_section( 'styling', array(
    'priority'    => 80,
    'title'       => esc_html__( 'Styling', 'typeflow' ),
	'panel'       => 'options',
) );

/*  Add Fields
/* ------------------------------------ */

// General: Recommended Plugins
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'recommended-plugins',
	'label'			=> esc_html__( 'Recommended Plugins', 'typeflow' ),
	'description'	=> esc_html__( 'Enable or disable the recommended plugins notice', 'typeflow' ),
	'section'		=> 'general',
	'default'		=> 'on',
) );
// Blog: Featured Section
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'featured-section',
	'label'			=> esc_html__( 'Featured Section', 'typeflow' ),
	'description'	=> esc_html__( 'Enable or disable the entire featured section', 'typeflow' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Featured Posts Include
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'featured-posts-include',
	'label'			=> esc_html__( 'Featured Posts Exclude', 'typeflow' ),
	'description'	=> esc_html__( 'Exclude featured posts from the content below', 'typeflow' ),
	'section'		=> 'blog',
	'default'		=> 'off',
) );
// Blog: Featured Category
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'select',
	'settings'		=> 'featured-category',
	'label'			=> esc_html__( 'Featured Category', 'typeflow' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'typeflow' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'typeflow' ),
) );
// Blog: Featured Post Count
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'featured-posts-count',
	'label'			=> esc_html__( 'Featured Post Count', 'typeflow' ),
	'description'	=> esc_html__( 'Max number of featured posts to display. Set it to 0 to disable', 'typeflow' ),
	'section'		=> 'blog',
	'default'		=> '4',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '10',
		'step'	=> '1',
	),
) );
// Blog: Highlight Category
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'select',
	'settings'		=> 'highlight-category',
	'label'			=> esc_html__( 'Highlight Category', 'typeflow' ),
	'description'	=> esc_html__( 'By not selecting a category, it will show your latest post(s) from all categories', 'typeflow' ),
	'section'		=> 'blog',
	'default'		=> '',
	'choices'		=> Kirki_Helper::get_terms( 'category' ),
	'placeholder'	=> esc_html__( 'Select a category', 'typeflow' ),
) );
// Blog: Highlights Category Count
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'highlight-posts-count',
	'label'			=> esc_html__( 'Highlight Post Count', 'typeflow' ),
	'description'	=> esc_html__( 'Max number of highlight posts to display. Set it to 0 to disable.', 'typeflow' ),
	'section'		=> 'blog',
	'default'		=> '4',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '12',
		'step'	=> '1',
	),
) );
// Blog: Search
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'featured-search',
	'label'			=> esc_html__( 'Search Field', 'typeflow' ),
	'description'	=> esc_html__( 'Featured section search field', 'typeflow' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Excerpt Length
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'excerpt-length',
	'label'			=> esc_html__( 'Excerpt Length', 'typeflow' ),
	'description'	=> esc_html__( 'Max number of words. Set it to 0 to disable.', 'typeflow' ),
	'section'		=> 'blog',
	'default'		=> '20',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '100',
		'step'	=> '1',
	),
) );
// Blog: Comment Count
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'comment-count',
	'label'			=> esc_html__( 'Comment Count', 'typeflow' ),
	'description'	=> esc_html__( 'Comment count with bubbles', 'typeflow' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Featured Image
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-featured-image',
	'label'			=> esc_html__( 'Single - Featured Image', 'typeflow' ),
	'description'	=> esc_html__( 'Auto-display featured image in the blog header', 'typeflow' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Authorbox
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'author-bio',
	'label'			=> esc_html__( 'Single - Author Bio', 'typeflow' ),
	'description'	=> esc_html__( 'Shows post author description, if it exists', 'typeflow' ),
	'section'		=> 'blog',
	'default'		=> 'on',
) );
// Blog: Single - Post Navigation
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'post-nav',
	'label'			=> esc_html__( 'Single - Post Navigation', 'typeflow' ),
	'description'	=> esc_html__( 'Shows links to the next and previous article', 'typeflow' ),
	'section'		=> 'blog',
	'default'		=> 'content',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'typeflow' ),
		'content'	=> esc_html__( 'Below content', 'typeflow' ),
	),
) );
// Blog: Single - Related Posts
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'radio',
	'settings'		=> 'related-posts',
	'label'			=> esc_html__( 'Single - Related Posts', 'typeflow' ),
	'description'	=> esc_html__( 'Shows randomized related articles below the post', 'typeflow' ),
	'section'		=> 'blog',
	'default'		=> 'categories',
	'choices'		=> array(
		'disable'	=> esc_html__( 'Disable', 'typeflow' ),
		'categories'=> esc_html__( 'Related by categories', 'typeflow' ),
		'tags'		=> esc_html__( 'Related by tags', 'typeflow' ),
	),
) );
// Header: Profile Avatar
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'image',
	'settings'		=> 'profile-image',
	'label'			=> esc_html__( 'Profile Image', 'typeflow' ),
	'description'	=> esc_html__( 'Square size ', 'typeflow' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Name
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'text',
	'settings'		=> 'profile-name',
	'label'			=> esc_html__( 'Profile Name', 'typeflow' ),
	'description'	=> esc_html__( 'Your name appears beside the image', 'typeflow' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Profile Description
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'textarea',
	'settings'		=> 'profile-description',
	'label'			=> esc_html__( 'Profile Description', 'typeflow' ),
	'description'	=> esc_html__( 'A short description of you', 'typeflow' ),
	'section'		=> 'header',
	'default'		=> '',
) );
// Header: Social Links
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'header-social',
	'label'			=> esc_html__( 'Header Social Links', 'typeflow' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'typeflow' ),
	'section'		=> 'header',
	'default'		=> 'on',
) );
// Footer: Widget Columns
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'radio-image',
	'settings'		=> 'footer-widgets',
	'label'			=> esc_html__( 'Footer Widget Columns', 'typeflow' ),
	'description'	=> esc_html__( 'Select columns to enable footer widgets. Recommended number: 3', 'typeflow' ),
	'section'		=> 'footer',
	'default'		=> '0',
	'choices'     => array(
		'0'	=> get_template_directory_uri() . '/functions/images/layout-off.png',
		'1'	=> get_template_directory_uri() . '/functions/images/footer-widgets-1.png',
		'2'	=> get_template_directory_uri() . '/functions/images/footer-widgets-2.png',
		'3'	=> get_template_directory_uri() . '/functions/images/footer-widgets-3.png',
		'4'	=> get_template_directory_uri() . '/functions/images/footer-widgets-4.png',
	),
) );
// Footer: Social Links
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'footer-social',
	'label'			=> esc_html__( 'Footer Social Links', 'typeflow' ),
	'description'	=> esc_html__( 'Social link icon buttons', 'typeflow' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Footer: Custom Logo
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'image',
	'settings'		=> 'footer-logo',
	'label'			=> esc_html__( 'Footer Logo', 'typeflow' ),
	'description'	=> esc_html__( 'Upload your custom logo image', 'typeflow' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Copyright
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'text',
	'settings'		=> 'copyright',
	'label'			=> esc_html__( 'Footer Copyright', 'typeflow' ),
	'description'	=> esc_html__( 'Replace the footer copyright text', 'typeflow' ),
	'section'		=> 'footer',
	'default'		=> '',
) );
// Footer: Credit
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'credit',
	'label'			=> esc_html__( 'Footer Credit', 'typeflow' ),
	'description'	=> esc_html__( 'Footer credit text', 'typeflow' ),
	'section'		=> 'footer',
	'default'		=> 'on',
) );
// Social Links: List
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'repeater',
	'label'			=> esc_html__( 'Create Social Links', 'typeflow' ),
	'description'	=> esc_html__( 'Create and organize your social links', 'typeflow' ),
	'section'		=> 'social',
	'tooltip'		=> esc_html__( 'Font Awesome names:', 'typeflow' ) . ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'typeflow' ) . ' </strong></a>',
	'row_label'		=> array(
		'type'	=> 'text',
		'value'	=> esc_html__('social link', 'typeflow' ),
	),
	'settings'		=> 'social-links',
	'default'		=> '',
	'fields'		=> array(
		'social-title'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Title', 'typeflow' ),
			'description'	=> esc_html__( 'Ex: Facebook', 'typeflow' ),
			'default'		=> '',
		),
		'social-icon'	=> array(
			'type'			=> 'text',
			'label'			=> esc_html__( 'Icon Name', 'typeflow' ),
			'description'	=> esc_html__( 'Font Awesome icons. Ex: fa-facebook ', 'typeflow' ) . ' <a href="https://fontawesome.com/search?o=r&m=free&f=brands" target="_blank"><strong>' . esc_html__( 'View All', 'typeflow' ) . ' </strong></a>',
			'default'		=> 'fa-',
		),
		'social-link'	=> array(
			'type'			=> 'link',
			'label'			=> esc_html__( 'Link', 'typeflow' ),
			'description'	=> esc_html__( 'Enter the full url for your icon button', 'typeflow' ),
			'default'		=> 'http://',
		),
		'social-color'	=> array(
			'type'			=> 'color',
			'label'			=> esc_html__( 'Icon Color', 'typeflow' ),
			'description'	=> esc_html__( 'Set a unique color for your icon (optional)', 'typeflow' ),
			'default'		=> '',
		),
		'social-target'	=> array(
			'type'			=> 'checkbox',
			'label'			=> esc_html__( 'Open in new window', 'typeflow' ),
			'default'		=> false,
		),
	)
) );
// Styling: Enable
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dynamic-styles',
	'label'			=> esc_html__( 'Dynamic Styles', 'typeflow' ),
	'description'	=> esc_html__( 'Turn on to use the styling options below', 'typeflow' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Font
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'select',
	'settings'		=> 'font',
	'label'			=> esc_html__( 'Font', 'typeflow' ),
	'description'	=> esc_html__( 'Select font for the theme', 'typeflow' ),
	'section'		=> 'styling',
	'default'		=> 'inter',
	'choices'     => array(
		'titillium-web-ext'		=> esc_html__( 'Titillium Web, Latin-Ext', 'typeflow' ),
		'droid-serif'			=> esc_html__( 'Droid Serif, Latin', 'typeflow' ),
		'source-sans-pro'		=> esc_html__( 'Source Sans Pro, Latin-Ext', 'typeflow' ),
		'lato'					=> esc_html__( 'Lato, Latin', 'typeflow' ),
		'raleway'				=> esc_html__( 'Raleway, Latin', 'typeflow' ),
		'inter'					=> esc_html__( 'Inter, Latin', 'typeflow' ),
		'ubuntu'				=> esc_html__( 'Ubuntu, Latin-Ext', 'typeflow' ),
		'ubuntu-cyr'			=> esc_html__( 'Ubuntu, Latin / Cyrillic-Ext', 'typeflow' ),
		'roboto'				=> esc_html__( 'Roboto, Latin-Ext', 'typeflow' ),
		'roboto-cyr'			=> esc_html__( 'Roboto, Latin / Cyrillic-Ext', 'typeflow' ),
		'roboto-condensed'		=> esc_html__( 'Roboto Condensed, Latin-Ext', 'typeflow' ),
		'roboto-condensed-cyr'	=> esc_html__( 'Roboto Condensed, Latin / Cyrillic-Ext', 'typeflow' ),
		'roboto-slab'			=> esc_html__( 'Roboto Slab, Latin-Ext', 'typeflow' ),
		'roboto-slab-cyr'		=> esc_html__( 'Roboto Slab, Latin / Cyrillic-Ext', 'typeflow' ),
		'playfair-display'		=> esc_html__( 'Playfair Display, Latin-Ext', 'typeflow' ),
		'playfair-display-cyr'	=> esc_html__( 'Playfair Display, Latin / Cyrillic', 'typeflow' ),
		'open-sans'				=> esc_html__( 'Open Sans, Latin-Ext', 'typeflow' ),
		'open-sans-cyr'			=> esc_html__( 'Open Sans, Latin / Cyrillic-Ext', 'typeflow' ),
		'pt-serif'				=> esc_html__( 'PT Serif, Latin-Ext', 'typeflow' ),
		'pt-serif-cyr'			=> esc_html__( 'PT Serif, Latin / Cyrillic-Ext', 'typeflow' ),
		'arial'					=> esc_html__( 'Arial', 'typeflow' ),
		'georgia'				=> esc_html__( 'Georgia', 'typeflow' ),
		'verdana'				=> esc_html__( 'Verdana', 'typeflow' ),
		'tahoma'				=> esc_html__( 'Tahoma', 'typeflow' ),
	),
) );
// Styling: Container Width
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'container-width',
	'label'			=> esc_html__( 'Website Max-width', 'typeflow' ),
	'description'	=> esc_html__( 'Max-width of the container with boxed layout.', 'typeflow' ),
	'section'		=> 'styling',
	'default'		=> '920',
	'choices'     => array(
		'min'	=> '720',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Content Max-width
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'content-width',
	'label'			=> esc_html__( 'Content Max-width', 'typeflow' ),
	'description'	=> esc_html__( 'Max-width of the content on posts and pages', 'typeflow' ),
	'section'		=> 'styling',
	'default'		=> '590',
	'choices'     => array(
		'min'	=> '400',
		'max'	=> '1920',
		'step'	=> '1',
	),
) );
// Styling: Header Logo Max-height
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'logo-max-height',
	'label'			=> esc_html__( 'Header Logo Image Max-height', 'typeflow' ),
	'description'	=> esc_html__( 'Your logo image should have the double height of this to be high resolution', 'typeflow' ),
	'section'		=> 'styling',
	'default'		=> '60',
	'choices'     => array(
		'min'	=> '40',
		'max'	=> '200',
		'step'	=> '1',
	),
) );
// Styling: Dark
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'dark-theme',
	'label'			=> esc_html__( 'Dark Theme', 'typeflow' ),
	'description'	=> esc_html__( 'Use dark instead of light base', 'typeflow' ),
	'section'		=> 'styling',
	'default'		=> 'off',
) );
// Styling: Theme Toggle
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'theme-toggle',
	'label'			=> esc_html__( 'Light/Dark Theme Toggle', 'typeflow' ),
	'description'	=> esc_html__( 'Do not use with dark theme enabled', 'typeflow' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Invert Dark Logo
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'switch',
	'settings'		=> 'invert-logo',
	'label'			=> esc_html__( 'Invert Dark Logo Color', 'typeflow' ),
	'description'	=> esc_html__( 'Change color for the logo in dark mode', 'typeflow' ),
	'section'		=> 'styling',
	'default'		=> 'on',
) );
// Styling: Thumbnail Border Radius
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'slider',
	'settings'		=> 'thumb-border-radius',
	'label'			=> esc_html__( 'Thumbnail Border Radius', 'typeflow' ),
	'description'	=> esc_html__( 'Set to 0 for default radiuses', 'typeflow' ),
	'section'		=> 'styling',
	'default'		=> '0',
	'choices'     => array(
		'min'	=> '0',
		'max'	=> '60',
		'step'	=> '1',
	),
) );
// Styling: Gradient Left
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'color',
	'settings'		=> 'gradient-left',
	'label'			=> esc_html__( 'Gradient Left', 'typeflow' ),
	'section'		=> 'styling',
	'default'		=> '#1e73be',
) );
// Styling: Gradient Right
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'color',
	'settings'		=> 'gradient-right',
	'label'			=> esc_html__( 'Gradient Right', 'typeflow' ),
	'section'		=> 'styling',
	'default'		=> '#6ab7fb',
) );
// Styling: Background Color
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-background',
	'label'			=> esc_html__( 'Background Color', 'typeflow' ),
	'section'		=> 'styling',
	'default'		=> '#1e1e1e',
) );
// Styling: Background Color Border
Kirki::add_field( 'typeflow_theme', array(
	'type'			=> 'color',
	'settings'		=> 'color-background-border',
	'label'			=> esc_html__( 'Background Color Border', 'typeflow' ),
	'section'		=> 'styling',
	'default'		=> '#000000',
) );