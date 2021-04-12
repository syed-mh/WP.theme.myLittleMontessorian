<?php

/**
 * Registers all custom theme widgets with the
 * elementor plugin
 * 
 * @author Syed Mohammed Hassan <contactsyedmh@gmail.com>
 * @since 1.0
 */

namespace MLM;

if(!defined('ABSPATH')) exit;

/**
 * Class to register custom elementor widgets
 */
class Widget_Loader {
    private static $_instance = null;

    /**
     * Manage instances of this class to make sure only one exists
     * @return self
     */
    public static function instance() {
        if(is_null(self::$_instance)) self::$_instance = new self();
        return self::$_instance;
    }

    /**
     * Function to require widget files
     * @return void
     */
    private function include_widget_files() {
         require_once (__DIR__ . '/widgets/HomePageOpener.php');
         require_once (__DIR__ . '/widgets/Divider.php');
         require_once (__DIR__ . '/widgets/CTARight.php');
         require_once (__DIR__ . '/widgets/CTACenter.php');
         require_once (__DIR__ . '/widgets/TextAreaRight.php');
         require_once (__DIR__ . '/widgets/IconCardWithText.php');
         require_once (__DIR__ . '/widgets/VideoPlayer.php');
         require_once (__DIR__ . '/widgets/MontessoriStages.php');
     }

    /**
     * Function to call required files and instantiate them
     * @return void
     */
    public function register_widgets() {
        $this->include_widget_files();
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\HomePageOpener());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\Divider());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\CTARight());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\CTACenter());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\TextAreaRight());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\IconCardWithText());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\VideoPlayer());
        \Elementor\Plugin::instance()->widgets_manager->register_widget_type(new Widgets\MontessoriStages());
    }

    /**
     * Constructor adds an action to the elementor lifecycle to register our widgets
     * @return void
     */
    public function __construct() {
        add_action('elementor/widgets/widgets_registered', [$this, 'register_widgets'], 99);
    }

}

/**
 * Initiate the instance
 */
Widget_Loader::instance();