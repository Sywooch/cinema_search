<?php

namespace app\models;

use Yii;

class Persona extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */

    public $photoFile = null;

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
            'name' => 'Имя',
            'surname' => 'Фамилия',
            'date_dr' => 'Date Dr',
            'note' => 'Note',
            'photo' => 'Фото',
            'books' => 'Books',
            'count_film' => 'Count Film',
            'tvShow' => 'Tv Show',
        ];
    }

    public function upload() 
    {
        if($this->validate()) {
            $fileName = 'uploads/' . $this->photoFile->baseName . '.' . $this->photoFile->extension;
            $this->photoFile->saveAs($fileName);
            $this->photo = $fileName;
            return true;
        } else {
            return false;
        }
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilmPersonas()
    {
        return $this->hasMany(FilmPersona::className(), ['persona_id' => 'id']);
    }
}
