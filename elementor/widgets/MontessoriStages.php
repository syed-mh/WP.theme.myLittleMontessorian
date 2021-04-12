<?php

/**
 * @author Syed Mohammed Hassan <mohammad.hassan@va8ivedigital.com>
 */

namespace MLM\Widgets;

/**
 * Security measure
 */
if(!defined('ABSPATH')) exit;

class MontessoriStages extends \Elementor\Widget_Base {
    
    /**
     * Widget Name
     * @return string
     */
    public function get_name() {
        return 'Montessori Stages';
    }

    /**
     * Widget Title
     * @return string
     */
    public function get_title() {
        return 'Montessori Stages';
    }

    /**
     * Icon for this widget
     * @return string
     */
    public function get_icon() {
        return 'fa fa-clipboard-list';
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
                'label' => 'Edit Left Area'
            ]
        );

        $this->add_control(
            'section_title',
            [
                'label'     => 'Section Description',
                'type'      => \Elementor\Controls_Manager::TEXT,
                'default'   => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium quos at reprehenderit sed quia.'
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
        
        $this->start_controls_section(
            'section_content',
            [
                'label' => 'Edit Card One'
            ]
        );

        $this->add_control(
            'card_one_title',
            [
                'label'     => 'Card One Title',
                'type'      => \Elementor\Controls_Manager::TEXT,
                'default'   => 'Card One Title'
            ]
        );

        $this->add_control(
            'card_one_description',
            [
                'label'     => 'Card One Description',
                'type'      => \Elementor\Controls_Manager::TEXT,
                'default'   => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium quos at reprehenderit sed quia.'
            ]
        );

        $this->end_controls_section();

        $this->end_controls_section();
        
        $this->start_controls_section(
            'section_content',
            [
                'label' => 'Edit Card Two'
            ]
        );

        $this->add_control(
            'card_two_title',
            [
                'label'     => 'Card Two Title',
                'type'      => \Elementor\Controls_Manager::TEXT,
                'default'   => 'Card Two Title'
            ]
        );

        $this->add_control(
            'card_two_description',
            [
                'label'     => 'Card Two Description',
                'type'      => \Elementor\Controls_Manager::TEXT,
                'default'   => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium quos at reprehenderit sed quia.'
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_content',
            [
                'label' => 'Edit Card Three'
            ]
        );

        $this->add_control(
            'card_three_title',
            [
                'label'     => 'Card Three Title',
                'type'      => \Elementor\Controls_Manager::TEXT,
                'default'   => 'Card Three Title'
            ]
        );

        $this->add_control(
            'card_three_description',
            [
                'label'     => 'Card Three Description',
                'type'      => \Elementor\Controls_Manager::TEXT,
                'default'   => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium quos at reprehenderit sed quia.'
            ]
        );

        $this->end_controls_section();

        $this->start_controls_section(
            'section_content',
            [
                'label' => 'Edit Card Four'
            ]
        );

        $this->add_control(
            'card_four_title',
            [
                'label'     => 'Card Four Title',
                'type'      => \Elementor\Controls_Manager::TEXT,
                'default'   => 'Card Four Title'
            ]
        );

        $this->add_control(
            'card_four_description',
            [
                'label'     => 'Card Four Description',
                'type'      => \Elementor\Controls_Manager::TEXT,
                'default'   => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium quos at reprehenderit sed quia.'
            ]
        );

        $this->end_controls_section();
        
        $this->start_controls_section(
            'section_content',
            [
                'label' => 'Edit Card Five'
            ]
        );

        $this->add_control(
            'card_five_title',
            [
                'label'     => 'Card Five Title',
                'type'      => \Elementor\Controls_Manager::TEXT,
                'default'   => 'Card Five Title'
            ]
        );

        $this->add_control(
            'card_five_description',
            [
                'label'     => 'Card Five Description',
                'type'      => \Elementor\Controls_Manager::TEXT,
                'default'   => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium quos at reprehenderit sed quia.'
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

        $this->add_inline_editing_attributes('card_one_title', 'basic');
        $this->add_inline_editing_attributes('card_one_description', 'basic');

        $this->add_inline_editing_attributes('card_two_title', 'basic');
        $this->add_inline_editing_attributes('card_two_description', 'basic');

        $this->add_inline_editing_attributes('card_three_title', 'basic');
        $this->add_inline_editing_attributes('card_three_description', 'basic');

        $this->add_inline_editing_attributes('card_four_title', 'basic');
        $this->add_inline_editing_attributes('card_four_description', 'basic');

        $this->add_inline_editing_attributes('card_five_title', 'basic');
        $this->add_inline_editing_attributes('card_five_description', 'basic');
       
        $this->add_render_attribute(
          'section_title',
          [
            'class' => ['montessori-steps__title', 'typography--accent']
          ]
          );

        $this->add_render_attribute(
          'section_image',
          [
            'src' => $settings['section_image']['url'],
            'alt' => 'Montessori Steps',
            'class' => ['montessori-steps__image', 'montessori-steps-image']
          ]
        );

        $this->add_render_attribute(
          'card_one_title',
          [
            'class' => ['montessori-step__title', 'title', 'montessori-step-title', 'typography--accent']
          ]
        );

        $this->add_render_attribute(
          'card_one_description',
          [
            'class' => ['montessori-step__description', 'description', 'montessori-step-description']
          ]
        );

        $this->add_render_attribute(
          'card_two_title',
          [
            'class' => ['montessori-step__title', 'title', 'montessori-step-title', 'typography--accent']
          ]
        );

        $this->add_render_attribute(
          'card_two_description',
          [
            'class' => ['montessori-step__description', 'description', 'montessori-step-description']
          ]
        );

        $this->add_render_attribute(
          'card_three_title',
          [
            'class' => ['montessori-step__title', 'title', 'montessori-step-title', 'typography--accent']
          ]
        );

        $this->add_render_attribute(
          'card_three_description',
          [
            'class' => ['montessori-step__description', 'description', 'montessori-step-description']
          ]
        );

        $this->add_render_attribute(
          'card_four_title',
          [
            'class' => ['montessori-step__title', 'title', 'montessori-step-title', 'typography--accent']
          ]
        );

        $this->add_render_attribute(
          'card_four_description',
          [
            'class' => ['montessori-step__description', 'description', 'montessori-step-description']
          ]
        );

        $this->add_render_attribute(
          'card_five_title',
          [
            'class' => ['montessori-step__title', 'title', 'montessori-step-title', 'typography--accent']
          ]
        );

        $this->add_render_attribute(
          'card_five_description',
          [
            'class' => ['montessori-step__description', 'description', 'montessori-step-description']
          ]
        );
        
        ?>

        <section class='montessori-steps boxed--narrow'>
          <div class="montessori-steps__inner equal-height">
            <div class="montessori-steps__about half">
              <h2 <?php echo $this->get_render_attribute_string('section_title') ?> >
                <?php echo $settings['section_title'] ?>
              </h2>
              <img <?php echo $this->get_render_attribute_string('section_image') ?> >
            </div> <!-- .montessori-steps__about -->
            <div class="montessori-steps__cards half">
              <article class="montessori-step rounded equal-height">
                <span class="montessori-step__number typography--accent">
                  1
                </span>
                <div class="montessori-step__content">
                  <h3 <?php echo $this->get_render_attribute_string('card_one_title') ?> >
                    <?php echo $settings['card_one_title'] ?>
                  </h3>
                  <p <?php $this->get_render_attribute_string('card_one_description') ?> >
                    <?php echo $settings['card_one_description'] ?>
                  </p>
                </div>
              </article> <!-- .montessori-step -->
              <article class="montessori-step rounded equal-height">
                <span class="montessori-step__number typography--accent">
                  2
                </span>
                <div class="montessori-step__content">
                  <h3 <?php echo $this->get_render_attribute_string('card_two_title') ?> >
                    <?php echo $settings['card_two_title'] ?>
                  </h3>
                  <p <?php $this->get_render_attribute_string('card_two_description') ?> >
                    <?php echo $settings['card_two_description'] ?>
                  </p>
                </div>
              </article> <!-- .montessori-step -->
              <article class="montessori-step rounded equal-height">
                <span class="montessori-step__number typography--accent">
                  3
                </span>
                <div class="montessori-step__content">
                  <h3 <?php echo $this->get_render_attribute_string('card_three_title') ?> >
                    <?php echo $settings['card_three_title'] ?>
                  </h3>
                  <p <?php $this->get_render_attribute_string('card_three_description') ?> >
                    <?php echo $settings['card_three_description'] ?>
                  </p>
                </div>
              </article> <!-- .montessori-step -->
              <article class="montessori-step rounded equal-height">
                <span class="montessori-step__number typography--accent">
                  4
                </span>
                <div class="montessori-step__content">
                  <h3 <?php echo $this->get_render_attribute_string('card_four_title') ?> >
                    <?php echo $settings['card_four_title'] ?>
                  </h3>
                  <p <?php $this->get_render_attribute_string('card_four_description') ?> >
                    <?php echo $settings['card_four_description'] ?>
                  </p>
                </div>
              </article> <!-- .montessori-step -->
              <article class="montessori-step rounded equal-height">
                <span class="montessori-step__number typography--accent">
                  5
                </span>
                <div class="montessori-step__content">
                  <h3 <?php echo $this->get_render_attribute_string('card_five_title') ?> >
                    <?php echo $settings['card_five_title'] ?>
                  </h3>
                  <p <?php $this->get_render_attribute_string('card_five_description') ?> >
                    <?php echo $settings['card_five_description'] ?>
                  </p>
                </div>
              </article> <!-- .montessori-step -->
            </div> <!-- .montessori-steps__cards -->
          </div> <!-- .inner -->
        </section> <!-- .montessori-steps -->

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
                'class': ['video-player__title', 'title', 'video-player-title', 'typography--accent']
            }
        );

        view.addRenderAttribute(
            'section_description',
            {
                'class': ['video-player-description', 'video-player__description', 'description']
            }
        );

        view.addRenderAttribute(
            'section_background',
            {
                'class': ['video-player-background', 'video-player__background', 'masked'],
                'src': settings.section_background.url
                'alt': settings.section_title
            }
        );

        view.addRenderAttribute(
            'video_icon',
            {
                'class': ['video-player-icon', 'video-player__icon'],
                'src': settings.video_icon.url,
                'alt': 'Play Video Icon'
            }
        );

        view.addRenderAttribute(
            'video_link',
            {
                'class': 'no-click',
                'href': settings.video_link.url,
                'alt': 'Play Video'
            }
        );

        #>

        <section class='video-player-container video-player'>
            <img {{{ view.getRenderAttributeString('section_background') }}} >
            <div class="video-player__inner boxed">
              <div class="video-player__content quarter">
                <h2 {{{ view.getRenderAttributeString('section_title') }}}>
                  {{{ settings.section_title }}}
                </h2>
                <p {{{ view.getRenderAttributeString('section_description') }}} >
                  {{{ settings.section_description }}}
                </p>
                <div class="video-player__icon-container">
                  <a {{{ view.getRenderAttributeString('video_link') }}} >
                    <img {{{ view.getRenderAttributeString('video_link') }}} >
                  </a>
                </div>
                <button class="theme-button no-fill--light home-page-opener__button">
                  <a {{{ view.getRenderAttributeString('video_link') }}} >
                    Play Video
                  </a>
                </button>
              </div> <!-- .video-player__content -->
            </div> <!-- .video-player__inner -->
          </section> <!-- .video-player -->

        <?php

    }

}
