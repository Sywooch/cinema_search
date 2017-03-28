<?php

use yii\db\Migration;
use yii\db\Schema;

class m170327_174029_persona_country extends Migration
{
    public function up()
    {
        $this->addColumn(
            "{{%persona}}",
            "country_id",
            "int(11)");

        $this->createIndex(
            'country_id',
            '{{%persona}}',
            'country_id',
            true);

        $this->addForeignKey("lg_fk", "{{%persona}}", "country_id", "{{%country}}", "id", 'RESTRICT');
    }

    public function down()
    {
        echo "m170327_174029_persona_country cannot be reverted.\n";

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
