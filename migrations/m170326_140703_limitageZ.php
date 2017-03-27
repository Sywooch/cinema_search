<?php

use yii\db\Migration;
use yii\db\Schema;

class m170326_140703_limitageZ extends Migration
{
    public function up()
    {
        return $this->execute(file_get_contents(__DIR__ . '/limitaged.sql'));
    }

    public function down()
    {
        echo "m170326_140703_limitageZ cannot be reverted.\n";
        $this->execute('delete from {{%limitage}}');
        $this->execute('ALTER TABLE {{%limitage}} AUTO_INCREMENT = 1');
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
