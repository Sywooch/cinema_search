<?php

use yii\db\Migration;
use yii\db\Schema;

class m170326_152644_data1 extends Migration
{
    public function up()
    {
        $this->execute('delete from {{%genre}}');
        $this->execute('ALTER TABLE {{%genre}} AUTO_INCREMENT = 1');
        $this->execute(file_get_contents(__DIR__ . '/data1.sql'));

        $this->execute('delete from {{%type_persona}}');
        $this->execute('ALTER TABLE {{%type_persona}} AUTO_INCREMENT = 1');
        $this->execute(file_get_contents(__DIR__ . '/data2.sql'));

        $this->execute('delete from {{%country}}');
        $this->execute('ALTER TABLE {{%country}} AUTO_INCREMENT = 1');
        $this->execute(file_get_contents(__DIR__ . '/data3.sql'));
        return true;
    }

    public function down()
    {
        echo "m170326_152644_data1 cannot be reverted.\n";
        $this->execute('delete from {{%genre}}');
        $this->execute('ALTER TABLE {{%genre}} AUTO_INCREMENT = 1');
        $this->execute('delete from {{%type_persona}}');
        $this->execute('ALTER TABLE {{%type_persona}} AUTO_INCREMENT = 1');
        $this->execute('delete from {{%country}}');
        $this->execute('ALTER TABLE {{%country}} AUTO_INCREMENT = 1');

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
