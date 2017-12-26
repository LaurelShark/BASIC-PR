<?php

namespace app\controllers;

use Yii;
use app\models\Admin;
use app\models\AdminSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * AdminController implements the CRUD actions for Admin model.
 */
class AdmincabController extends Controller
{

    public function actionIndex()
    {
        $user = $_SESSION['user'];
        if(!$user || !is_a($user, Admin::className())) {
            return $this->redirect(['login/index']);
        }

        return $this->render('index', [
            'user' => $user
        ]);
    }
}
