<?php

return array(

    'name' => 'widget/velina',

    'main' => 'YOOtheme\\Widgetkit\\Widget\\Widget',

    'config' => array(

        'name'  => 'velina',
        'label' => 'VELINA',
        'core'  => true,
        'icon'  => 'plugins/widgets/velina/widget.svg',
        'view'  => 'plugins/widgets/velina/views/widget.php',
        'item'  => array('title', 'content', 'media'),
        'fields' => array(
            array(
                'type' => 'editor',
                'name' => 'lightbox_content',
                'label' => 'Lightbox Content'
            )
        ),
        'settings' => array(
            'grid'                   => 'default',
            'parallax'               => false,
            'parallax_translate'     => '',
            'gutter'                 => 'default',
            'gutter_dynamic'         => '20',
            'gutter_v_dynamic'       => '',
            'filter'                 => 'none',
            'filter_tags'            => array(),
            'filter_align'           => 'left',
            'filter_all'             => true,
            'columns'                => '1',
            'columns_small'          => 0,
            'columns_medium'         => 0,
            'columns_large'          => 0,
            'columns_xlarge'         => 0,
            'animation'              => 'none',

            'image_width'            => 'auto',
            'image_height'           => 'auto',
            'media_border'           => 'none',
            'overlay'                => 'default',
            'panel'                  => 'blank',
            'overlay_center'         => 'icon',
            'overlay_background'     => 'hover',
            'overlay_image'          => false,
            'hover_overlay'          => true,
            'overlay_animation'      => 'fade',
            'image_animation'        => 'scale',

            'title'                  => true,
            'content'                => true,
            'title_size'             => 'panel',
            'link'                   => false,
            'link_style'             => 'button',
            'link_icon'              => 'share',
            'link_text'              => 'View',

            'lightbox'               => 'default',
            'lightbox_caption'       => 'title',
            'lightbox_nav_width'     => '70',
            'lightbox_nav_height'    => '70',
            'lightbox_nav_contrast'  => true,
            'lightbox_title_size'    => 'panel',
            'lightbox_content_size'  => '',
            'lightbox_content_width' => '',
            'lightbox_width'         => 'auto',
            'lightbox_height'        => 'auto',
            'lightbox_alt'           => false,

            'lightbox_link'          => false,
            'lightbox_style'         => 'button',
            'lightbox_icon'          => 'search',
            'lightbox_text'          => 'Details',

            'link_target'            => false,
            'class'                  => ''
        )

    ),

    'events' => array(

        'init.site' => function($event, $app) {
            $app['scripts']->add('uikit2-grid', "vendor/assets/uikit/js/components/grid.min.js", array('uikit2'));
            // $app['scripts']->add('uikit2-lightbox', "vendor/assets/uikit/js/components/lightbox.min.js", array('uikit2'));
            $app['scripts']->add('uikit2-slideshow', "vendor/assets/uikit/js/components/slideshow.min.js", array('uikit2'));
            // $app['scripts']->add('uikit2-grid-parallax', "vendor/assets/uikit/js/components/grid-parallax.min.js", array('uikit2'));
        },

        'init.admin' => function($event, $app) {
            $app['angular']->addTemplate('velina.edit', 'plugins/widgets/velina/views/edit.php', true);
        }

    )

);
