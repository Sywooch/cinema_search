<?php

use yii\db\Migration;
use yii\db\Schema;

class m170326_140305_limitage extends Migration
{
    public function up()
    {
        $this->createTable('{{%limitage}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
        ]);
    }

    public function down()
    {
        echo "m170326_140305_limitage cannot be reverted.\n";

        $this->dropTable('limitage');

        return true;
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
