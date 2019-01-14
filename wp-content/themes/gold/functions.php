<?php
/**
 * Created by PhpStorm.
 * User: Alexandros
 * Date: 13/1/2019
 * Time: 7:07 μμ
 */
?>
<?php
function general_script_enqueue()
{
    wp_enqueue_style('main-styles', get_template_directory_uri() . '/css/general.css', array(), '1.0.0', 'all');
    wp_enqueue_script('script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true);

    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.2.1.min.js', array(), NULL, false);
    wp_enqueue_script('jqueryui', '//code.jquery.com/ui/1.12.1/jquery-ui.min.js', 'jquery', NULL, true);
    wp_enqueue_script('bootstrap', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', 'jquery', NULL, true);
    wp_enqueue_script('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', 'jquery', NULL, true);
    wp_enqueue_script('swiper', '//cdnjs.cloudflare.com/ajax/libs/Swiper/4.1.0/js/swiper.min.js', 'jquery', NULL, false);
//        wp_enqueue_script('custom', get_template_directory_uri() . '/js/custom.js', 'jquery', NULL, true);

    wp_enqueue_style('bootstrap', '//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css', array(), NULL);

}

add_action('wp_enqueue_scripts', 'general_script_enqueue');

function general_theme_setup()
{
    add_theme_support('menus');
    register_nav_menu('primary', 'header menu navigation');
    register_nav_menu('secondary', 'footer menu navigation');
}

add_action('init', 'general_theme_setup');

add_theme_support('custom-background');

add_theme_support('custom-header');
//add_theme_support( 'custom-logo' );
add_theme_support('post-thumbnails');
add_theme_support('post-formats', array('aside', 'gallery', 'image'));

function gold_custom_logo_setup()
{
    $defaults = array(
        'height' => 50,
        'width' => 50,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}


add_action('after_setup_theme', 'gold_custom_logo_setup');



require get_template_directory() . '/template-parts/page-home.php';

?>
