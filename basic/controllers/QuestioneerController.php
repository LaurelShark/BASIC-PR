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

/**
 * MetodistController implements the CRUD actions for Metodist model.
 */
class QuestioneerController extends Controller
{

    /**
     * @return mixed
     */
    public function actionIndex()
    {
        $task_id = $_GET['task_id'];
        $task = Tasks::findOne($task_id);
        $questions = Question::findAll(['task_id' => $task_id]);

        if(\Yii::$app->request->isPost) {

            $mark = 0;
            foreach($questions as $qi => $question) {
                $answers = json_decode($question['answers']);
                $current_answers = $_REQUEST[$qi];

                $correct = true;
                foreach($answers as $a_pattern) {

                    if(!preg_match($a_pattern, $current_answers)) {
                        $correct = false;
                        break;
                    }
                }

                if($correct) {
                    $mark++;
                }
            }

            $student_id = $_SESSION['user']['s_id'];

            $plan = Plan::find()->where(['task_id' => $task_id])->
                        innerJoin('Groups', 'Groups.disciple_id = Plan.disciple_id')->
                        innerJoin('Group_Student', 'Groups.g_id = Group_Student.g_id')->
                        innerJoin('Student', 'Group_Student.s_id = Student.s_id')->
                        where(['Student.s_id' => $student_id ])->
                        one();

            $result = Results::find()->where([
                'p_id' => $plan->p_id,
                's_id' => $student_id
            ])->one();

            if(!$result) {
                $result = new Results([
                    'p_id' =>  $plan->p_id,
                    's_id' => $student_id
                ]);
            }

            $result->Mark = $mark;
            $result->NumberOfTries++;

            $result->save();

            return $this->redirect(['tasks/index']);
        }



        return $this->render('index', [
            'questions' => $questions,
            'task' => $task
        ]);
    }

}
