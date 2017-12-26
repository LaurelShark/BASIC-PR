<?php

namespace app\controllers;

use app\models\Admin;
use app\models\Plan;
use app\models\Question;
use app\models\Results;
use app\models\Student;
use app\models\Tasks;
use app\models\Teacher;
use Yii;
use app\models\Metodist;
use app\models\MetodistSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;


class MathparController extends Controller
{

    /**
     * @return mixed
     */
    public function actionCall()
    {
        $url = 'http://mathpar.com/api/calc';
        $body = file_get_contents('php://input');

        $options = array(
            'http' => array(
                'header'  => "Content-type: application/json;charset=UTF-8\r\n",
                'method'  => 'POST',
                'content' => $body
            )
        );
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);
        if ($result === FALSE) { /* Handle error */ }

        return $result;

    }

}
