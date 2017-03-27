<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "film".
 *
 * @property integer $id
 * @property string $name
 * @property integer $year
 * @property string $note
 * @property integer $country_id
 * @property integer $idlimitage
 * @property string $poster
 * @property integer $budget
 * @property string $primera
 * @property integer $remake
 *
 * @property Comments[] $comments
 * @property Country $country
 * @property Limitage $idlimitage0
 * @property FilmGenre[] $filmGenres
 * @property FilmPersona[] $filmPersonas
 */
class Film extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'film';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'country_id'], 'required'],
            [['year', 'country_id', 'idlimitage', 'budget', 'remake'], 'integer'],
            [['primera'], 'safe'],
            [['name', 'note', 'poster'], 'string', 'max' => 255],
            [['idlimitage'], 'unique'],
            [['country_id'], 'exist', 'skipOnError' => true, 'targetClass' => Country::className(), 'targetAttribute' => ['country_id' => 'id']],
            [['idlimitage'], 'exist', 'skipOnError' => true, 'targetClass' => Limitage::className(), 'targetAttribute' => ['idlimitage' => 'id']],
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
            'year' => 'Year',
            'note' => 'Note',
            'country_id' => 'Country ID',
            'idlimitage' => 'Idlimitage',
            'poster' => 'Poster',
            'budget' => 'Budget',
            'primera' => 'Primera',
            'remake' => 'Remake',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comments::className(), ['film_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCountry()
    {
        return $this->hasOne(Country::className(), ['id' => 'country_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdlimitage0()
    {
        return $this->hasOne(Limitage::className(), ['id' => 'idlimitage']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilmGenres()
    {
        return $this->hasMany(FilmGenre::className(), ['film_id' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilmPersonas()
    {
        return $this->hasMany(FilmPersona::className(), ['film_id' => 'id']);
    }
}