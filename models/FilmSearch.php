<?php
namespace app\models;

use app\models\Film;
use yii\data\ActiveDataProvider;

class FilmSearch extends Film
{
    public function search($params)
    {
        $query = Film::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }
        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
?>;