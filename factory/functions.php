<?php

/**
 * factory functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package factory
 */

if (!function_exists('factory_setup')) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function factory_setup()
  {
    /*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on factory, use a find and replace
		 * to change 'factory' to the name of your theme in all the template files.
		 */
    load_theme_textdomain('factory', get_template_directory() . '/languages');

    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');

    /*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
    add_theme_support('title-tag');

    /*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
    add_theme_support('post-thumbnails');

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(array(
      'menu-1' => esc_html__('Primary', 'factory'),
    ));

    /*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
    add_theme_support('html5', array(
      'search-form',
      'comment-form',
      'comment-list',
      'gallery',
      'caption',
    ));

    // Set up the WordPress core custom background feature.
    add_theme_support('custom-background', apply_filters('factory_custom_background_args', array(
      'default-color' => 'ffffff',
      'default-image' => '',
    )));

    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support('custom-logo', array(
      'height'      => 250,
      'width'       => 250,
      'flex-width'  => true,
      'flex-height' => true,
    ));
  }
endif;
add_action('after_setup_theme', 'factory_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function factory_content_width()
{
  // This variable is intended to be overruled from themes.
  // Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
  // phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
  $GLOBALS['content_width'] = apply_filters('factory_content_width', 640);
}
add_action('after_setup_theme', 'factory_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function factory_widgets_init()
{
  register_sidebar(array(
    'name'          => esc_html__('Sidebar', 'factory'),
    'id'            => 'sidebar-1',
    'description'   => esc_html__('Add widgets here.', 'factory'),
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h2 class="widget-title">',
    'after_title'   => '</h2>',
  ));
}
add_action('widgets_init', 'factory_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function factory_scripts()
{
  wp_enqueue_style('factory-style', get_stylesheet_uri());

  if (is_singular() && comments_open() && get_option('thread_comments')) {
    wp_enqueue_script('comment-reply');
  }
}
add_action('wp_enqueue_scripts', 'factory_scripts');

/*
 * [template_uri]
 * Return template directry uri.
 * @return string
 */

function template_uri()
{
  return get_template_directory_uri();
}

add_shortcode("template_uri", "template_uri");

/*p tag remove*/
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');

/* Remove p tags from category description */
remove_filter('term_description', 'wpautop');

// breadcrumb
function the_breadcrumb()
{
  $showOnHome       = 1; // 1 - show breadcrumbs on the homepage, 0 - don't show
  $delimiter        = '&nbsp;>&nbsp;'; // delimiter between crumbs
  $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
  $home = 'トップ';
  $before      = '<span class="current">'; // tag before the current crumb
  $after       = '</span>'; // tag after the current crumb

  global $post;
  $homeLink = get_bloginfo('url');

  if (is_home() || is_front_page()) :
    if ($showOnHome == 1) :
      echo '<div class="crumbs"><a href="' . $homeLink . '">' . $home . '</a></div>';
    endif;
  else :
    echo '<div class="crumbs"><a href="' . $homeLink . '">' . $home . '</a> ' . $delimiter . ' ';

    if (is_category()) :
      $thisCat = get_category(get_query_var('cat'), false);
      if ($thisCat->parent != 0) :
        echo get_category_parents($thisCat->parent, true, ' ' . $delimiter . ' ');
      endif;
      echo $before . single_cat_title('', false) . $after;

    elseif (is_search()) :
      echo $before . '「' . get_search_query() . '」で検索した結果' . $after;

    elseif (is_day()) :
      echo '<a href="' . get_year_link(get_the_time('Y 1')) . '">' . get_the_time('Y') . '年</a> ' . $delimiter . ' ';
      echo '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
      echo $before . get_the_time('j') . '日' . $after;

    elseif (is_month()) :
      echo '<a href="' . get_year_link(get_the_time('Y 1')) . '">' . get_the_time('Y') . '年</a> ' . $delimiter . ' ';
      echo $before . get_the_time('F') . $after;

    elseif (is_year()) :
      echo $before . get_the_time('Y') . '年' . $after;

    elseif (is_single() && !is_attachment()) :
      if (get_post_type() != 'post') :
        $post_type = get_post_type_object(get_post_type());
        $slug      = $post_type->rewrite;
        echo '<a href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>';
        if ($showCurrent == 1) :
          echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
        endif;
      else :
        $cat  = get_the_category();
        $cat  = $cat[0];
        $cats = get_category_parents($cat, true, ' ' . $delimiter . ' ');
        if ($showCurrent == 0) :
          $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
        endif;
        echo $cats;
        if ($showCurrent == 1) :
          echo $before . get_the_title() . $after;
        endif;
      endif;

    elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) :
      $post_type = get_post_type_object(get_post_type());
      echo $before . $post_type->labels->singular_name . $after;

    elseif (is_attachment()) :
      $parent = get_post($post->post_parent);
      $cat    = get_the_category($parent->ID);
      $cat    = $cat[0];
      echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
      if ($showCurrent == 1) :
        echo ' ' . $delimiter . ' ' . $before . get_the_title() . $after;
      endif;

    elseif (is_page() && !$post->post_parent) :
      if ($showCurrent == 1) :
        echo $before . get_the_title() . $after;
      endif;

    elseif (is_page() && $post->post_parent) :
      $parent_id   = $post->post_parent;
      $breadcrumbs = array();
      $breadcrumbs = array_reverse($breadcrumbs);
      for ($i = 0; $i < count($breadcrumbs); $i++) :
        echo $breadcrumbs[$i];
        if ($i != count($breadcrumbs) - 1) :
          echo ' ';
        endif;

      endfor;
      if ($showCurrent == 1) :
        echo ' ' . $before . get_the_title() . $after;
      endif;

    elseif (is_tag()) :
      echo $before . '「' . single_tag_title('', false) . '」タグのついた記事' . $after;

    elseif (is_author()) :
      global $author;
      $userdata = get_userdata($author);
      echo $before . '「' . $userdata->display_name . '」による記事' . $after;

    elseif (is_404()) :
      echo $before . '404エラー' . $after;
    endif;

    // if (get_query_var('paged')) :
    //   if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) :
    //     echo ' (';
    //   endif;
    //
    //   echo get_query_var('paged') . 'ページ目';
    //   if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) :
    //     echo ')';
    //   endif;
    //
    // endif;
    echo '</div>';
  endif;
}

/* エディタースタイルの上書き設定 */
add_action('enqueue_block_editor_assets', 'gutenberg_stylesheets');
function gutenberg_stylesheets()
{
  // editor-style.cssの設定
  $editor_style_url = get_theme_file_uri('/assets/css/theme-editor.css');
  wp_enqueue_style('theme-editor-style', $editor_style_url);
}
/**
 * Custom post type specific rewrite rules
 * @return wp_rewrite Rewrite rules handled by WordPress
 */
function cpt_rewrite_rules($wp_rewrite)
{
  // Here we're hardcoding the CPT in, article in this case
  $rules = cpt_generate_date_archives('works', $wp_rewrite);
  $wp_rewrite->rules = $rules + $wp_rewrite->rules;
  return $wp_rewrite;
}
add_action('generate_rewrite_rules', 'cpt_rewrite_rules');

/**
 * Generate date archive rewrite rules for a given custom post type
 * @param  string $cpt slug of the custom post type
 * @return rules       returns a set of rewrite rules for WordPress to handle
 */
function cpt_generate_date_archives($cpt, $wp_rewrite)
{
  $rules = array();

  $post_type = get_post_type_object($cpt);
  $slug_archive = $post_type->has_archive;
  if ($slug_archive === false) {
    return $rules;
  }
  if ($slug_archive === true) {
    // Here's my edit to the original function, let's pick up
    // custom slug from the post type object if user has
    // specified one.
    $slug_archive = $post_type->rewrite['slug'];
  }

  $dates = array(
    array(
      'rule' => "([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})",
      'vars' => array('year', 'monthnum', 'day')
    ),
    array(
      'rule' => "([0-9]{4})/([0-9]{1,2})",
      'vars' => array('year', 'monthnum')
    ),
    array(
      'rule' => "([0-9]{4})",
      'vars' => array('year')
    )
  );

  foreach ($dates as $data) {
    $query = 'index.php?post_type=' . $cpt;
    $rule = $slug_archive . '/' . $data['rule'];

    $i = 1;
    foreach ($data['vars'] as $var) {
      $query .= '&' . $var . '=' . $wp_rewrite->preg_index($i);
      $i++;
    }

    $rules[$rule . "/?$"] = $query;
    $rules[$rule . "/feed/(feed|rdf|rss|rss2|atom)/?$"] = $query . "&feed=" . $wp_rewrite->preg_index($i);
    $rules[$rule . "/(feed|rdf|rss|rss2|atom)/?$"] = $query . "&feed=" . $wp_rewrite->preg_index($i);
    $rules[$rule . "/page/([0-9]{1,})/?$"] = $query . "&paged=" . $wp_rewrite->preg_index($i);
  }
  return $rules;
}

function wpse_62509_current_month_selector($link_html)
{
  $current_month = date("F Y");
  if (preg_match('/' . $current_month . '/i', $link_html))
    $link_html = preg_replace('/<li>/i', '<li class="current-month">', $link_html);
  return $link_html;
}
add_filter('pre_get_posts', 'add_custom_type_to_tag_archive');

function add_custom_type_to_tag_archive($query)
{
  if (!is_main_query() or !is_tag())
    return $query;

  $query->set('post_type', array('custom_type', 'work'));
  $query->set('posts_per_page', 5);

  return $query;
}

function wpse28145_add_custom_types( $query ) {
  if( is_category()  || is_tax() ) {

      $post_types = array( 'post', 'column' );

      $query->set( 'post_type', $post_types );
  }
}
add_filter( 'pre_get_posts', 'wpse28145_add_custom_types' );

add_filter('wpcf7_autop_or_not', '__return_false');