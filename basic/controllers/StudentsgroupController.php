<?php

namespace app\controllers;

use Yii;
use app\models\Studentsgroup;
use app\models\StudentsgroupSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * StudentsgroupController implements the CRUD actions for Studentsgroup model.
 */
class StudentsgroupController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Studentsgroup models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new StudentsgroupSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Studentsgroup model.
     * @param integer $g_id
     * @param integer $s_id
     * @return mixed
     */
    public function actionView($g_id, $s_id)
    {
        return $this->render('view', [
            'model' => $this->findModel($g_id, $s_id),
        ]);
    }

    /**
     * Creates a new Studentsgroup model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Studentsgroup();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'g_id' => $model->g_id, 's_id' => $model->s_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Studentsgroup model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $g_id
     * @param integer $s_id
     * @return mixed
     */
    public function actionUpdate($g_id, $s_id)
    {
        $model = $this->findModel($g_id, $s_id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'g_id' => $model->g_id, 's_id' => $model->s_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Studentsgroup model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $g_id
     * @param integer $s_id
     * @return mixed
     */
    public function actionDelete($g_id, $s_id)
    {
        $this->findModel($g_id, $s_id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Studentsgroup model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $g_id
     * @param integer $s_id
     * @return Studentsgroup the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($g_id, $s_id)
    {
        if (($model = Studentsgroup::findOne(['g_id' => $g_id, 's_id' => $s_id])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
