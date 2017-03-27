<?php

use yii\db\Migration;
use yii\db\Schema;

class m170326_210618_filmn12 extends Migration
{
    public function up()
    {
        $this->addColumn(
            "{{%film}}",
            "poster",
            "VARCHAR(255)");

        $this->addColumn(
            "{{%film}}",
            "budget",
            "INT(11)");

        $this->addColumn(
            "{{%film}}",
            "primera",
            "date");

        $this->addColumn(
            "{{%film}}",
            "remake",
            "boolean");

        return true;

    }

    public function down()
    {
        echo "m170326_210618_filmn12 cannot be reverted.\n";

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
