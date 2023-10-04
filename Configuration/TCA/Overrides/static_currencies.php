<?php

declare(strict_types=1);

(static function (string $dataSetName) {
    $additionalFields = [
        'cu_name_en' => 'cu_name_ja',
        'cu_sub_name_en' => 'cu_sub_name_ja',
    ];

    \Mselbach\StaticInfoTablesJa\Provider\TcaProvider::generateAndRegisterTca(
        $additionalFields,
        $dataSetName
    );
})('static_currencies');
