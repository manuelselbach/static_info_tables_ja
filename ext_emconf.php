<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'Static Info Tables (ja)',
    'description' => '(ja) language pack for the Static Info Tables providing localized names for countries, 
                       currencies and so on.',
    'category' => 'misc',
    'version' => '6.7.0',
    'dependencies' => '',
    'state' => 'stable',
    'uploadfolder' => false,
    'createDirs' => '',
    'clearcacheonload' => true,
    'author' => 'Manuel Selbach',
    'author_email' => 'manuel_selbach@yahoo.de',
    'author_company' => '',
    'constraints' => [
        'depends' => [
            'typo3' => '9.5.0-10.4.99',
            'static_info_tables' => '6.9.0-6.9.99',
            'php' => '7.2.0-0.0.0',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
