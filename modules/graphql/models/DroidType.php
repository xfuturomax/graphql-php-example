<?php


namespace app\modules\graphql\models;

use GraphQL\Type\Definition\Type;
use yii\graphql\base\GraphQLType;
use yii\graphql\GraphQL;

class DroidType extends GraphQLType
{
    protected $attributes
        = [
            'name'        => 'Droid',
        ];

    public function interfaces(): array
    {
        return [GraphQL::type(CharacterType::class)];
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
