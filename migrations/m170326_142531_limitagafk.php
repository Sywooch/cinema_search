<?php

use yii\db\Migration;
use yii\db\Schema;

class m170326_142531_limitagafk extends Migration
{
    public function up()
    {
        $this->addColumn(
            "{{%film}}",
            "idlimitage",
            "int(11)");

        $this->createIndex(
            'idlimitage',
            '{{%film}}',
            'idlimitage',
            true);

        $this->addForeignKey("la_fk", "{{%film}}", "idlimitage", "{{%limitage}}", "id", 'RESTRICT');
    }

    public function down()
    {
        echo "m170326_142531_limitagafk cannot be reverted.\n";

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
