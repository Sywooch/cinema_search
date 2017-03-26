<?php

namespace app\controllers;

use app\models\Country;
use app\models\CountrySearch;
use yii\data\ActiveDataProvider;
use Yii;

class CountryController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $countryList = Country::find();
        $search = new CountrySearch();
        $dpCountry = $search->search(Yii::$app->request->get());

        return $this->render('index', [
            'countrys' => $dpCountry,
            'countrySearch' => $search
        ]);
    }


    public function actionView($id=1)
    {
        $country = Country::find()->where(['id'=> $id])->one();
        return $this->render('view', [
            'singleCountry' => $country
        ]);
    }

    public function actionCreate()
    {
        return $this->actionUpdate();
    }

    public function actionUpdate($id = - 1)
    {
        $request = \Yii::$app->request;
        $country = Country::find()->where(['id'=> $id])->one();
        if (is_null($country))
            $country = new Country();

        if ($request->post('Country')) {
            $country->attributes = $request->post('Country');
            if ($country->save()) {
                $this->redirect(['country/view','id'=>$country->id]);
            }
        }

        return $this->render('create',[
            'country' => $country
        ]);
    }
}


