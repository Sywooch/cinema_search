<?php

use yii\db\Migration;
use yii\db\Schema;

class m170315_161926_persona extends Migration
{
    public function up()
    {
        $this->createTable('{{%persona}}', [
             'id' => Schema::TYPE_PK,
             'name' => 'VARCHAR(45) NOT NULL',
             'surName' => 'VARCHAR(45) NOT NULL',
             'dateDR' => Schema::TYPE_INTEGER,
             'note' => Schema::TYPE_STRING,
         ]);
    }

    public function down()
    {
        echo "m170315_161926_persona cannot be reverted.\n";

        return false;
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
