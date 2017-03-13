<?php

use yii\db\Migration;
use yii\db\Schema;

class m170313_113458_film extends Migration
{
    public function up()
    {
        $this->createTable('{{%film}}', [
             'id' => Schema::TYPE_PK,
             'nameFilm' => 'VARCHAR(100)',
             'ageLimit' => 'VARCHAR(45)',
             'yearFilm' => Schema::TYPE_INTEGER,
             'note' => Schema::TYPE_STRING,
         ]);
    }

    public function down()
    {
        echo "m170313_113458_film cannot be reverted.\n";

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
