<?php
/**
 * drshafaee functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package drshafaee
 */
define( '_S_VERSION', '1.0.23' );

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function drshafaee_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on drshafaee, use a find and replace
		* to change 'drshafaee' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'drshafaee', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'drshafaee' ),
		),
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'drshafaee_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'drshafaee_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function drshafaee_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'drshafaee_content_width', 640 );
}
add_action( 'after_setup_theme', 'drshafaee_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function drshafaee_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'drshafaee' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'drshafaee' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'drshafaee_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function drshafaee_scripts() {
	wp_enqueue_style( 'drshafaee-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'drshafaee-style', 'rtl', 'replace' );
	wp_enqueue_script('jquery');
	wp_enqueue_script( 'drshafaee-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'header-control', get_template_directory_uri() . '/js/headercontrol.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'hospital', get_template_directory_uri() . '/js/hospital.js', array(), _S_VERSION, true );
	// if(is_page_template( array('page-templates/portfolio-template.php') )){
	if(is_post_type_archive('portfolio')){
		wp_enqueue_style( 'lg-style', get_template_directory_uri() . '/lg/css/lightgallery-bundle.css', array(), _S_VERSION );
		wp_enqueue_script( 'lg-script', get_template_directory_uri() . '/lg/lightgallery.min.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'lg-zoom', get_template_directory_uri() . '/lg/plugins/zoom/lg-zoom.min.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'lg-thumbnail', get_template_directory_uri() . '/lg/plugins/thumbnail/lg-thumbnail.min.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'lg-hash', get_template_directory_uri() . '/lg/plugins/hash/lg-hash.min.js', array(), _S_VERSION, true );
		wp_enqueue_script( 'portfolio-script', get_template_directory_uri() . '/js/portfolio.js', array(), _S_VERSION, true );
		
	}

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'drshafaee_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function bbloomer_shop_product_short_description() {
	the_excerpt();
}
function my_excerpt_length($length){
	return 30;
}
add_filter('excerpt_length', 'my_excerpt_length');

function new_excerpt_more( $more ) {
	return ' ... ';
}
add_filter('excerpt_more', 'new_excerpt_more');

add_filter('comment_form_default_fields', 'unset_url_field');
function unset_url_field($fields){
    if(isset($fields['url']))
       unset($fields['url']);
       return $fields;
}
function convert_to_number($string) {
    $persian = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    $arabic = ['٩', '٨', '٧', '٦', '٥', '٤', '٣', '٢', '١','٠'];
    $num = range(0, 9);
    $convertedPersianNums = str_replace($persian, $num, $string);
    $englishNumbersOnly = str_replace($arabic, $num, $convertedPersianNums);
    return $englishNumbersOnly;
}
function convert_day_to_weekday($day){
	switch($day){
		case 'Sat':
			return 'شنبه';
			break;
		case 'Sun':
			return 'یکشنبه';
			break;
		case 'Mon':
			return 'دوشنبه';
			break;
		case 'Tue':
			return 'سه‌شنبه';
			break;
		case 'Wed':
			return 'چهارشنبه';
			break;
		case 'Thu':
			return 'پنجشنبه';
			break;
		case 'Fri':
			return 'جمعه';
			break;
	}
}
function convert_month_to_name($month){
	switch($month){
		case '1':
			return 'فروردین';
			break;
		case '2':
			return 'اردیبهشت';
			break;
		case '3':
			return 'خرداد';
			break;
		case '4':
			return 'تیر';
			break;
		case '5':
			return 'مرداد';
			break;
		case '6':
			return 'شهریور';
			break;
		case '7':
			return 'مهر';
			break;
		case '8':
			return 'آبان';
			break;
		case '9':
			return 'آذر';
			break;
		case '10':
			return 'دی';
			break;
		case '11':
			return 'بهمن';
			break;
		case '12':
			return 'اسفند';
			break;
	}
}
add_filter('wpcf7_form_tag_data_option', function($data, $options, $args) {
	if(is_page_template( 'page-templates/appointment-template.php' )){
		wp_enqueue_script( 'persian-date-script', get_template_directory_uri() . '/js/persian-date.min.js' );
		$data = [];
		$availableDates = array();
		$now = new DateTime();
		$formatter = new IntlDateFormatter(
						"fa_IR@calendar=persian", 
						IntlDateFormatter::FULL, 
							IntlDateFormatter::FULL, 
						'Asia/Tehran', 
						IntlDateFormatter::TRADITIONAL, 
						"M");
		$dayformatter = new IntlDateFormatter(
						"fa_IR@calendar=persian", 
						IntlDateFormatter::FULL, 
							IntlDateFormatter::FULL, 
						'Asia/Tehran', 
						IntlDateFormatter::TRADITIONAL, 
						"d");
		for($i=1;$i<=15;$i++){
			$now->modify('+1 day');
			if(intval($now->format('N')) == 1 || intval($now->format('N')) == 3 || intval($now->format('N')) == 6){
				$finalWeekday = convert_day_to_weekday($now->format('D'));
				$finalDay = convert_to_number($dayformatter->format($now));
				$finalMonth = convert_month_to_name(convert_to_number($formatter->format($now)));
				$availableDates[] = $finalWeekday.' '.$finalDay.' '.$finalMonth;
			}
			
		}
		foreach ($options as $option) {
			if ($option === 'available_dates') {
				$data = array_merge($data, $availableDates);
			}
		}
		return $data;
	}
}, 10, 3);

add_filter( 'wpcf7_validate_text*', 'custom_phone_validation_filter', 20, 2 );
 
function custom_phone_validation_filter( $result, $tag ) {
  if ( 'bookPhone' == $tag->name ) {
    $thePhone = isset( $_POST['bookPhone'] ) ? trim( $_POST['bookPhone'] ) : '';
	if(!(preg_match("/^09[0-9]{9}$/", $thePhone))){
		$result->invalidate( $tag, "فرمت شماره همراه صحیح نیست" );
	}
  }
 
  return $result;
}
require_once('custom-functions/portfolio.php');


function pagination_bar() {
	global $wp_query;

	$total_pages = $wp_query->max_num_pages;

	if ($total_pages > 1){
		// $current_page = max(1, get_query_var('paged'));
		global $wp_query;
		$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
		echo paginate_links(array(
			'base' =>@add_query_arg('paged','%#%'),
			'format' => '/page/%#%',
			'current' => $current,
			'total' => $total_pages,
			'next_text' => '<span class="leftArrow"><svg width="12px" height="12px" xmlns="http://www.w3.org/2000/svg" fill="#505050" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><path fill="none" stroke="#505050" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" d="m20.5 26.5-12-12 12-12"></path></svg></span>',
			'prev_text' => '<span class="rightArrow"><svg width="12px" height="12px" xmlns="http://www.w3.org/2000/svg" fill="#505050" id="Layer_1" x="0" y="0" version="1.1" viewBox="0 0 29 29" xml:space="preserve"><path fill="none" stroke="#505050" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="3" d="m8.5 2.5 12 12-12 12"></path></svg></span>'
		));
	}
}


function track_post_views() {
    if (is_single()) {
        $post_id = get_the_ID();
        $views = get_post_meta($post_id, 'post_views', true);

        // Uncomment the next line if you want to allow views from logged-in users as well
        // $user_has_visited = isset($_COOKIE['visited_post_' . $post_id]) || is_user_logged_in();

        $user_has_visited = isset($_COOKIE['visited_post_' . $post_id]);

        if (!$user_has_visited) {
            $views = ($views) ? $views + 1 : 1;
            update_post_meta($post_id, 'post_views', $views);

            // setcookie('visited_post_' . $post_id, 'yes', time() + 24 * 3600, '/');
        }
    }
}

add_action('wp', 'track_post_views');

function display_post_views() {
    $post_id = get_the_ID();
    $views = get_post_meta($post_id, 'post_views', true);
    echo ($views ? $views : 0);
}

add_shortcode('post_views', 'display_post_views');
