<?php

/**
 * @author Syed Mohammed Hassan <mohammad.hassan@va8ivedigital.com>
 */

namespace MLM\Widgets;

/**
 * Security measure
 */
if(!defined('ABSPATH')) exit;

class CTACenter extends \Elementor\Widget_Base {
    
    /**
     * Widget Name
     * @return string
     */
    public function get_name() {
        return 'Call To Action Center';
    }

    /**
     * Widget Title
     * @return string
     */
    public function get_title() {
        return 'Call To Action Center';
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
                'default'   => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.'
            ]
        );
        
        $this->add_control(
          'section_image_right',
          [
            'label'     => 'Section Image Right',
            'type'      => \Elementor\Controls_Manager::MEDIA,
            'default'   => ['url' => \Elementor\Utils::get_placeholder_image_src()]
            ]
          );

        $this->add_control(
          'section_image_left',
          [
            'label'     => 'Section Image Left',
            'type'      => \Elementor\Controls_Manager::MEDIA,
            'default'   => ['url' => \Elementor\Utils::get_placeholder_image_src()]
            ]
          );
          
          $this->add_control(
              'button_text',
              [
                  'label'     => 'Button Text',
                  'type'      => \Elementor\Controls_Manager::TEXT,
                  'default'   => 'Learn More'
              ]
          );

          $this->add_control(
              'button_link',
              [
                  'label'     => 'Button Link',
                  'type'      => \Elementor\Controls_Manager::URL,
                  'default'   => [
                    'url' => '#'
                  ]
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
                'class' => ['cta__title', 'title', 'cta-title', 'typography--accent']
            ]
        );

        $this->add_render_attribute(
            'section_image_left',
            [
                'class' => ['cta__image--left', 'third', 'cta-image', 'cta-image', 'left', 'shadow-filter'],
                'src' => $settings['section_image_left']['url'],
                'alt' => $settings['section_title']
            ]
        );

        $this->add_render_attribute(
            'section_image_right',
            [
                'class' => ['cta__image--right', 'third', 'cta-image', 'cta-image', 'right'],
                'src' => $settings['section_image_right']['url'],
                'alt' => $settings['section_title']
            ]
        );

        $this->add_render_attribute(
          'button_link',
          [
            'href' => $settings['button_link']['url']
          ]
        )
        
        ?>

        <section class="cta cta--center equal-height">
          <img <?php echo $this->get_render_attribute_string('section_image_left') ?> />
          <div class='cta__content-container third cta-content-container'>
            <h2 <?php echo $this->get_render_attribute_string('section_title') ?> >
              <?php echo $settings['section_title'] ?>
            </h2>
            <button class="theme-button fill--dark home-page-opener__button" alt="<?php echo $settings['section_title'] ?>">
              <a class='rounded' href=<?php echo $settings['button_link']['url'] ?> alt=<?php echo $settings['section_title'] ?> >
                <?php echo $settings['button_text'] ?>
              </a>
            </button>
          </div> <!-- .cta__content-container -->
          <img <?php echo $this->get_render_attribute_string('section_image_right') ?> />
        </section> <!-- .cta -->

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
                'class': ['cta__title', 'title', 'cta-title', 'typography--accent']
            }
        );

        view.addRenderAttribute(
            'section_image_right',
            {
                'class': ['cta__image--right', 'third', 'cta-image', 'cta-image', 'right'],
                'src': settings.section_image_right.url,
                'alt': settings.section_title
            }
        );

        view.addRenderAttribute(
            'section_image_left',
            {
                'class': ['cta__image--left', 'third', 'cta-image', 'cta-image', 'left', 'shadow-filter'],
                'src': settings.section_image_left.url,
                'alt': settings.section_title
            }
        );

        view.addRenderAttribute(
          'button_link',
          {
            'href': settings.button_link.url
          }
        )
        
        #>

        <section class="cta cta--right equal-height">
          <img {{{ view.getRenderAttributeString('section_image_left') }}} />
          <div class='cta__content-container third cta-content-container'>
            <h2 {{{ view.getRenderAttributeString('section_title') }}} >
              {{{ settings.section.title }}}
            </h2>
            <button class="theme-button fill--dark home-page-opener__button" alt={{{ settings.section_title }}}>
              <a class="rounded" href={{{ settings.button_link.url }}} alt={{{ settings.section_title }}}>
                {{{ settings.button_text }}}
              </a>
            </button>
          </div> <!-- .cta__content-container -->
          <img {{{ view.getRenderAttributeString('section_image_right') }}} />
        </section> <!-- .cta -->

        <?php

    }

}
