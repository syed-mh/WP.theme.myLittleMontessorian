<?php

/**
 * Registers all custom categories for custom widgets that
 * are registered by the theme in the elementor plugin
 * 
 * @author Syed Mohammed Hassan <contactsyedmh@gmail.com>
 * @since 1.0
 */

if(!defined('ABSPATH')) exit;

function mlm_elementor_categories($elements_manager) {

  $elements_manager->add_category (
    'my-little-montessorian',
    [
      'title' => __('My Little Montessorian', 'my-little-montessorian'),
      'icon' => 'fa fa-star'
    ]
  );

}