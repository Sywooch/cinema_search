<?php

namespace app\controllers;

use app\models\Persona;

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

}