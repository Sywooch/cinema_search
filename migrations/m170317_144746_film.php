<?php
use yii\db\Schema;
use yii\db\Migration;

class m170317_144746_film extends Migration
{
    public function up()
    {
        // создаю таблицу
        $this->createTable('{{%film}}', [
            'id' => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
            'year' => Schema::TYPE_INTEGER,
            'note' => Schema::TYPE_STRING,
            'country_id' => Schema::TYPE_INTEGER . ' NOT NULL',
        ]);

        $this->createTable('{{%film_genre}}', [
            'id' => Schema::TYPE_PK,
            'film_id' => Schema::TYPE_INTEGER,
            'genre_id' => Schema::TYPE_INTEGER,
        ]);

        $this->createTable('{{%country}}', [
            'id' => Schema::TYPE_PK,
            'name' => 'VARCHAR(45)',
        ]);

        $this->createTable('{{%genre}}', [
            'id' => Schema::TYPE_PK,
            'name' => 'VARCHAR(45)',
        ]);

        $this->createTable('{{%comments}}', [
            'id' => Schema::TYPE_PK,
            'note' => 'VARCHAR(500)',
            'date_comment' => Schema::TYPE_DATETIME,
            'film_id' => Schema::TYPE_INTEGER,
            'user_id' => Schema::TYPE_INTEGER,
        ]);

        $this->createTable('{{%user}}', [
            'id' => Schema::TYPE_PK,
            'name' => 'VARCHAR(45)',
            'email' => Schema::TYPE_STRING,
            'password' => 'VARCHAR(45)',
            'create_time' => Schema::TYPE_DATETIME,
        ]);

        $this->createTable('{{%film_persona}}', [
            'id' => Schema::TYPE_PK,
            'film_id' => Schema::TYPE_INTEGER,
            'persona_id' => Schema::TYPE_INTEGER,
            'type_persona_id' => Schema::TYPE_INTEGER,
        ]);

        $this->createTable('{{%persona}}', [
            'id' => Schema::TYPE_PK,
            'name' => 'VARCHAR(45)',
            'surname' => 'VARCHAR(45)',
            'date_dr' => Schema::TYPE_DATETIME,
            'note' => Schema::TYPE_STRING,
            'photo' => 'VARCHAR(255)',
            'books' => 'VARCHAR(100)',
            'count_film' => Schema::TYPE_INTEGER,
            'tvShow' => 'VARCHAR(255)',
        ]);

        $this->createTable('{{%type_persona}}', [
            'id' => Schema::TYPE_PK,
            'type' => 'VARCHAR(45)',
        ]);


        // создается индекс от которого идет связь
        $this->createIndex(
            'idx-film_persona-type_persona',
            '{{%film_persona}}',
            'type_persona_id'
        );

        // создается внешний ключ
        $this->addForeignKey(
            'fk-film_persona-type_persona',
            '{{%film_persona}}',
            'type_persona_id',
            '{{%type_persona}}',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-film_persona-persona_id',
            '{{%film_persona}}',
            'persona_id'
        );

        $this->addForeignKey(
            'fk-film_persona-persona_id',
            '{{%film_persona}}',
            'persona_id',
            '{{%persona}}',
            'id',
            'CASCADE'
        );
        
        $this->createIndex(
            'idx-film_persona-film_id',
            '{{%film_persona}}',
            'film_id'
        );

        $this->addForeignKey(
            'fk-film_persona-film_id',
            '{{%film_persona}}',
            'film_id',
            '{{%film}}',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-comments-user_id',
            '{{%comments}}',
            'user_id'
        );

        $this->addForeignKey(
            'fk-comments-user_id',
            '{{%comments}}',
            'user_id',
            '{{%user}}',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-comments-film_id',
            '{{%comments}}',
            'film_id'
        );

        $this->addForeignKey(
            'fk-comments-film_id',
            '{{%comments}}',
            'film_id',
            '{{%film}}',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-film_genre-genre_id',
            '{{%film_genre}}',
            'genre_id'
        );

        $this->addForeignKey(
            'fk-film_genre-genre_id',
            '{{%film_genre}}',
            'genre_id',
            '{{%genre}}',
            'id',
            'CASCADE'
        );

         $this->createIndex(
            'idx-film_genre-film_id',
            '{{%film_genre}}',
            'film_id'
        );

          $this->addForeignKey(
            'fk-film_genre-film_id',
            '{{%film_genre}}',
            'film_id',
            '{{%film}}',
            'id',
            'CASCADE'
        );

        $this->createIndex(
            'idx-film-country_id',
            '{{%film}}',
            'country_id'
        );

        $this->addForeignKey(
            'fk-film-country_id',
            '{{%film}}',
            'country_id',
            '{{%country}}',
            'id',
            'CASCADE'
        );
    }

    public function down()
    {
        echo "m170317_144746_film cannot be reverted.\n";

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
