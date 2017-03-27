<?php

namespace app\controllers;

use app\models\TypePersona;


class TypePersonaController extends \yii\web\Controller
{
    public function actionCreate()
    {
        $request = \Yii::$app->request;
        if ($request->post('aTypePersona')) {
            $typepersona = new TypePersona();
            $typepersona->attributes = $request->post('aTypePersona');
            if ($typepersona->save()) {
                echo 'done '.$typepersona->id;
                $this->redirect(['type-persona/view','id'=>$typepersona->id]);
            }
        }

        return $this->render('create');
    }

    public function actionIndex()
    {
        $typepersonaList = TypePersona::find()->all();
        return $this->render('index', [
            'typepersona' => $typepersonaList
        ]);
    }

    public function actionView($id = 1)
    {
        $typepersona = TypePersona::find()->where(['id'=> $id])->one();
        return $this->render('view', [
            'singletypepersona' => $typepersona
        ]);
    }

}
