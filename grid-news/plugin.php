<?php
/**
* @package   yoo_news
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright (C) YOOtheme GmbH
* @license   http://www.gnu.org/licenses/gpl.html GNU/GPL
*/

return array(

    'name' => 'widget/grid-news',

    'main' => 'YOOtheme\\Widgetkit\\Widget\\Widget',

    'config' => array(

        'name'  => 'grid-news',
        'label' => 'Grid News',
        'core'  => false,
        'icon'  => 'plugins/widgets/grid-news/widget.svg',
        'view'  => 'plugins/widgets/grid-news/views/widget.php',
        'item'  => array('title', 'content', 'media'),
        'settings' => array(
            'gutter'            => 'default',
            'columns'           => '1',
            'columns_small'     => 0,
            'columns_medium'    => 0,
            'columns_large'     => '2',
            'columns_xlarge'    => 0,
            'animation'         => 'none',

            'title'             => true,
            'content'           => true,
            'title_size'        => 'panel',
            'link'              => true,
            'link_style'        => 'button',
            'link_text'         => 'Continua',
            'badge'             => true,
            'badge_style'       => 'badge',
            'badge_position'    => 'panel',

            'link_target'       => false,
            'date_format'       => 'medium',
            'class'             => ''
        )

    ),

    'events' => array(

        'init.site' => function($event, $app) {
        },

        'init.admin' => function($event, $app) {
            $app['angular']->addTemplate('grid-news.edit', 'plugins/widgets/grid-news/views/edit.php', true);
        }

    )

);
