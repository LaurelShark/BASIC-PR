<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Student;

/**
 * StudentSearch represents the model behind the search form about `app\models\Student`.
 */
class StudentSearch extends Student
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['s_id', 's_course', 'speciality_id'], 'integer'],
            [['s_surname', 's_name', 's_fathname', 's_datebirth', 's_email', 's_password'], 'safe'],
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
        $query = Student::find();

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
            's_id' => $this->s_id,
            's_datebirth' => $this->s_datebirth,
            's_course' => $this->s_course,
            'speciality_id' => $this->speciality_id,
        ]);

        $query->andFilterWhere(['like', 's_surname', $this->s_surname])
            ->andFilterWhere(['like', 's_name', $this->s_name])
            ->andFilterWhere(['like', 's_fathname', $this->s_fathname])
            ->andFilterWhere(['like', 's_email', $this->s_email])
            ->andFilterWhere(['like', 's_password', $this->s_password]);

        return $dataProvider;
    }
}
