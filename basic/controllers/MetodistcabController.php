<?php

namespace app\controllers;

use Yii;
use app\models\Metodist;
use app\models\MetodistSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TeacherController implements the CRUD actions for Teacher model.
 */
class MetodistcabController extends Controller
{
     
    public function actionIndex()
    {
        return $this->render('index', [
           
        ]);
    }

}
