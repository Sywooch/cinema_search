<?php

use yii\db\Schema;
use yii\db\Migration;

class m170317_143047_country extends Migration
{
    public function up()
    {
        $this->createTable('{{%country}}', [
            'id' => Schema::TYPE_PK,
            'name' => 'VARCHAR(45)',
        ]);
    }

    public function down()
    {
        echo "m170317_143047_country cannot be reverted.\n";

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
