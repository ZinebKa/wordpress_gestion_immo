<?php

// Register Custom Taxonomy
function criteres() {

	$labels = array(
		'name'                       => _x( 'Criteres', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Critere', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Criteres', 'text_domain' ),
		'all_items'                  => __( 'Toutes criteres', 'text_domain' ),
		'parent_item'                => __( 'Parent critere', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Critere Name', 'text_domain' ),
		'add_new_item'               => __( 'Add New Critere', 'text_domain' ),
		'edit_item'                  => __( 'Edit Critere', 'text_domain' ),
		'update_item'                => __( 'Update Critere', 'text_domain' ),
		'view_item'                  => __( 'View Critere', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Criteres', 'text_domain' ),
		'search_items'               => __( 'Search Criteres', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No criteres', 'text_domain' ),
		'items_list'                 => __( 'criteres list', 'text_domain' ),
		'items_list_navigation'      => __( 'criteres list navigation', 'text_domain' ),
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => false,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
	);
	register_taxonomy( 'criteres', array( 'logements' ), $args );

}
add_action( 'init', 'criteres', 0 );

function monTheme_menu_class ($classes){
$classes[] = 'nav-item';
return $classes;
}
function monTheme_menu_link_class ($attrs){
    $attrs['class'] = 'nav-link';
    return $attrs;
    }

add_filter('nav_menu_css_class','monTheme_menu_class');
add_filter('nav_menu_link_attributes','monTheme_menu_link_class');
function monTheme_supports(){
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header','En tête du menu');
    register_nav_menu('Footer','Pied de page');
}
add_action('after_setup_theme','monTheme_supports');


function load_stylesheets(){
    wp_register_style('bootstrap',get_template_directory_uri().'/css/bootstrap.min.css',
    array(),false,'all');
    wp_enqueue_style( 'style-theme', get_template_directory_uri().'/css/monStyle.css' );
    wp_enqueue_style('bootstrap');
        wp_register_style('style',get_template_directory_uri().'/style.css',
        array(),false,'all');
        wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts','load_stylesheets');
function include_jquery(){
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery',get_template_directory_uri().'/js/jquery-3.3.1.js','',1,
    true);
    add_action('wp_enqueue_scripts','jquery');
}
add_action('wp_enqueue_scripts','include_jquery');
function loadjs(){
    wp_register_script('customjs', get_template_directory_uri(). 'js/scripts.js','',1,true );
    wp_enqueue_script('customjs');
}
add_action('wp_enqueue_scripts','loadjs');

// Ville
if ( ! function_exists('Ville') ) {

    
    function Ville() {
    
        $labels = array(
            'name'                  => _x( 'Villes', 'Post Type General Name', 'ville' ),
            'singular_name'         => _x( 'ville', 'Post Type Singular Name', 'ville' ),
            'menu_name'             => __( 'Villes', 'ville' ),
            'name_admin_bar'        => __( 'Ville', 'ville' ),
            'archives'              => __( 'Ville Archives', 'ville' ),
            'attributes'            => __( 'Ville Attributes', 'ville' ),
            'parent_item_colon'     => __( 'Parent ville:', 'ville' ),
            'all_items'             => __( 'All villes', 'ville' ),
            'add_new_item'          => __( 'Add New ville', 'ville' ),
            'add_new'               => __( 'Add New', 'ville' ),
            'new_item'              => __( 'New ville', 'ville' ),
            'edit_item'             => __( 'Edit ville', 'ville' ),
            'update_item'           => __( 'Update ville', 'ville' ),
            'view_item'             => __( 'View ville', 'ville' ),
            'view_items'            => __( 'View villes', 'ville' ),
            'search_items'          => __( 'Search ville', 'ville' ),
            'not_found'             => __( 'Not found', 'ville' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'ville' ),
            'featured_image'        => __( 'Featured Image', 'ville' ),
            'set_featured_image'    => __( 'Set featured image', 'ville' ),
            'remove_featured_image' => __( 'Remove featured image', 'ville' ),
            'use_featured_image'    => __( 'Use as featured image', 'ville' ),
            'insert_into_item'      => __( 'Insert into item', 'ville' ),
            'uploaded_to_this_item' => __( 'Uploaded to this item', 'ville' ),
            'items_list'            => __( 'Items list', 'ville' ),
            'items_list_navigation' => __( 'Items list navigation', 'ville' ),
            'filter_items_list'     => __( 'Filter items list', 'ville' ),
        );
        $rewrite = array(
            'slug'                  => 'ville',
            'with_front'            => true,
            'pages'                 => true,
            'feeds'                 => false,
        );
        $args = array(
            'label'                 => __( 'ville', 'ville' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'page-attributes' ),
            'hierarchical'          => true,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-location-alt',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'rewrite'               => $rewrite,
            'capability_type'       => 'page',
        );
        register_post_type( 'ville', $args );
    
    }
    add_action( 'init', 'Ville', 0 );
    }
    // Logements
    if ( ! function_exists('logements') ) {
        function logements() {
        
            $labels = array(
                'name'                  => _x( 'logements', 'Post Type General Name', 'logements' ),
                'singular_name'         => _x( 'logement', 'Post Type Singular Name', 'logements' ),
                'menu_name'             => __( 'Logements', 'logements' ),
                'name_admin_bar'        => __( 'Logement', 'logements' ),
                'archives'              => __( 'Item Archives', 'logements' ),
                'attributes'            => __( 'Item Attributes', 'logements' ),
                'parent_item_colon'     => __( 'Parent logement:', 'logements' ),
                'all_items'             => __( 'All logements', 'logements' ),
                'add_new_item'          => __( 'Add New logement', 'logements' ),
                'add_new'               => __( 'Add logement', 'logements' ),
                'new_item'              => __( 'New logement', 'logements' ),
                'edit_item'             => __( 'Edit logement', 'logements' ),
                'update_item'           => __( 'Update logement', 'logements' ),
                'view_item'             => __( 'View logement', 'logements' ),
                'view_items'            => __( 'View logements', 'logements' ),
                'search_items'          => __( 'Search logement', 'logements' ),
                'not_found'             => __( 'Not found', 'logements' ),
                'not_found_in_trash'    => __( 'Not found in Trash', 'logements' ),
                'featured_image'        => __( 'Featured Image', 'logements' ),
                'set_featured_image'    => __( 'Set featured image', 'logements' ),
                'remove_featured_image' => __( 'Remove featured image', 'logements' ),
                'use_featured_image'    => __( 'Use as featured image', 'logements' ),
                'insert_into_item'      => __( 'Insert into item', 'logements' ),
                'uploaded_to_this_item' => __( 'Uploaded to this item', 'logements' ),
                'items_list'            => __( 'Items list', 'logements' ),
                'items_list_navigation' => __( 'Items list navigation', 'logements' ),
                'filter_items_list'     => __( 'Filter items list', 'logements' ),
            );
            $rewrite = array(
                'slug'                  => 'logement',
                'with_front'            => true,
                'pages'                 => true,
                'feeds'                 => true,
            );
            $args = array(
                'label'                 => __( 'logement', 'logements' ),
                'labels'                => $labels,
                'supports'              => array( 'title', 'editor', 'thumbnail', 'revisions', 'custom-fields', 'page-attributes' ),
                'hierarchical'          => true,
                'public'                => true,
                'show_ui'               => true,
                'show_in_menu'          => true,
                'menu_position'         => 5,
                'menu_icon'             => 'dashicons-admin-home',
                'show_in_admin_bar'     => true,
                'show_in_nav_menus'     => true,
                'can_export'            => true,
                'has_archive'           => true,
                'exclude_from_search'   => false,
                'publicly_queryable'    => true,
                'rewrite'               => $rewrite,
                'capability_type'       => 'page',
            );
            register_post_type( 'logements', $args );
        
        }
        add_action( 'init', 'logements', 0 );
        
        }

/* if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5eee8e336518a',
	'title' => 'Logements attributs',
	'fields' => array(
		array(
			'key' => 'field_5eee8eb902987',
			'label' => 'Surface',
			'name' => 'surface',
			'type' => 'number',
			'instructions' => 'En m2',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_5eee93af02988',
			'label' => 'Type',
			'name' => 'type',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '(maison, appartement, ..)',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5eee93d202989',
			'label' => 'Prix',
			'name' => 'prix',
			'type' => 'number',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_5eee93e80298a',
			'label' => 'Frais d\'agence',
			'name' => 'frais_dagence',
			'type' => 'number',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'min' => '',
			'max' => '',
			'step' => '',
		),
		array(
			'key' => 'field_5eee93f60298b',
			'label' => 'Date de mise en vente',
			'name' => 'date_mise_vente',
			'type' => 'date_picker',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'display_format' => 'F j, Y',
			'return_format' => 'd/m/Y',
			'first_day' => 1,
		),
		array(
			'key' => 'field_5eee94330298c',
			'label' => 'Exposition',
			'name' => 'exposition',
			'type' => 'radio',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'choices' => array(
				'Ouest' => 'Ouest',
				'Est' => 'Est',
				'Nord' => 'Nord',
				'Sud' => 'Sud',
			),
			'allow_null' => 0,
			'other_choice' => 1,
			'save_other_choice' => 0,
			'default_value' => '',
			'layout' => 'vertical',
			'return_format' => 'value',
		),
		array(
			'key' => 'field_5eee94920298d',
			'label' => 'Ville',
			'name' => 'ville',
			'type' => 'post_object',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'post_type' => array(
				0 => 'ville',
			),
			'taxonomy' => '',
			'allow_null' => 0,
			'multiple' => 0,
			'return_format' => 'object',
			'ui' => 1,
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'logements',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

acf_add_local_field_group(array(
	'key' => 'group_5eee94deb38c6',
	'title' => 'Ville information',
	'fields' => array(
		array(
			'key' => 'field_5eee9582105cc',
			'label' => 'Code postal',
			'name' => 'code_postal',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5eee9664105cd',
			'label' => 'Nom',
			'name' => 'nom',
			'type' => 'text',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5eee9679105ce',
			'label' => 'Description',
			'name' => 'description',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
	),
	'location' => array(
		array(
			array(
				'param' => 'post_type',
				'operator' => '==',
				'value' => 'ville',
			),
		),
	),
	'menu_order' => 0,
	'position' => 'normal',
	'style' => 'default',
	'label_placement' => 'top',
	'instruction_placement' => 'label',
	'hide_on_screen' => '',
	'active' => true,
	'description' => '',
));

endif;*/