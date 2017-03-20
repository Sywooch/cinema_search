<?php

namespace app\models;

use Yii;

class Persona extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'persona';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['date_dr'], 'safe'],
            [['count_film'], 'integer'],
            [['name', 'surname'], 'string', 'max' => 45],
            [['note', 'photo', 'tvShow'], 'string', 'max' => 255],
            [['books'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'surname' => 'Surname',
            'date_dr' => 'Date Dr',
            'note' => 'Note',
            'photo' => 'Photo',
            'books' => 'Books',
            'count_film' => 'Count Film',
            'tvShow' => 'Tv Show',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilmPersonas()
    {
        return $this->hasMany(FilmPersona::className(), ['persona_id' => 'id']);
    }
}
