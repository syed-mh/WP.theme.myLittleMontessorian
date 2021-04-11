<?php

/**
 * @author Syed Mohammed Hassan <mohammad.hassan@va8ivedigital.com>
 */

namespace MLM\Widgets;

/**
 * Security measure
 */
if(!defined('ABSPATH')) exit;

class IconCardWithText extends \Elementor\Widget_Base {
    
    /**
     * Widget Name
     * @return string
     */
    public function get_name() {
        return 'Icon Card With Text';
    }

    /**
     * Widget Title
     * @return string
     */
    public function get_title() {
        return 'Icon Card With Text';
    }

    /**
     * Icon for this widget
     * @return string
     */
    public function get_icon() {
        return 'fa fa-address-card';
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
                'label' => 'Edit Card One'
            ]
        );

        $this->add_control(
            'card_one_title',
            [
                'label'     => 'Card One Title',
                'type'      => \Elementor\Controls_Manager::TEXT,
                'default'   => 'Card Title'
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
        
        $this->add_control(
          'card_one_image',
          [
            'label'     => 'Card One Icon',
            'type'      => \Elementor\Controls_Manager::MEDIA,
            'default'   => ['url' => \Elementor\Utils::get_placeholder_image_src()]
            ]
          );

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
                'default'   => 'Card Title'
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
        
        $this->add_control(
          'card_two_image',
          [
            'label'     => 'Card Two Icon',
            'type'      => \Elementor\Controls_Manager::MEDIA,
            'default'   => ['url' => \Elementor\Utils::get_placeholder_image_src()]
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
                'default'   => 'Card Title'
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
        
        $this->add_control(
          'card_three_image',
          [
            'label'     => 'Card Three Icon',
            'type'      => \Elementor\Controls_Manager::MEDIA,
            'default'   => ['url' => \Elementor\Utils::get_placeholder_image_src()]
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
                'default'   => 'Card Title'
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
        
        $this->add_control(
          'card_four_image',
          [
            'label'     => 'Card Four Icon',
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
        $this->add_inline_editing_attributes('card_one_title', 'basic');
        $this->add_inline_editing_attributes('card_one_description', 'basic');

        $this->add_inline_editing_attributes('card_two_title', 'basic');
        $this->add_inline_editing_attributes('card_two_description', 'basic');

        $this->add_inline_editing_attributes('card_three_title', 'basic');
        $this->add_inline_editing_attributes('card_three_description', 'basic');

        $this->add_inline_editing_attributes('card_four_title', 'basic');
        $this->add_inline_editing_attributes('card_four_description', 'basic');
        
        $this->add_render_attribute(
            'card_one_title',
            [
                'class' => ['card__title', 'title', 'card-title', 'typography--accent']
            ]
        );

        $this->add_render_attribute(
            'card_one_description',
            [
                'class' => ['card__description', 'card-description', 'description']
            ]
        );

        $this->add_render_attribute(
            'card_one_image',
            [
                'class' => ['card__image', 'half', 'card-image', 'shadow-filter'],
                'src' => $settings['card_one_image']['url'],
                'alt' => $settings['card_one_title']
            ]
        );

        $this->add_render_attribute(
            'card_two_title',
            [
                'class' => ['card__title', 'title', 'card-title', 'typography--accent']
            ]
        );

        $this->add_render_attribute(
            'card_two_description',
            [
                'class' => ['card__description', 'card-description', 'description']
            ]
        );

        $this->add_render_attribute(
            'card_two_image',
            [
                'class' => ['card__image', 'half', 'card-image', 'shadow-filter'],
                'src' => $settings['card_two_image']['url'],
                'alt' => $settings['card_two_title']
            ]
        );

        $this->add_render_attribute(
            'card_three_title',
            [
                'class' => ['card__title', 'title', 'card-title', 'typography--accent']
            ]
        );

        $this->add_render_attribute(
            'card_three_description',
            [
                'class' => ['card__description', 'card-description', 'description']
            ]
        );

        $this->add_render_attribute(
            'card_three_image',
            [
                'class' => ['card__image', 'half', 'card-image', 'shadow-filter'],
                'src' => $settings['card_three_image']['url'],
                'alt' => $settings['card_three_title']
            ]
        );

        $this->add_render_attribute(
            'card_four_title',
            [
                'class' => ['card__title', 'title', 'card-title', 'typography--accent']
            ]
        );

        $this->add_render_attribute(
            'card_four_description',
            [
                'class' => ['card__description', 'card-description', 'description']
            ]
        );

        $this->add_render_attribute(
            'card_four_image',
            [
                'class' => ['card__image', 'half', 'card-image', 'shadow-filter'],
                'src' => $settings['card_four_image']['url'],
                'alt' => $settings['card_four_title']
            ]
        );
        
        ?>

        <section class="icon-with-text-container card-container equal-height boxed">
            <article class="card quarter">
                <div class="card__inner">
                    <img <?php echo $this->get_render_attribute_string('card_one_image') ?> >
                    <h3 <?php echo $this->get_render_attribute_string('card_one_title') ?> >
                        <?php echo $settings['card_one_title'] ?>
                    </h3>
                    <p <?php echo $this->get_render_attribute_string('card_one_description') ?> >
                        <?php echo $settings['card_one_description'] ?>
                    </p>
                </div>
            </article> <!-- .card -->
            <article class="card quarter">
                <div class="card__inner">
                    <img <?php echo $this->get_render_attribute_string('card_two_image') ?> >
                    <h3 <?php echo $this->get_render_attribute_string('card_two_title') ?> >
                        <?php echo $settings['card_two_title'] ?>
                    </h3>
                    <p <?php echo $this->get_render_attribute_string('card_two_description') ?> >
                        <?php echo $settings['card_two_description'] ?>
                    </p>
                </div>
            </article> <!-- .card -->
            <article class="card quarter">
                <div class="card__inner">
                    <img <?php echo $this->get_render_attribute_string('card_three_image') ?> >
                    <h3 <?php echo $this->get_render_attribute_string('card_three_title') ?> >
                        <?php echo $settings['card_three_title'] ?>
                    </h3>
                    <p <?php echo $this->get_render_attribute_string('card_three_description') ?> >
                        <?php echo $settings['card_three_description'] ?>
                    </p>
                </div>
            </article> <!-- .card -->
            <article class="card quarter">
                <div class="card__inner">
                    <img <?php echo $this->get_render_attribute_string('card_four_image') ?> >
                    <h3 <?php echo $this->get_render_attribute_string('card_four_title') ?> >
                        <?php echo $settings['card_four_title'] ?>
                    </h3>
                    <p <?php echo $this->get_render_attribute_string('card_four_description') ?> >
                        <?php echo $settings['card_four_description'] ?>
                    </p>
                </div>
            </article> <!-- .card -->
        </section> <!-- .card-container -->

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
