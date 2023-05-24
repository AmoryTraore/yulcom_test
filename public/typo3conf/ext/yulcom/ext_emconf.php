<?php

/**
 * Extension Manager/Repository config file for ext "yulcom".
 */
$EM_CONF[$_EXTKEY] = [
    'title' => 'yulcom',
    'description' => 'my package',
    'category' => 'templates',
    'constraints' => [
        'depends' => [
            'bootstrap_package' => '12.0.0-13.9.99',
        ],
        'conflicts' => [
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'DjiguiyaBlo\\Yulcom\\' => 'Classes',
        ],
    ],
    'state' => 'stable',
    'uploadfolder' => 0,
    'createDirs' => '',
    'clearCacheOnLoad' => 1,
    'author' => 'Amory TRAORE',
    'author_email' => 'amorytraoreinf@gmail.com',
    'author_company' => 'djiguiya blo',
    'version' => '1.0.0',
];
