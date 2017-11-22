<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Teacher;

/**
 * TeacherSearch represents the model behind the search form about `app\models\Teacher`.
 */
class TeacherSearch extends Teacher
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['t_id', 'd_id'], 'integer'],
            [['t_surname', 't_name', 't_fathname', 't_datebirth', 't_email', 't_password'], 'safe'],
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
        $query = Teacher::find();

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
            't_id' => $this->t_id,
            't_datebirth' => $this->t_datebirth,
            'd_id' => $this->d_id,
        ]);

        $query->andFilterWhere(['like', 't_surname', $this->t_surname])
            ->andFilterWhere(['like', 't_name', $this->t_name])
            ->andFilterWhere(['like', 't_fathname', $this->t_fathname])
            ->andFilterWhere(['like', 't_email', $this->t_email])
            ->andFilterWhere(['like', 't_password', $this->t_password]);

        return $dataProvider;
    }
}
