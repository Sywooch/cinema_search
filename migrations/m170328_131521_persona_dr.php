<?php

use yii\db\Migration;
use yii\db\Schema;

class m170328_131521_persona_dr extends Migration
{
    public function up()
    {
        $this->addColumn(
            "{{%persona}}",
            "date_dr",
            "VARCHAR(10)");
    }

    public function down()
    {
        echo "m170328_131521_persona_dr cannot be reverted.\n";

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
