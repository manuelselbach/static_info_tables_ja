<?php

declare(strict_types=1);

return [
    \SJBR\StaticInfoTables\Domain\Model\Country::class => [
        'tableName' => 'static_countries',
        'properties' => [
            'shortNameJa' => [
                'fieldName' => 'cn_short_ja',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\CountryZone::class => [
        'tableName' => 'static_country_zones',
        'properties' => [
            'nameJa' => [
                'fieldName' => 'zn_name_ja',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Currency::class => [
        'tableName' => 'static_currencies',
        'properties' => [
            'nameJa' => [
                'fieldName' => 'cu_name_ja',
            ],
            'subdivisionNameJa' => [
                'fieldName' => 'cu_sub_name_ja',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Language::class => [
        'tableName' => 'static_languages',
        'properties' => [
            'nameJa' => [
                'fieldName' => 'lg_name_ja',
            ],
        ],
    ],
    \SJBR\StaticInfoTables\Domain\Model\Territory::class => [
        'tableName' => 'static_territories',
        'properties' => [
            'nameJa' => [
                'fieldName' => 'tr_name_ja',
            ],
        ],
    ],
];
