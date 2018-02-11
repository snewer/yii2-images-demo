<?php

use yii\db\Migration;

/**
 * Class m180211_211738_demo_model
 */
class m180211_211738_demo_model extends Migration
{


    public function safeUp()
    {
        $this->createTable('{{%demo}}', [
            'id' => $this->primaryKey()->unsigned(),
            'name' => $this->string(),
            'image_id' => $this->integer()->unsigned()
        ]);
    }


    public function safeDown()
    {
        echo "m180211_211738_demo_model cannot be reverted.\n";

        return false;
    }

}
