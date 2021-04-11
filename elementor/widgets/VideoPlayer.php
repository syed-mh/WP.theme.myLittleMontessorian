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
                'class' => 'no-click',
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
            </div> <!-- .video-player__content -->
          </div> <!-- .video-player__inner -->
        </section> <!-- .video-player -->

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
