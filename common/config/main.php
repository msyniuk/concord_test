<?php
return [
    'aliases' => [
        '@bower' => '@vendor/bower-asset',
        '@npm'   => '@vendor/npm-asset',
    ],
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'id' => 'concord',
    'name' => 'Concord Test App',
    'components' => [
        'cache$' => [
            'class' => 'yii\caching\FileCache',
        ],
    ],
];
