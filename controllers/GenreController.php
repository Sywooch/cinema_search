<?php

namespace app\controllers;

use app\models\Genre;

class GenreController extends \yii\web\Controller
{
    public function actionCreate()
    {
        $request = \Yii::$app->request;
        if ($request->post('aGenre')) {
            $genre = new Genre();
            $genre->attributes = $request->post('aGenre');
            if ($genre->save()) {
                echo 'done '.$genre->id;
                $this->redirect(['genre/view','id'=>$genre->id]);
            }
        }

        return $this->render('create');
    }

    public function actionIndex()
    {
        $genreList = Genre::find()->all();
        return $this->render('index', [
            'genre' => $genreList
        ]);
    }

    public function actionView($id = 1)
    {
        $genre = Genre::find()->where(['id'=> $id])->one();
        return $this->render('view', [
            'singleGenre' => $genre
        ]);
    }

}
