<?php
function has_images_by_post_id(WP_POST $post = null)
{ 	
    $post = get_post($post->id);
    $content = $post->post_content;
    preg_match_all('/wp-block-cover/', $content, $matches_0);
    preg_match_all('/wp-block-image/', $content, $matches_1);
    return (count($matches_0[0]) > 0 || count($matches_1[0]) > 0) ? true : false;
}

function has_image_header(WP_Post $post = null)
{ 
    $post = get_post($post->id);
    $content = $post->post_content;
	preg_match_all('/wp-block-cover/', $content, $matches_0);
    return (count($matches_0[0]) > 0 || count($matches_1[0]) > 0) ? true : false;
}
function get_background_image_header($post_content){
	$pattern = '/background-image:(.*)\)/';
	preg_match($pattern,$post_content,$match);
	return $match[0];
}
function header_post_image_css() 
{
	wp_enqueue_style('style', get_template_directory_uri() . '/style.css');
	$color = ".brand {
				color: #ffffff !important;
			 }
			 .wp-block-cover{
				position: fixed !important;
				left: 0;
				top: 0;
				z-index: -1;
			 }
			 @media screen and (min-width: 320px){
				.wp_single_post{
					margin-top: 200px;
				}
			 }
			 @media screen and (min-width: 768px){
				.wp_single_post{
					margin-top: 200px;
				}
			 }";
	wp_add_inline_style('style', $color);
	add_action('wp_enqueue_scripts', 'header_post_image_css');
}

/**
 * Criando uma area de widgets
 *
 */
function widgets_novos_widgets_init() {

	register_sidebar( array(
		'name' => 'SidebarRight',
		'id' => 'sidebarright_widgets',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );

	register_sidebar(array(
		'name' => 'Widget Top',
		'id' => 'widget_top',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	));
}
add_action( 'widgets_init', 'widgets_novos_widgets_init' );
?>
