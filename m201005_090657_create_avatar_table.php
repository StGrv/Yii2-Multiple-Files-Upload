<?php

use yii\db\Migration;

class m201005_090657_create_avatar_table extends Migration
{
  
    public function safeUp()
    {
        $this->createTable('{{%avatar}}', [
            
            'id' => $this->primaryKey(),
            'image' => $this->string(200),
            
        ]);
    }

    public function safeDown()
    {
        $this->dropTable('{{%avatar}}');
    }
    
} // End
