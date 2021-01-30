<?php

use yii\web\JsonParser;
use app\modules\graphql\GraphqlModule;
use app\modules\graphql\models\DroidType;
use app\modules\graphql\models\HumanType;
use app\modules\graphql\models\TestQuery;
use yii\web\Request;

return [
    'id'                  => 'app',
    'basePath'            => __DIR__ . '/..',
    'controllerNamespace' => 'app\controllers',
    'bootstrap'           => ['graphql'],
    'modules'             => [
        'graphql' => [
            'class'  => GraphqlModule::class,
            'schema' => [
                'query' => [
                    'test' => TestQuery::class,
                ],
                'types' => [
                    'Droid' => DroidType::class,
                    'Human' => HumanType::class,
                ],
            ],
        ],
    ],
    'components'          => [
        'request'    => [
            'class'   => Request::class,
            'parsers' => [
                'application/json' => JsonParser::class,
            ],
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName'  => false,
        ],
    ],
];
