<?php

declare(strict_types=1);

(static function (string $dataSetName) {
    $additionalFields = [
        'zn_name_en' => 'zn_name_ja'
    ];

    \Mselbach\StaticInfoTablesJa\Provider\TcaProvider::generateAndRegisterTca(
        $additionalFields,
        $dataSetName
    );
})('static_country_zones');
