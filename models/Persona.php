<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

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
            [['count_film', 'country_id'], 'integer'],
            [['name', 'surname'], 'string', 'max' => 45],
            [['note', 'photo', 'tvShow'], 'string', 'max' => 255],
            [['books'], 'string', 'max' => 100],
            [['country_id'], 'unique'],
            [['country_id'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['country_id' => 'id']],
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
            'date_dr' => 'Дата рождения',
            'note' => 'Описание',
            'photoFile' => 'Фото',
            'books' => 'Книги',
            'count_film' => 'Количество фильмов с участием актера',
            'tvShow' => 'Телевизионное шоу с участием актера',
            'country_id' => 'Страна',
        ];
    }

    public function beforeSave($insert)
    {
        if(parent::beforeSave($insert)) {
            $this->upload();
            return true;
        } else {
            return false;
        }
    }

    public function upload() 
    {
        $this->photoFile = UploadedFile::getInstance($this, 'photoFile');
        if(is_null($this->photoFile)) return true;
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

    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['id' => 'country_id']);
    }
}
