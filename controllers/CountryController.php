<?php

namespace app\controllers;

use app\models\Country;

class CountryController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $countryList = Country::find()->all();
        return $this->render('index', [
        		'country' => $countryList
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
        $request = \Yii::$app->request;
        if ($request->post('aCountry')) {
            $country = new Country();
            $country->attributes = $request->post('aCountry');
            if ($country->save()) {
                echo 'done '.$country->id;
                $this->redirect(['country/view','id'=>$country->id]);
            }
        }

        return $this->render('create');
    }
}


