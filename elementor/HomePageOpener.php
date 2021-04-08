<?php

/**
 * @author Syed Mohammed Hassan <mohammad.hassan@va8ivedigital.com>
 */

namespace MLM\Widgets;

use Elementor\Widget_Base;

/**
 * Security measure
 */
if(!defined('ABSPATH')) exit;

class HomePageOpener extends Widget_Base {
    
    /**
     * Widget Name
     * @return string
     */
    public function get_name() {
        return 'Home Page Opener';
    }

    /**
     * Widget Title
     * @return string
     */
    public function get_title() {
        return 'Home Page Opener';
    }

    /**
     * Icon for this widget
     * @return string
     */
    public function get_icon() {
        return 'fa fa-image';
    }

    /**
     * Cateorization for this widget
     * @return Array<string>
     */
    public function get_categories() {
        return ['general'];
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
            'banner_title',
            [
                'label'     => 'Banner Title',
                'type'      => \Elementor\Controls_Manager::TEXT,
                'default'   => 'Banner Title'
            ]
        );

        $this->add_control(
            'banner_description',
            [
                'label'     => 'Banner Description',
                'type'      => \Elementor\Controls_Manager::WYSIWYG,
                'default'   => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium quos at reprehenderit sed quia. Assumenda ducimus aliquam temporibus odit quaerat rem dolorem, quasi cupiditate deleniti dolorum, eaque voluptates accusamus! Incidunt minima voluptatibus laborum optio, quod sint consectetur sunt voluptas sapiente, error neque! Fugiat eligendi est similique sit ipsam officia exercitationem.'
            ]
        );
        
        $this->add_control(
          'banner_image',
          [
            'label'     => 'Banner Image',
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
        $this->add_inline_editing_attributes('banner_title', 'basic');
        $this->add_inline_editing_attributes('banner_description', 'basic');
        
        $this->add_render_attribute(
            'banner_title',
            [
                'class' => ['home-page-opener__title']
            ]
        );

        $this->add_render_attribute(
            'banner_description',
            [
                'class' => ['home-page-opener__description']
            ]
        );

        $this->add_render_attribute(
            'banner_image',
            [
                'class' => ['home-page-opener__container', 'rounded'],
                'style' => ["background-image: url({$settings['banner_image']['url']})"]
            ]
        );

        $this->add_render_attribute(
          'button_link',
          [
            'href' => $settings['button_link']['url']
          ]
        )
        
        ?>

        <section class="home-page-opener boxed">
          <div <?php echo $this->get_render_attribute_string('banner_image'); ?> >
            <div class="third home-page-opener__content-container">
              <h1 <?php echo $this->get_render_attribute_string('banner_title') ?> >
                <?php echo $settings['banner_title'] ?>
              </h1>
              <p <?php echo $this->get_render_attribute_string('banner_description') ?> >
                <?php echo $settings['banner_description'] ?>
              </p>
              <button class="theme-button no-fill--light home-page-opener__button" alt="<?php echo $settings['banner_title'] ?>">
                <a href=<?php echo $settings['button_link']['url'] ?> >
                  <?php echo $settings['button_text'] ?>
                </a>
              </button>
            </div> <!-- .home-page-opener__content-container -->
          </div> <!-- .home-page-opener__container -->
        </section> <!-- .home-page-opener -->

        <?php

    }

    /**
     * JS renderer
     */
    protected function _content_template() {

        ?>

        <#
        
        view.addInlineEditingAttributes('banner_title', 'basic')
        view.addInlineEditingAttributes('banner_description', 'basic')

        view.addRenderAttribute(
            'banner_title',
            {
                'class': ['home-page-opener__title']
            }
        )

        view.addRenderAttribute(
            'banner_description',
            {
                'class': ['home-page-opener__description']
            }
        )

        view.addRenderAttribute(
            'banner_image',
            {
                'class': ['home-page-opener__container', 'rounded'],
                'style': ["background-image: url({$settings['banner_image']['url']})"]
            }
        )

        #>

        <section class="home-page-opener boxed">
          <div {{{ view.getRenderAttributeString('banner_image') }}} >
            <div class="quarter home-page-opener__content-container">
              <h1 {{{ view.getRenderAttributeString('banner_title') }}} >
                {{{ settings.banner_title }}}
              </h1>
              <p {{{ view.getRenderAttributeString('banner_description') }}} >
                {{{ settings.banner_description }}}
              </p>
              <button class="theme-button theme-button--no-fill--light home-page-opener__button" alt={{{ settings.banner_title }}}>
                <a href={{{ settings.button_link.url }}}>
                  {{{ settings.button_text }}}
                </a>
              </button>
            </div> <!-- .home-page-opener__content-container -->
          </div> <!-- .home-page-opener__container -->
        </section> <!-- .home-page-opener -->

        <?php

    }

}
