<?php

namespace kouosl\yemekhane\models;

use Yii;

/**
 * This is the model class for table "Listem".
 *
 * @property int $food_id
 * @property int $user_id
 * @property string $date_time
 */
class Listem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Listem';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['food_id', 'date_time'], 'required'],
            [['food_id'], 'integer'],
            [['date_time'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'food_id' => 'Food ID',
            'user_id' => 'User ID',
            'date_time' => 'Date Time',
        ];
    }
}
