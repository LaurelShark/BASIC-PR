<?php

namespace app\controllers;

use app\models\Admin;
use app\models\Student;
use app\models\Teacher;
use Yii;
use app\models\Metodist;
use app\models\MetodistSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MetodistController implements the CRUD actions for Metodist model.
 */
class LoginController extends Controller
{

    /**
     * @return mixed
     */
    public function actionIndex()
    {
        if(\Yii::$app->request->isPost) {
            $email = $_POST['email'];
            $password = $_POST['password'];

            $user = $this->getUser($email, $password);
            if(!$user) {
                return $this->render('index', ['failure' => true]);
            }

            $_SESSION['user'] = $user;

            if(is_a($user, Admin::className())) {
                return $this->redirect(['admincab/index']);
            }
            if(is_a($user, Metodist::className())) {
                return $this->redirect(['metodistcab/index']);
            }
            if(is_a($user, Student::className())) {
                return $this->redirect(['studentcab/index']);
            }
            if(is_a($user, Teacher::className())) {
                return $this->redirect(['teachercab/index']);
            }
        }

        $_SESSION['user'] = null;

        return $this->render('index');
    }


    function getUser($email, $password) {
        if($user =
            Admin::findOne([
                'a_email' => $email,
                'a_password' => $password
            ])) {

            return $user;
        }

        if($user =
            Metodist::findOne([
                'm_email' => $email,
                'm_password' => $password
            ])) {

            return $user;
        }

        if($user =
            Student::findOne([
                's_email' => $email,
                's_password' => $password
            ])) {

            return $user;
        }

        if($user =
            Teacher::findOne([
                't_email' => $email,
                't_password' => $password
            ])) {

            return $user;
        }

        return null;
    }

}
