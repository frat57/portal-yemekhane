<?php

use yii\db\Migration;

/**
 * Class m190104_221020_Foods
 */
class m190104_221020_Foods extends Migration
{
    
    public function Up()
    {
        $tableoptions = null;
        if($this->db->driverName === 'mysql'){
            $tableoptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
        }
        
        $TABLE_NAME = 'foods';
            $this->createTable($TABLE_NAME, [
            'food_id' => $this->primaryKey(),
            'name' => $this->string(11)->notNull(),
            'calorie' => $this->integer(11)->notNull(),
            'type' => $this->integer(3)->notNull(),
            'carbonhydrate' => $this->integer(11)->notNull(),
            'protein' => $this->integer(11)->notNull()
        ],$tableoptions);
            
            $tableoptions = null;
            if($this->db->driverName === 'mysql'){
                $tableoptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
            }
            $TABLE_NAME = 'Listem';
            $this->createTable($TABLE_NAME,[
                'food_id' => $this->primaryKey(),
                'user_id' => $this->integer(11)->notNull(),
                'date_time' => $this->date('yyyy','MM','dd')->notNull()
            ],$tableoptions);
    }

    public function  Down()
    {
       $TABLE_NAME = 'foods';
       $this->dropTable($TABLE_NAME);
       $TABLE_NAME ='Listem';
       $this->dropTable($TABLE_NAME);
    
    }

}
