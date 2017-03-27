<?php

namespace app\controllers;

use app\models\Film;
use app\models\FilmSearch;
use Yii;
use yii\data\ActiveDataProvider;


class FilmController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $search = new FilmSearch();
        $dpFilm = $search->search(Yii::$app->request->get());
        return $this->render('index', [
            'film' => $dpFilm,
            'filmSearch' => $search
        ]);
    }


    public function actionView($id=1)
    {
        $film = film::find()->where(['id'=> $id])->one();
        return $this->render('view', [
            'singlefilm' => $film
        ]);
    }

    public function actionCreate()
    {
        return $this->actionUpdate();
    }

    public function actionUpdate($id = -1)

    {
        $request = Yii::$app->request;
        $film = Film::find()->where(['id'=> $id])->one();
        if (is_null($film))
            $film = new Film;
        if ($request->post('Film')) {
            $film->attributes = $request->post('Film');
            if ($film->save()) {
                $this->redirect(['film/view', 'id'=> $film->id]);
            }
        }
        return $this->render('create', [
            'film' => $film
        ]);
    }

}


