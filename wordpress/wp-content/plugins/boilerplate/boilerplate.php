<?php
/**
 * Plugin Name: Boilerplate
 * Description: Valentin Wordpress Boilerplate plugin
 * Version: 1.0
 * Author: Valentin Ruescas
 */

add_action( 'the_content', 'my_thank_you_text' );

function my_thank_you_text ( $content ) {
  return $content .= '<p>Thank you for reading!</p>';
}