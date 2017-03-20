<?php
use yii\db\Schema;
use yii\db\Migration;

class m170320_164107_persona extends Migration
{
     public function up()
    {
        return $this->execute(file_get_contents(__DIR__ . '/persona.sql'));
    }

    public function down()
    {
        $this->execute('delete from {{%persona}} where parent_id is not null');
        $this->execute('delete from {{%persona}}');
        $this->execute('ALTER TABLE {{%persona}} AUTO_INCREMENT = 1');
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
