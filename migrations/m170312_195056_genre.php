<?php

use yii\db\Migration;
use yii\db\Schema;


class m170312_195056_genre extends Migration
{
    public function up()
    {
        $this->createTable('{{%genre}}', [
            'id' => Schema::TYPE_PK,
            'gname' => Schema::TYPE_STRING . ' NOT NULL',
        ]);
    }

    public function down()
    {
        echo "m170312_195056_genre cannot be reverted.\n";

        $this->dropTable('genre');

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
