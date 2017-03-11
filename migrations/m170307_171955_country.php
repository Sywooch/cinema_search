<?php

use yii\db\Schema;
use yii\db\Migration;
use yii\db\Schema;

class m170307_171955_country extends Migration
{
    public function up()
    {
	$this->createTable('{{%country}}', [
             'id' => Schema::TYPE_PK,
             'name' => Schema::TYPE_STRING . ' NOT NULL',
         ]);
    }

    public function down()
    {
        echo "m170307_171955_country cannot be reverted.\n";

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
