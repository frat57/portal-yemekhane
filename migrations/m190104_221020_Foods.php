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
            'type' => "ENUM ('Çorba','Ana Yemek','Tatlı') NOT NULL DEFAULT 'Çorba'",
            'carbonhydrate' => $this->integer(11)->notNull(),
            'protein' => $this->integer(11)->notNull()
        ],$tableoptions);
            
            $tableoptions = null;
            if($this->db->driverName === 'mysql'){
                $tableoptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB';
            }
            $TABLE_NAME = 'Listem';
            $this->createTable($TABLE_NAME,[
                'Listem_id' => $this->primaryKey(),
                'food_id' => $this->integer(11)->notNull(),
                'user_id' => $this->integer(11)->notNull(),
                'date_time' => $this->date('yyyy','MM','dd')->notNull()
            ],$tableoptions);
            
            $this->createIndex(
            'idx-Listem-food_id',
            'Listem',
            'food_id'
        );
        $this->addForeignKey(
            'fk-Listem-food_id',
            'Listem',
            'food_id',
            'foods',
            'food_id',
            'CASCADE'
        );
    }

    public function  Down()
    {
        $this->dropForeignKey(
            'fk-Listem-food_id',
            'Listem'
        );
        $this->dropIndex(
            'idx-Listem-food_id',
            'Listem'
        );
        $this->dropForeignKey();
       $TABLE_NAME = 'foods';
       $this->dropTable($TABLE_NAME);
       $TABLE_NAME ='Listem';
       $this->dropTable($TABLE_NAME);
    
    }

}
