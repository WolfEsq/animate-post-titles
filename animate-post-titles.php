<?php
/**
 * Plugin Name: _Animate CSS
 * Plugin URI: https://github.com/WolfEsq
 * Description: Adds animation options to the WordPress editor.
 * Version: 1.0.0
 * Author: WolfEsq
 * Author URI: https://github.com/WolfEsq
 * License: GPL v2+
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */


// Scripts and styles
require( dirname( __FILE__ ) . '/includes/scripts-styles.php' );

// Meta Boxes
require( dirname( __FILE__ ) . '/includes/class-metaboxes.php' );


function acss_add_animations(){
    
    $post_id = get_the_ID();
    
    // Get the animation CSS classes from post meta
    $animation = get_post_meta( $post_id, 'animation_type', true );
    $animation .= ' ' . get_post_meta( $post_id, 'animation_delay', true );
    $animation .= ' ' . get_post_meta( $post_id, 'animation_duration', true );
    $animation .= ' ' . get_post_meta( $post_id, 'animation_repetition', true );
    
    echo '<script>jQuery( "h1.entry-title" ).addClass( "animated ' . $animation . '" );</script>';
}

add_action( 'wp_footer', 'acss_add_animations' );