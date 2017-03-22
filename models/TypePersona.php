<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "type_persona".
 *
 * @property integer $id
 * @property string $type
 *
 * @property FilmPersona[] $filmPersonas
 */
class TypePersona extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'type_persona';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['type'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'type' => 'Type',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFilmPersonas()
    {
        return $this->hasMany(FilmPersona::className(), ['type_persona_id' => 'id']);
    }
}
