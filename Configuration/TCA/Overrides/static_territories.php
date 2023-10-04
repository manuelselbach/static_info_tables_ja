<?php

declare(strict_types=1);

(static function (string $dataSetName) {
    $additionalFields = [
        'tr_name_en' => 'tr_name_ja'
    ];

    \Mselbach\StaticInfoTablesJa\Provider\TcaProvider::generateAndRegisterTca(
        $additionalFields,
        $dataSetName
    );
})('static_territories');
