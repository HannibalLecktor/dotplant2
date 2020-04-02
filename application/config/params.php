<?php

use yii\helpers\ArrayHelper;

$params = [
    'adminEmail' => 'fans7288@gmail.com',
    'icon-framework' => 'fa',
    'rbacType' => [
        \yii\rbac\Item::TYPE_PERMISSION => 'Permission',
        \yii\rbac\Item::TYPE_ROLE => 'Role',
    ],
    'currency' => '<del>Р</del>',
    'hostInfo' => 'localhost'
];

return ArrayHelper::merge(
    $params,
    file_exists(__DIR__ . '/params-local.php') ? require(__DIR__ . '/params-local.php') : [],
    file_exists(__DIR__ . '/../web/theme/module/config/params.php')
    ? require(__DIR__ . '/../web/theme/module/config/params.php')
    : []
);
