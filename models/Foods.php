<?php

namespace kouosl\yemekhane\models;

use Yii;

/**
 * This is the model class for table "foods".
 *
 * @property int $food_id
 * @property string $name
 * @property string $type
 * @property int $calorie
 * @property int $carbonhydrate
 * @property int $protein
 */
class Foods extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'foods';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['food_id', 'name', 'type', 'calorie', 'carbonhydrate', 'protein'], 'required'],
            [['food_id', 'calorie', 'carbonhydrate', 'protein'], 'integer'],
            [['type'], 'string'],
            [['name'], 'string', 'max' => 11],
            [['food_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'food_id' => 'Food ID',
            'name' => 'Name',
            'type' => 'Type',
            'calorie' => 'Calorie',
            'carbonhydrate' => 'Carbonhydrate',
            'protein' => 'Protein',
        ];
    }
}
