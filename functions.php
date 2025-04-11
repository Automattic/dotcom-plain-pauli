<?php

function my_style_red() {

    register_block_style(
        'core/image',
        array(
            'name'         => 'red-border',
            'label'        => __( 'Red Border', 'my-theme' )
        )
    );
}
add_action( 'init', 'my_style_red' );

/**
 * Now we work with JavaScript
 * - register block styles via JavaScript
 * - unregister core block styles via JavaScript
**/


function pauli_block_editor_scripts() {
	    wp_enqueue_script( 
            'pauli-editor', 
            get_theme_file_uri( '/js/curate-core.js' ), 
            array( 'wp-blocks', 'wp-dom' ), 
            wp_get_theme()->get( 'Version' ), true 
        );
        }
        
add_action( 'enqueue_block_editor_assets', 'pauli_block_editor_scripts' );


// add style.css to the front end. 
function enqueue_theme_styles() {
    wp_enqueue_style(
        'my-theme-styles',
        get_stylesheet_uri(), // This gets your style.css
        array(),
        wp_get_theme()->get( 'Version' )
    );
}
add_action( 'wp_enqueue_scripts', 'enqueue_theme_styles' );

//add style.css to editor
function add_theme_editor_styles() {
    add_editor_style( 'style.css' );
}
add_action( 'after_setup_theme', 'add_theme_editor_styles' );