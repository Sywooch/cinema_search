<?php

namespace app\controllers;
<<<<<<< HEAD
=======

>>>>>>> c516d62926df177739c63be056101e2281f3509c
use app\models\Country;

class CountryController extends \yii\web\Controller
{
    public function actionIndex()
    {
<<<<<<< HEAD
    	$countryList = Country::find()->all();
        return $this->render('index', [
        		'country' => $countryList
        	]);
    }


    public function actionView($id)
    {
    	$country = Country::find()->where(['id'=> $id])->one();
    	return $this->render('view', [
    			'singleCountry' => $country
    		]);
    }

}
=======
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
>>>>>>> c516d62926df177739c63be056101e2281f3509c
