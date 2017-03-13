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

    public function actionView($id)
    {
        $country = Country::find()->where(['id'=>$id])->one();
//        echo $id.'<br>';
//        echo '<pre>';
//        var_dump($country);
//        echo '</pre>';

        return $this->render('view',[
//            'singleCountry' => ((is_null($country))?'fgf':$country)
            'singleCountry' => $country
        ]);
    }

}
