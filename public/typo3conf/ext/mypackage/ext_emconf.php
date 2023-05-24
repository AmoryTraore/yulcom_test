<?php

/**
 * Extension Manager/Repository config file for ext "mypackage".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'mypackage',
    'description' => '',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '12.0.0-12.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'SoumouTech\\Mypackage\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Amory TRAORE',
    'author_email' => 'amorytraoreinf@gmail.com',
    'author_company' => 'soumou tech',
    'version' => '1.0.0',
];
