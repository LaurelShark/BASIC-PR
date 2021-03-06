<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tasks;

/**
 * TasksSearch represents the model behind the search form about `app\models\Tasks`.
 */
class TasksSearch extends Tasks
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['task_id'], 'integer'],
            [['Name'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Tasks::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'task_id' => $this->task_id,
        ]);

        $user = $_SESSION['user'];
        if($user && is_a($user, Student::className())) {
            $query->
            innerJoin('Plan', 'Tasks.task_id = Plan.task_id')->
            leftJoin('Results', 'Plan.p_id = Results.p_id')->
            //    innerJoin('Disciple', 'Disciple.disciple_id = Plan.disciple_id')->
            innerJoin('Groups', 'Groups.disciple_id = Plan.disciple_id')->
            innerJoin('Group_Student', 'Groups.g_id = Group_Student.g_id')->
            innerJoin('Student', 'Group_Student.s_id = Student.s_id')->
            andWhere(['Student.s_id' => $user['s_id'] ]);
        }

        $query->andFilterWhere(['like', 'Name', $this->Name]);

        return $dataProvider;
    }
}
