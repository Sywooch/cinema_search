<?php

use yii\db\Migration;

class m170313_111535_filmPersona extends Migration
{
    public function up()
    {
        $this->createTable('{{%filmPersona}}', [
             'idFPersona' => Schema::TYPE_INTEGER,
             'film_idFilm' => Schema::TYPE_INTEGER,
             'persona_idPersona' => Schema::TYPE_INTEGER,
             'tPersona_idTPersona' => Schema::TYPE_INTEGER,
         ]);
    }

    public function down()
    {
        echo "m170313_111535_filmPersona cannot be reverted.\n";

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
