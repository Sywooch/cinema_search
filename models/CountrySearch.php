<?php
namespace app\models;
use app\models\Country;
use yii\data\ActiveDataProvider;

class CountrySearch extends Country
{
    public function search($params)
    {
        $query = Country::find();
        $dataProvider = new ActiveDataProvider([
            'query' => $query
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere(['like','name', $this->name]);

        return $dataProvider;
    }
}