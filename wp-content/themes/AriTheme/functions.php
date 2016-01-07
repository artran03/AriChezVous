<?php

function ariChezVous_resources() {
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'ariChezVous_resources');

// Navigation Menus
register_nav_menus(array(
	'primary' => __('Primary Menu'),
	'footer' => __('Footer Menu'),
));

function my_bootstrap_theme_scripts() {
	wp_register_script( 'bootstrap-js', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ), '3.0.1', true );
	wp_register_style( 'bootstrap-css', get_template_directory_uri() . '/bootstrap/css/bootstrap.min.css', array(), '3.0.1', 'all' );
	wp_enqueue_script( 'bootstrap-js' );
	wp_enqueue_style( 'bootstrap-css' );
}
add_action('wp_enqueue_scripts', 'my_bootstrap_theme_scripts');

function home_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'home_page_menu_args' );

function remove_width_and_height_attribute( $html ) {
   return preg_replace( '/(height|width)="\d*"\s/', "", $html );
}

function my_function_admin_bar(){
    return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

//Page Slug Body Class
function add_slug_body_class( $classes ) {
	global $post;
	if ( isset( $post ) ) {
		$classes[] = $post->post_type . '-' . $post->post_name;
	}
	return $classes;
	}
add_filter( 'body_class', 'add_slug_body_class' );


// Pour assurer le support du datetimepicker sur tous les navigateurs
add_filter( 'wpcf7_support_html5_fallback', '__return_true' );

add_action( 'init', 'create_posttype' );
function create_posttype() {
  register_post_type( 'souvenirs',
    array(
      'labels' => array(
        'name' => __( 'Souvenirs' ),
        'singular_name' => __( 'Souvenir' )
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'souvenirs'),
      'supports' => array( 'title', 'editor', 'thumbnail' )
    )
  );
}

add_theme_support('post-thumbnails');

add_action('add_meta_boxes','initialisation_metaboxes');
function initialisation_metaboxes(){
	//on utilise la fonction add_metabox() pour initialiser une metabox
  add_meta_box('id_acv_number', 'Définir le numéro du #AriChezVous', 'meta_function_number', 'souvenirs', 'normal', 'high');
	add_meta_box('id_acv_place', 'Définir le lieu du #AriChezVous', 'meta_function_place', 'souvenirs', 'normal', 'high');
}

function meta_function_number($post){
  // on récupère la valeur actuelle pour la mettre dans le champ
  $val = get_post_meta($post->ID,'_acv_number',true);
  echo '<label for="lbl_acv_number">AriChezVous Number : </label>';
  echo '<input id="acv_number" type="text" name="acv_number" value="'.$val.'" />';
}

function meta_function_place($post){
  // on récupère la valeur actuelle pour la mettre dans le champ
  $val = get_post_meta($post->ID,'_acv_place',true);
  echo '<label for="lbl_acv_place">Lieu : </label>';
  echo '<input id="acv_place" type="text" name="acv_place" value="'.$val.'" />';
}

add_action('save_post','save_metaboxes');
function save_metaboxes($post_ID){
  // si la metabox est définie, on sauvegarde sa valeur
  if(isset($_POST['acv_number'])){
    update_post_meta($post_ID,'_acv_number', esc_html($_POST['acv_number']));
  }
	if(isset($_POST['acv_place'])){
    update_post_meta($post_ID,'_acv_place', esc_html($_POST['acv_place']));
  }
}
