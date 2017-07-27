<?php
defined('TYPO3_MODE') or die();

$initialize = function ($dataSetName) {
    $additionalFields = [
        'zn_name_en' => 'zn_name_ja',
    ];

    \Mselbach\StaticInfoTablesJa\Provider\TcaProvider::generateAndRegisterTca(
        $additionalFields,
        $dataSetName
    );
};
$initialize('static_country_zones');
unset($initialize);
