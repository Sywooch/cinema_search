<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "persona".
 *
 * @property integer $id
 * @property string $name
 * @property string $surName
 * @property string $dateDR
 * @property string $note
 * @property string $books
 * @property integer $countFilmf
 * @property string $photo
 * @property string $tvShow
 */
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
            [['name', 'surName', 'books', 'countFilmf', 'photo', 'tvShow'], 'required'],
            [['countFilmf'], 'integer'],
            [['name', 'surName', 'dateDR'], 'string', 'max' => 45],
            [['note', 'books', 'photo', 'tvShow'], 'string', 'max' => 255],
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
            'surName' => 'Sur Name',
            'dateDR' => 'Date Dr',
            'note' => 'Note',
            'books' => 'Books',
            'countFilmf' => 'Count Filmf',
            'photo' => 'Photo',
            'tvShow' => 'Tv Show',
        ];
    }
}