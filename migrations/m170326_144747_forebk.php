<?php

use yii\db\Migration;
use yii\db\Schema;

class m170326_144747_forebk extends Migration
{
    public function up()
    {
        $this->dropForeignKey('fk-film-country_id', '{{%film}}');
        $this->addForeignKey("fk-film-country_id", "{{%film}}", "country_id", "{{%country}}", "id", 'RESTRICT');

        $this->dropForeignKey('fk-comments-film_id', '{{%comments}}');
        $this->addForeignKey("fk-comments-film_id", "{{%comments}}", "film_id", "{{%film}}", "id", 'RESTRICT');

        $this->dropForeignKey('fk-comments-user_id', '{{%comments}}');
        $this->addForeignKey("fk-comments-user_id", "{{%comments}}", "user_id", "{{%user}}", "id", 'RESTRICT');

        $this->dropForeignKey('fk-film_genre-film_id', '{{%film_genre}}');
        $this->addForeignKey("fk-film_genre-film_id", "{{%film_genre}}", "film_id", "{{%film}}", "id", 'RESTRICT');

        $this->dropForeignKey('fk-film_genre-genre_id', '{{%film_genre}}');
        $this->addForeignKey("fk-film_genre-genre_id", "{{%film_genre}}", "genre_id", "{{%genre}}", "id", 'RESTRICT');

        $this->dropForeignKey('fk-film_persona-film_id', '{{%film_persona}}');
        $this->addForeignKey("fk-film_persona-film_id", "{{%film_persona}}", "film_id", "{{%film}}", "id", 'RESTRICT');

        $this->dropForeignKey('fk-film_persona-persona_id', '{{%film_persona}}');
        $this->addForeignKey("fk-film_persona-persona_id", "{{%film_persona}}", "persona_id", "{{%persona}}", "id", 'RESTRICT');

        $this->dropForeignKey('fk-film_persona-type_persona', '{{%film_persona}}');
        $this->addForeignKey("fk-film_persona-type_persona", "{{%film_persona}}", "type_persona_id", "{{%type_persona}}", "id", 'RESTRICT');
    }

    public function down()
    {
        echo "m170326_144747_forebk cannot be reverted.\n";

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
