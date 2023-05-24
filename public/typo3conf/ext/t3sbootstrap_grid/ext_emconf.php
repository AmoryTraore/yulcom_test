<?php

/***************************************************************
 * Extension Manager/Repository config file for ext: "t3sbootstrap_grid"
 *
 * Auto generated by Extension Builder 2020-06-25
 *
 * Manual updates:
 * Only the data in the array - anything else is removed by next write.
 * "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = [
    'title' => 'Bootstrap Grid System',
    'description' => 'Bootstrap 5 grid system from the EXT:t3sbootstrap. Example and info: www.t3sbootstrap.de/dokumentation/extensions/t3sbootstrap-grid - This extension was sponsored by Michael Baer.',
    'category' => 'templates',
    'author' => 'Helmut Hackbarth',
    'author_email' => 'typo3@t3solution.de',
    'state' => 'stable',

    'version' => '2.0.1',
    'constraints' => [
	'depends' => [
		'typo3' => '10.4.4-11.99.99',
		'container' => '2.0.5-2.99.99'
	],
    'conflicts' => [
		't3sbootstrap' => '*',        
    ],
    'suggests' => [],
    ],
];