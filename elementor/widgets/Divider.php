<?php

/**
 * @author Syed Mohammed Hassan <mohammad.hassan@va8ivedigital.com>
 */

namespace MLM\Widgets;

/**
 * Security measure
 */
if(!defined('ABSPATH')) exit;

class Divider extends \Elementor\Widget_Base {
    
    /**
     * Widget Name
     * @return string
     */
    public function get_name() {
        return 'Page Divider';
    }

    /**
     * Widget Title
     * @return string
     */
    public function get_title() {
        return 'Page Divider';
    }

    /**
     * Icon for this widget
     * @return string
     */
    public function get_icon() {
        return 'fa fa-divide';
    }

    /**
     * Cateorization for this widget
     * @return Array<string>
     */
    public function get_categories() {
        return ['my-little-montessorian'];
    }

    /**
     * Set up control section to manipulate widget settings
     * @return void
     */
    protected function _register_controls() {
        
        $this->start_controls_section(
            'section_content',
            [
                'label' => 'Edit Component'
            ]
        );
        
        $this->add_control(
          'divider_image',
          [
            'label'     => 'Divider Image',
            'type'      => \Elementor\Controls_Manager::MEDIA,
            'default'   => ['url' => \Elementor\Utils::get_placeholder_image_src()]
            ]
          );

          $this->add_control(
              'divider_direction',
              [
                  'label'     => 'Divider Direction',
                  'type'      => \Elementor\Controls_Manager::TEXT,
                  'default'   => 'right'
              ]
          );

          $this->add_control(
              'anchor_link',
              [
                  'label'     => 'Anchor Link',
                  'type'      => \Elementor\Controls_Manager::TEXT,
                  'default'   => '#'
              ]
          );

          $this->add_control(
              'css_classes',
              [
                  'label'     => 'CSS Classes',
                  'type'      => \Elementor\Controls_Manager::TEXT,
                  'default'   => ''
              ]
          );


        $this->end_controls_section();
    }

    /**
     * PHP renderer
     * @return void
     */
    protected function render() {

        $settings = $this->get_settings_for_display();
        
        $this->add_render_attribute(
            'divider_direction',
            [
                'class' => ['page-divider--' . $settings['divider_direction'], 'page-divider', 'boxed', $settings['css_classes']],
                'id'    => $settings['anchor_link']
            ]
        );

        $this->add_render_attribute(
            'divider_image',
            [
                'class' => ['page-divider__image'],
                'src' => $settings['divider_image']['url']
            ]
        );
        
        ?>

        <section <?php echo $this->get_render_attribute_string('divider_direction') ?> >
          <figure class="page-divider__image-container">
            <img <?php echo $this->get_render_attribute_string('divider_image') ?> />
          </figure>
          <hr class='page-divider__divider divider' />
        </section> <!-- .page-divider -->

        <?php

    }

}
