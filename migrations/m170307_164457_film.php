<?php

use yii\db\Migration;

class m170307_164457_film extends Migration
{
    public function up()
    {
        $this->createTable('{{%film}}', [
             'id' => Schema::TYPE_PK,
             'nameFilm' => 'VARCHAR(100)',
             'ageLimit' => 'VARCHAR(45)',
             'yearFilm' => Schema::TYPE_INTEGER,
             'note' => Schema::LONGTEXT,
         ]);
    }

    public function down()
    {
        echo "m170307_164457_film cannot be reverted.\n";

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
