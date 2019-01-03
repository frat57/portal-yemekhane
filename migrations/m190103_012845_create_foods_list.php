<?php

use yii\db\Migration;

/**
 * Class m190103_012845_create_foods_list
 */
class m190103_012845_create_foods_list extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
			$this->createTable('Foodlist', [
            'food_id' => $this->integer(11),
            'name' => $this->string(11),
            'calorie' => $this->integer(11),
			'type' => $this->string(3),
			'carbonhydrate' => $this->integer(11),
			'protein' => $this->integer(11),
            'PRIMARY KEY(food_id)',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190103_012845_create_foods_list cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190103_012845_create_foods_list cannot be reverted.\n";

        return false;
    }
    */
}
