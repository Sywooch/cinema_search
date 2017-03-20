<?php

namespace app\controllers;

use app\models\Film;

class FilmController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $filmList = film::find()->all();
        return $this->render('index', [
            'film' => $filmList
        ]);
    }


    public function actionView($id=1)
    {
        $film = film::find()->where(['id'=> $id])->one();
        return $this->render('view', [
            'singlefilm' => $film
        ]);
    }

}


