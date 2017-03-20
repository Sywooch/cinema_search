<?php

namespace app\controllers;

use app\models\Persona;
use Yii;

class PersonaController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$personaList = Persona::find()->all();
        return $this->render('index', [
        		'persona' => $personaList
        ]);
    }


    public function actionView($id=1)
    {
    	$persona = Persona::find()->where(['id'=> $id])->one();
    	return $this->render('view', [
    			'singlePersona' => $persona
    	]);
    }

    public function actionCreate()

    {
        $request = \Yii::$app->request;
        if ($request->post('Persona')) {
            $persona = new Persona();
            $persona->attributes = $request->post('Persona');
            if ($persona->save()) {
                $this->redirect(['persona/view', 'id'=> $persona->id]);
            }
        }
        return $this->render('create');
    }

}