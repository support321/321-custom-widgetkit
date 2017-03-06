<?php

return array(

    'name' => 'widget/art-list',

    'main' => 'YOOtheme\\Widgetkit\\Widget\\Widget',

    'config' => array(

        'name'  => 'art-list',
        'label' => 'Lista con data',
        'core'  => false,
        'icon'  => 'plugins/widgets/art-list/widget.svg',
        'view'  => 'plugins/widgets/art-list/views/widget.php',
        'item'  => array('title', 'content', 'media'),
        'settings' => array(
            'list'              => 'line',

            'media'             => true,
            'image_width'       => 'auto',
            'image_height'      => 'auto',
            'media_align'       => 'left',
            'content_align'     => true,
            'media_border'      => 'none',

            'title'             => 'title',
            'title_size'        => 'default',
            'title_truncate'    => '',
            'link'              => true,
            'link_color'        => 'muted',

            'link_target'       => false,
            'class'             => ''
        )

    ),

    'events' => array(

        'init.site' => function($event, $app) {
        },

        'init.admin' => function($event, $app) {
            $app['angular']->addTemplate('art-list.edit', 'plugins/widgets/art-list/views/edit.php', true);
        }

    )

);
