<?php
namespace app\models;

use app\models\Persona;
use yii\data\ActiveDataProvider;

class PersonaSearch extends Persona
{
	public function search($params)
	{
		$query = Persona::find();
		$dataProvider = new ActiveDataProvider([
			'query' => $query
		]);

		if (!($this->load($params) && $this->validate())) {
			return $dataProvider;
		}
		$query->andFilterWhere(['like', 'name', $this->name])
			  ->andFilterWhere(['like', 'surname', $this->surname]);

			return $dataProvider;
	}
}
?>;