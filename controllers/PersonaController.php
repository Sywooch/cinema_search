<?php

namespace app\controllers;

use app\models\Persona;
use app\models\PersonaSearch;
use Yii;
use yii\data\ActiveDataProvider;
use yii\web\UploadedFile;


class PersonaController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$personaList = Persona::find();
        $search = new PersonaSearch();
        $dpPersona = $search->search(Yii::$app->request->get());
        return $this->render('index', [
        		'persona' => $dpPersona,
                'personaSearch' => $search
        ]);
    }


    public function actionView($id)
    {
    	$persona = Persona::find()->where(['id'=> $id])->one();
    	return $this->render('view', [
    			'singlePersona' => $persona
    	]);
    }

    public function actionCreate()
    {
        return $this->actionUpdate();
    }

    public function actionUpdate($id = -1)

    {
        $request = Yii::$app->request;
        $persona = Persona::find()->where(['id'=> $id])->one();
        if (is_null($persona))
            $persona = new Persona;
        if ($request->post('Persona')) {
            $persona->photoFile = UploadedFile::getInstance($persona, 'photo');

            $persona->attributes = $request->post('Persona');
            if ($persona->save() && $persona->upload()) {
                $this->redirect(['persona/view', 'id'=> $persona->id]);
            }
        }
        return $this->render('create', [
            'persona' => $persona
        ]);
    }

}