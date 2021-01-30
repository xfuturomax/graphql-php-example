<?php

namespace app\modules\graphql\controllers;

use yii\graphql\GraphQLAction;
use yii\rest\Controller;

class DefaultController extends Controller
{
    public function behaviors(): array
    {
        $behaviors = parent::behaviors();
        unset($behaviors['rateLimiter']);

        return $behaviors;
    }

    public function actions(): array
    {
        return [
            'index' => [
                'class' => GraphQLAction::class,
            ],
        ];
    }
}
