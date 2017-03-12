<?php
/**
 * the towing theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package the_towing_theme
 */

if ( ! function_exists( 'the_towing_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function the_towing_theme_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on the towing theme, use a find and replace
	 * to change 'the-towing-theme' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'the-towing-theme', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size('recennt', 230, 150, false);
    add_image_size('blog-post-thumbnail', 800, 800, false);
//    add_image_size('post-thumbnail');
    add_image_size('page-hero', 1920, 900, false);


	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'main-menu' => esc_html__( 'Primary', 'the-towing-theme' ),
        'secondary-menu' => esc_html__( 'Secondary', 'the-towing-theme' ),
        'footer-menu' => esc_html__( 'Footer', 'the-towing-theme' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'the_towing_theme_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'the_towing_theme_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function the_towing_theme_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'the_towing_theme_content_width', 640 );
}
add_action( 'after_setup_theme', 'the_towing_theme_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function the_towing_theme_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'the-towing-theme' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'the-towing-theme' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="widget-title">',
		'after_title'   => '</h4>',
	) );
    register_sidebar( array(
        'name'          => esc_html__( 'Sidebar 2', 'the-towing-theme' ),
        'id'            => 'sidebar-2',
        'description'   => esc_html__( 'Add widgets here.', 'the-towing-theme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer left', 'the-towing-theme' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'the-towing-theme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer left 2', 'the-towing-theme' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'the-towing-theme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer right', 'the-towing-theme' ),
        'id'            => 'footer-3',
        'description'   => esc_html__( 'Add widgets here.', 'the-towing-theme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer right 2', 'the-towing-theme' ),
        'id'            => 'footer-4',
        'description'   => esc_html__( 'Add widgets here.', 'the-towing-theme' ),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}
add_action( 'widgets_init', 'the_towing_theme_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function the_towing_theme_scripts() {
    $lib = '/assets/lib/node_modules/';
    //normalize
    wp_enqueue_style('the-towing-theme-normalize', get_stylesheet_directory_uri() . '/assets/css/normalize.css', [], microtime());
    //bootstrap
    wp_enqueue_style('the-towing-theme-bs', get_stylesheet_directory_uri() . $lib .'/bootstrap/dist/css/bootstrap.min.css', [], microtime());
    wp_enqueue_style('the-towing-theme-bs-theme', get_stylesheet_directory_uri() . $lib .'/bootstrap/dist/css/bootstrap-theme.min.css', [], microtime());
//    //mdb
//    wp_enqueue_style('the-towing-theme-mdb', get_stylesheet_directory_uri() . $lib .'/bootstrap-material-design/dist/css/bootstrap-material-design.min.css', [], microtime());
//    wp_enqueue_style('the-towing-theme-ripples', get_stylesheet_directory_uri() . $lib .'/bootstrap-material-design/dist/css/ripples.min.css', [], microtime());
    //slick slider
    wp_enqueue_style('the-towing-theme-slick', get_stylesheet_directory_uri() . '/assets/lib/slick/css/slick.css', [], microtime());
    wp_enqueue_style('the-towing-theme-slick-theme', get_stylesheet_directory_uri() . '/assets/lib/slick/css/slick-theme.css', [], microtime());

    //fontawesome
    wp_enqueue_style('amf-fontawesome', get_stylesheet_directory_uri() . '/assets/fonts/font-awesome/css/font-awesome.min.css', [], microtime());
    //Hamburgers Menu
    wp_enqueue_style('the-towing-theme-hamburger', get_stylesheet_directory_uri() . '/assets/css/hamburgers.min.css', [], microtime());
    //main style
    wp_enqueue_style( 'the-towing-theme-style', get_stylesheet_uri() );

    //scripts
    //bootstrap
    wp_enqueue_script( 'the-towing-theme-bs-script', get_template_directory_uri() . $lib . '/bootstrap/dist/js/bootstrap.min.js', array('jquery'), microtime(), true );
//    //mdb
//    wp_enqueue_script( 'the-towing-theme-md-script', get_template_directory_uri() . $lib . '/bootstrap-material-design/dist/js/material.min.js', array('jquery'), microtime(), true );
    //slick slider
    wp_enqueue_script( 'the-towing-theme-slick-script', get_template_directory_uri() . '/assets/lib/slick/js/slick.min.js', array('jquery'), microtime(), true );

    //main js file
    wp_enqueue_script( 'the-towing-theme-main-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), microtime(), true );

    wp_enqueue_script( 'the-towing-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'the-towing-theme-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'the_towing_theme_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';
require get_template_directory() . '/inc/coinso_customizer.php';


/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';


function themeInit()
{
    /**
     * hide the admin bar
     */
//	add_filter('show_admin_bar', '__return_false');

    /**
     * ACF setup
     */
    // 1. customize ACF path
    add_filter('acf/settings/path', 'my_acf_settings_path');
    function my_acf_settings_path($path)
    {
        $path = get_template_directory() . '/inc/plugins/acf/';
        return $path;
    }

    // 2. customize ACF dir
    add_filter('acf/settings/dir', 'my_acf_settings_dir');
    function my_acf_settings_dir($dir)
    {
        $dir = get_stylesheet_directory_uri() . '/inc/plugins/acf/';
        return $dir;
    }

    // 3. Hide ACF field group menu item
    //add_filter('acf/settings/show_admin', '__return_false');

    // 4. Include ACF
    include_once(get_template_directory() . '/inc/plugins/acf/acf.php');

    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title' => __('Theme Options', 'the-towing-theme'),
            'menu_title' => __('Theme Options', 'the-towing-theme'),
            'menu_slug' => __('theme-options', 'the-towing-theme')
        ));
    }

    add_filter('acf/settings/save_json', 'my_acf_json_save_point');
    function my_acf_json_save_point($path)
    {
        $path = get_template_directory() . '/inc/plugins/acf_json';

        return $path;
    }

    add_filter('acf/settings/load_json', 'my_acf_json_load_point');

    function my_acf_json_load_point($paths)
    {
        unset($paths[0]);
        $paths[] = get_stylesheet_directory() . '/inc/plugins/acf_json';
        //wp_die(var_dump($paths));
        return $paths;
    }

    //acf fields and options
    include_once(get_template_directory() . '/inc/plugins/acf-repeater-editor-accordion/acf-repeater-accordion.php');
    include_once(get_template_directory() . '/inc/plugins/sliders-fields/acf-sliders.php');


}

add_action('after_setup_theme', 'themeInit', 0);

// require all custom post types
function add_all_post_types(){
    $post_type_path = get_template_directory() .'/inc/post_types/*.php';
    $files = glob($post_type_path);
    foreach ($files as $file){
        include_once($file);
    }

    return $files;
}


add_action('after_setup_theme', 'add_all_post_types', 0);

function wpdocs_excerpt_more( $more ) {
    return '<a href="'.get_the_permalink().'" rel="nofollow"> Read More...</a>';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );



/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 35;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );



function register_coinso_local_schema(){
    add_shortcode('localbusiness', 'coinso_local_schema');
}
function coinso_local_schema($args, $content){
   ob_start();?>

    <div id="footer-disclaimer">

        <div itemscope itemtype="http://schema.org/<?php echo get_theme_mod(__('schema_type'));?>">
            <ul class="footer-list">
                <li>
                    <div class="footer-logo">
                        <a itemprop="url" href="<?php echo get_home_url(); ?>" alt="<?php echo get_bloginfo('name'); ?>"  title="<?php echo get_bloginfo('name'); ?>">
                        <span itemprop="logo" itemtype="https://schema.org/ImageObject">
                            <img src="<?php echo get_template_directory_uri() . '/assets/img/logo_small.png' ;?>" alt="<?php echo get_bloginfo('name'); ?>" itemprop="image">
                        </span>
                        </a>
                    </div>
                </li>

                <li>
                    <div class="footer-company-info">
                        <span itemprop="name"><?php echo get_theme_mod(__('schema_brand_name')); ?></span><br>
                        <span itemprop="description"><?php echo get_theme_mod(__('schema_brand_description')); ?></span>
                    </div>
                </li>
                <li class="inline-block">
                    <div class="footer-address">
                        <div class="description" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                            <i class="fa fa-home">&nbsp</i>
                            <span itemprop="streetAddress"><?php echo get_theme_mod(__('schema_street_address')); ?></span>,<br>
                            <span itemprop="addressLocality"><?php echo get_theme_mod(__('schema_city')); ?>, </span>
                            <span itemprop="addressRegion"><?php echo get_theme_mod(__('schema_region')); ?>, </span>
                            <span itemprop="postalCode"><?php echo get_theme_mod(__('schema_zip')); ?></span>
                        </div>
                    </div>
                </li>
                <li class="inline-block">
                    <div class="footer-phone"><i class="fa fa-phone">&nbsp</i>
                        <span itemprop="telephone"><?php echo get_theme_mod('schema_phone_number');?></span>

                    </div>
                </li>
                <li class="inline-block">
                    <div class="footer-hours"><i class="fa fa-clock-o">&nbsp</i>
                        <?php if(have_rows('company_opening_hours','options') ):
                            while( have_rows('company_opening_hours','options')): the_row();?>
                                <time itemprop="openingHours" datetime="<?php the_sub_field('opening_hours_day','options');?>"><?php the_sub_field('opening_hours_time','options');?></time>
                            <?php endwhile; endif;?>
                    </div>
                </li>
            </ul>

            <div class="footer-social-icons">
                <ul class="list-inline">
                    <li><a href="<?php the_field('company_fb','options');?>" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i> </a></li>
                    <li><a href="<?php the_field('company_twitter','options');?>" target="_blank" rel="nofollow"><i class="fa fa-twitter"></i> </a></li>
                    <li><a href="<?php the_field('company_gmb','options');?>" target="_blank" rel="nofollow"><i class="fa fa-google-plus"></i> </a></li>
                    <li><a href="<?php the_field('company_yelp','options');?>" target="_blank" rel="nofollow"><i class="fa fa-yelp"></i> </a></li>
                </ul>
            </div>


            <div class="clear"></div>
        </div>



    </div><!-- #footer-disclaimer -->
<?php return ob_get_clean();
}

add_action('init','register_coinso_local_schema');