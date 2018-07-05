<?php

$sMetadataVersion = '2.0';

$aModule = [
    'id'          => 'phpmag_badges',
    'title'       => [
        'de' => 'PHP-Magazin :: Artikel-Badges',
        'en' => 'PHP-Magazin :: Article-Badges',
    ],
    'description' => [
        'de' => 'Anzeige eines Artikel-Badges auf der Kategorie und Detailseite',
        'en' => 'Display of an article badge on the category and detail page',
    ],
    'version'     => '1.0',
    'author'      => 'Code.Commerce - Christopher Bauer',
    'email'       => 'info@codecommerce.de',
    'url'         => 'http://www.codecommerce.de',
    'thumbnail'   => '../logo.jpg',
    'extend'      => [
        \OxidEsales\Eshop\Application\Model\Article::class => PhpMagazin\Badges\Model\Article::class,
    ],
    'settings'    => [
        [
            'group' => 'PhpMagBadgeSettings',
            'name'  => 'aPhpMagArticleBadges',
            'type'  => 'aarr',
            'value' => [
                'Sale'    => 'sale.jpg',
                'Reduced' => 'reduced.jpg',
            ],
        ],
        [
            'group' => 'PhpMagBadgeSettings',
            'name'  => 'sPhpMagArticleBadgespath',
            'type'  => 'str',
            'value' => 'out/pictures/master/badges/',
        ],
    ],
    'blocks'      => [
        [
            'template' => 'article_main.tpl',
            'block'    => 'admin_article_main_form',
            'file'     => '/views/blocks/article_main__admin_article_main_form.tpl',
        ],
        [
            'template' => 'page/details/inc/productmain.tpl',
            'block'    => 'details_productmain_title',
            'file'     => '/views/blocks/productmain__details_productmain_title.tpl',
        ],
        [
            'template' => 'widget/product/listitem_infogrid.tpl',
            'block'    => 'widget_product_listitem_infogrid_price',
            'file'     => '/views/blocks/listitem_infogrid__widget_product_listitem_infogrid_price.tpl',
        ],
    ],
];
