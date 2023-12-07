<?php

/**
 * Extension Manager/Repository config file for ext "sitepackage_comeun1ty".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'sitepackage-comeun1ty',
    'description' => 'Site package for Comeun1ty.NET web page',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'typo3' => '12.4.0-12.4.99',
            'fluid_styled_content' => '12.4.0-12.4.99',
            'rte_ckeditor' => '12.4.0-12.4.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Dduers\\SitepackageComeun1ty\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Daniel Dürsteler',
    'author_email' => 'daniel.duersteler@xsite.net',
    'author_company' => 'XSite Web Development & Design',
    'version' => '1.0.0',
];
