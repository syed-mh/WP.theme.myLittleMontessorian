<?php

/**
 * @author Syed Mohammed Hassan <mohammad.hassan@va8ivedigital.com>
 */

namespace MLM\Widgets;

/**
 * Security measure
 */
if(!defined('ABSPATH')) exit;

class TextAreaLeft extends \Elementor\Widget_Base {
    
    /**
     * Widget Name
     * @return string
     */
    public function get_name() {
        return 'Text Area Left';
    }

    /**
     * Widget Title
     * @return string
     */
    public function get_title() {
        return 'Text Area Left';
    }

    /**
     * Icon for this widget
     * @return string
     */
    public function get_icon() {
        return 'fa fa-comment-alt';
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
            'section_title',
            [
                'label'     => 'Section Title',
                'type'      => \Elementor\Controls_Manager::TEXT,
                'default'   => 'Section Title'
            ]
        );

        $this->add_control(
            'section_description',
            [
                'label'     => 'Section Description',
                'type'      => \Elementor\Controls_Manager::WYSIWYG,
                'default'   => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium quos at reprehenderit sed quia. Assumenda ducimus aliquam temporibus odit quaerat rem dolorem, quasi cupiditate deleniti dolorum, eaque voluptates accusamus! Incidunt minima voluptatibus laborum optio, quod sint consectetur sunt voluptas sapiente, error neque! Fugiat eligendi est similique sit ipsam officia exercitationem.'
            ]
        );
        
        $this->add_control(
          'section_image',
          [
            'label'     => 'Section Image',
            'type'      => \Elementor\Controls_Manager::MEDIA,
            'default'   => ['url' => \Elementor\Utils::get_placeholder_image_src()]
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
        $this->add_inline_editing_attributes('section_title', 'basic');
        $this->add_inline_editing_attributes('section_description', 'basic');
        
        $this->add_render_attribute(
            'section_title',
            [
                'class' => ['text-area__title', 'title', 'text-area-title', 'typography--accent']
            ]
        );

        $this->add_render_attribute(
            'section_description',
            [
                'class' => ['text-area__description', 'text-area-description', 'description', 'typography--regular']
            ]
        );

        $this->add_render_attribute(
            'section_image',
            [
                'class' => ['text-area__image', 'text-area-image'],
                'src' => $settings['section_image']['url'],
                'alt' => $settings['section_title']
            ]
        );
        
        ?>

        <section class="text-area text-area--left equal-height boxed">
            <div class='text-area__content-container two-thirds text-area-content-container'>
              <h2 <?php echo $this->get_render_attribute_string('section_title') ?> >
                <?php echo $settings['section_title'] ?>
              </h2>
              <div <?php echo $this->get_render_attribute_string('section_description') ?> >
                <?php echo $settings['section_description'] ?>
              </div>
            </div> <!-- .text-area__content-container -->
            <div class="text-area__image-container third">
              <img <?php echo $this->get_render_attribute_string('section_image') ?> />
            </div>
        </section> <!-- .text-area -->

        <?php

    }

    /**
     * JS renderer
     */
    protected function _content_template() {

        ?>

        <#

        view.addInlineEditingAttributes('section_title', 'basic');
        view.addInlineEditingAttributes('section_description', 'basic');
        
        view.addRenderAttribute(
            'section_title',
            {
                'class': ['text-area__title', 'title', 'text-area-title', 'typography--accent']
            }
        );

        view.addRenderAttribute(
            'section_description',
            {
                'class': ['text-area__description', 'text-area-description', 'description', 'typography--regular']
            }
        );

        view.addRenderAttribute(
            'section_image',
            {
                'class': ['text-area__image', 'half', 'text-area-image', 'shadow-filter'],
                'src': settings.section_image.url,
                'alt': settings.section_title
            }
        );

        #>

        <section class="text-area text-area--right equal-height">
            <img {{{ view.getRenderAttributeString('section_image') }}} />
            <div class='text-area__content-container third text-area-content-container'>
              <h2 {{{ view.getRenderAttributeString('section_title') }}} >
                {{{ settings.section.title }}}
              </h2>
              <div {{{ view.getRenderAttributeString('section_description') }}} >
                {{{ settings.section_description }}}
              </div>
            </div> <!-- .text-area__content-container -->
        </section> <!-- .text-area -->

        <?php

    }

}
