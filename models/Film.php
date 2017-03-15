<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "film".
 *
 * @property integer $id
 * @property string $nameFilm
 * @property string $ageLimit
 * @property integer $yearFilm
 * @property string $note
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
            [['name'], 'required'],
            [['yearFilm'], 'integer'],
            [['nameFilm'], 'string', 'max' => 100],
            [['ageLimit'], 'string', 'max' => 45],
            [['note'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nameFilm' => 'Name Film',
            'ageLimit' => 'Age Limit',
            'yearFilm' => 'Year Film',
            'note' => 'Note',
        ];
    }
}
