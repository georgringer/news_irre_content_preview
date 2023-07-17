<?php

$EM_CONF[$_EXTKEY] = [
    'title' => 'IRRE Content Preview for News',
    'description' => 'Bring back the IRRE Content Preview for News',
    'category' => 'be',
    'author' => 'Georg Ringer',
    'author_email' => 'mail@ringer.it',
    'state' => 'stable',
    'clearCacheOnLoad' => true,
    'version' => '1.0.1',
    'constraints' => [
        'depends' => [
            'typo3' => '11.5.23-11.5.99',
            'news' => '10.0.0-11.9.99',
        ],
        'conflicts' => [],
        'suggests' => [],
    ],
];
