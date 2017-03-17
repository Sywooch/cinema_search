<?php

use yii\db\Schema;
use yii\db\Migration;


class m170317_140413_film extends Migration
{
    public function up()
    {
         $this->createTable('{{%film}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'year' => Schema::TYPE_INTEGER,
            'email' => Schema::TYPE_STRING . ' NOT NULL',
            'note' => Schema::TYPE_STRING,
            'country_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        ]);

         // add foreign key for table `country`
        $this->addForeignKey(
            'fk-film-country_id',
            'film',
            'country_id',
            'country',
            'id',
            'CASCADE'
        );

    }

    public function down()
    {
        echo "m170317_140413_film cannot be reverted.\n";

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
