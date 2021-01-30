<?php

namespace app\modules\graphql\models;

use yii\graphql\base\GraphQLQuery;
use yii\graphql\GraphQL;

class TestQuery extends GraphQLQuery
{
    public function type()
    {
        return GraphQL::type(CharacterType::class);
    }

    public function resolve()
    {
        return ['id' => 1, 'name' => 'human'];
    }
}
