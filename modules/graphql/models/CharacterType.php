<?php

namespace app\modules\graphql\models;

use GraphQL\Type\Definition\Type;
use yii\graphql\base\GraphQLInterfaceType;
use yii\graphql\GraphQL;

class CharacterType extends GraphQLInterfaceType
{
    protected $attributes
        = [
            'name' => 'Character',
        ];

    public function resolveType($value)
    {
        if ($value['name'] === 'human') {
            return GraphQL::type(HumanType::class);
        }

        return GraphQL::type(DroidType::class);
    }

    public function fields(): array
    {
        return [
            'id'   => [
                'type'        => Type::nonNull(Type::string()),
                'description' => 'The id of the character.',
            ],
            'name' => [
                'type'        => Type::string(),
                'description' => 'The name of the character.',
            ],
        ];
    }
}
