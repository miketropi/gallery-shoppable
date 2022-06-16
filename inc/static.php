<?php 
/**
 * Static
 */

function gallery_shoppable_enqueue_scripts() {
  wp_enqueue_style('gallery-shoppable-style', GS_URI . '/dist/css/gallery-shoppable.bundle.css', false, GS_VERSION);
  wp_enqueue_script('gallery-shoppable-script', GS_URI . '/dist/gallery-shoppable.js', ['jquery'], GS_VERSION, true);

  wp_localize_script('gallery-shoppable-script', 'GS_PHP', [
    'ajax_url' => admin_url('admin-ajax.php'),
    'lang' => [],
  ]);
}

add_action('wp_enqueue_scripts', 'gallery_shoppable_enqueue_scripts', 30);

function gallery_shoppable_admin_enqueue_scripts() {

}

add_action('admin_enqueue_scripts', 'gallery_shoppable_admin_enqueue_scripts');