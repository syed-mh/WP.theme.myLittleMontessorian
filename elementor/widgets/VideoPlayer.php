<?php

/**
 * @author Syed Mohammed Hassan <mohammad.hassan@va8ivedigital.com>
 */

namespace MLM\Widgets;

/**
 * Security measure
 */
if(!defined('ABSPATH')) exit;

class VideoPlayer extends \Elementor\Widget_Base {
    
    /**
     * Widget Name
     * @return string
     */
    public function get_name() {
        return 'Video Player';
    }

    /**
     * Widget Title
     * @return string
     */
    public function get_title() {
        return 'Video Player';
    }

    /**
     * Icon for this widget
     * @return string
     */
    public function get_icon() {
        return 'fa fa-youtube';
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
                'type'      => \Elementor\Controls_Manager::TEXT,
                'default'   => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Accusantium quos at reprehenderit sed quia.'
            ]
        );
        
        $this->add_control(
          'section_background',
          [
            'label'     => 'Section Background',
            'type'      => \Elementor\Controls_Manager::MEDIA,
            'default'   => ['url' => \Elementor\Utils::get_placeholder_image_src()]
            ]
          );

        $this->add_control(
          'video_icon',
          [
            'label'     => 'Video Icon',
            'type'      => \Elementor\Controls_Manager::MEDIA,
            'default'   => ['url' => \Elementor\Utils::get_placeholder_image_src()]
            ]
          );

        $this->add_control(
          'video_link',
          [
            'label'     => 'Video Link',
            'type'      => \Elementor\Controls_Manager::URL,
            'default'   => ['url' => 'https://youtube.com/']
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
                'class' => ['video-player__title', 'title', 'video-player-title', 'typography--accent']
            ]
        );

        $this->add_render_attribute(
            'section_description',
            [
                'class' => ['video-player-description', 'video-player__description', 'description']
            ]
        );

        $this->add_render_attribute(
            'section_background',
            [
                'class' => ['video-player-background', 'video-player__background', 'masked'],
                'src' => $settings['section_background']['url'],
                'alt' => $settings['section_title']
            ]
        );

        $this->add_render_attribute(
            'video_icon',
            [
                'class' => ['video-player-icon', 'video-player__icon'],
                'src' => $settings['video_icon']['url'],
                'alt' => 'Play Video Icon'
            ]
        );

        $this->add_render_attribute(
            'video_link',
            [
                'class' => 'no-link',
                'href' => $settings['video_link']['url'],
                'alt' => 'Play Video'
            ]
        );
        
        ?>

          <section class='video-player-container video-player'>
            <img <?php echo $this->get_render_attribute_string('section_background') ?> >
            <div class="video-player__inner boxed">
              <div class="video-player__content quarter">
                <h2 <?php echo $this->get_render_attribute_string('section_title') ?>>
                  <?php echo $settings['section_title'] ?>
                </h2>
                <p <?php echo $this->get_render_attribute_string('section_description') ?> >
                  <?php echo $settings['section_description'] ?>
                </p>
                <div class="video-player__icon-container">
                  <a <?php echo $this->get_render_attribute_string('video_link') ?> >
                    <img <?php echo $this->get_render_attribute_string('video_icon') ?> >
                  </a>
                </div>
                <button class="theme-button no-fill--light home-page-opener__button">
                  <a <?php echo $this->get_render_attribute_string('video_link') ?> >
                    Play Video
                  </a>
                </button>
              </div>
            </div>
          </section>

        <?php

    }

    /**
     * JS renderer
     */
    protected function _content_template() {

        ?>

        <#

        view.addInlineEditingAttributes('card_one_title', 'basic');
        view.addInlineEditingAttributes('card_one_description', 'basic');

        view.addInlineEditingAttributes('card_two_title', 'basic');
        view.addInlineEditingAttributes('card_two_description', 'basic');

        view.addInlineEditingAttributes('card_three_title', 'basic');
        view.addInlineEditingAttributes('card_three_description', 'basic');

        view.addInlineEditingAttributes('card_four_title', 'basic');
        view.addInlineEditingAttributes('card_four_description', 'basic');
        
        view.addRenderAttribute(
            'card_one_title',
            {
                'class': ['card__title', 'title', 'card-title', 'typography--accent']
            }
        );

        view.addRenderAttribute(
            'card_one_description',
            {
                'class': ['card__description', 'card-description', 'description']
            }
        );

        view.addRenderAttribute(
            'card_one_image',
            {
                'class': ['card__image', 'half', 'card-image', 'shadow-filter'],
                'src': settings.card_one_image.url,
                'alt': settings.card_one_title
            }
        );

        view.addRenderAttribute(
            'card_two_title',
            {
                'class': ['card__title', 'title', 'card-title', 'typography--accent']
            }
        );

        view.addRenderAttribute(
            'card_two_description',
            {
                'class': ['card__description', 'card-description', 'description']
            }
        );

        view.addRenderAttribute(
            'card_two_image',
            {
                'class': ['card__image', 'half', 'card-image', 'shadow-filter'],
                'src': settings.card_two_image.url,
                'alt': settings.card_two_title
            }
        );

        view.addRenderAttribute(
            'card_three_title',
            {
                'class': ['card__title', 'title', 'card-title', 'typography--accent']
            }
        );

        view.addRenderAttribute(
            'card_three_description',
            {
                'class': ['card__description', 'card-description', 'description']
            }
        );

        view.addRenderAttribute(
            'card_three_image',
            {
                'class': ['card__image', 'half', 'card-image', 'shadow-filter'],
                'src': settings.card_three_image.url,
                'alt': settings.card_three_title
            }
        );

        view.addRenderAttribute(
            'card_four_title',
            {
                'class': ['card__title', 'title', 'card-title', 'typography--accent']
            }
        );

        view.addRenderAttribute(
            'card_four_description',
            {
                'class': ['card__description', 'card-description', 'description']
            }
        );

        view.addRenderAttribute(
            'card_four_image',
            {
                'class': ['card__image', 'half', 'card-image', 'shadow-filter'],
                'src': settings.card_four_image.url,
                'alt': settings.card_four_title
            }
        );

        #>

        <section class="icon-with-text-container card-container equal-height boxed">
            <article class="card quarter">
                <div class="card__inner">
                    <img {{{ view.getRenderAttributeString('card_one_image') }}} >
                    <h3 {{{ getRenderAttributeString('card_one_title') }}} >
                        {{{ settings.card_one_title }}}
                    </h3>
                    <p {{{ view.getRenderAttributeString('card_one_description') }}} >
                        {{{ settings.card_one_description }}}
                    </p>
                </div>
            </article> <!-- .card -->
            <article class="card quarter">
                <div class="card__inner">
                    <img {{{ view.getRenderAttributeString('card_two_image') }}} >
                    <h3 {{{ getRenderAttributeString('card_two_title') }}} >
                        {{{ settings.card_two_title }}}
                    </h3>
                    <p {{{ view.getRenderAttributeString('card_two_description') }}} >
                        {{{ settings.card_two_description }}}
                    </p>
                </div>
            </article> <!-- .card -->
            <article class="card quarter">
                <div class="card__inner">
                    <img {{{ view.getRenderAttributeString('card_three_image') }}} >
                    <h3 {{{ getRenderAttributeString('card_three_title') }}} >
                        {{{ settings.card_three_title }}}
                    </h3>
                    <p {{{ view.getRenderAttributeString('card_three_description') }}} >
                        {{{ settings.card_three_description }}}
                    </p>
                </div>
            </article> <!-- .card -->
            <article class="card quarter">
                <div class="card__inner">
                    <img {{{ view.getRenderAttributeString('card_four_image') }}} >
                    <h3 {{{ getRenderAttributeString('card_four_title') }}} >
                        {{{ settings.card_four_title }}}
                    </h3>
                    <p {{{ view.getRenderAttributeString('card_four_description') }}} >
                        {{{ settings.card_four_description }}}
                    </p>
                </div>
            </article> <!-- .card -->
        </section> <!-- .card-container -->

        <?php

    }

}
