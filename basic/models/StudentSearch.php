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
            [['id', 'Course'], 'integer'],
            [['FirstName', 'FathName', 'Surname', 'E-mail', 'BirthDate', 'UserName', 'Password'], 'safe'],
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
            'id' => $this->id,
            'BirthDate' => $this->BirthDate,
            'Course' => $this->Course,
        ]);

        $query->andFilterWhere(['like', 'FirstName', $this->FirstName])
            ->andFilterWhere(['like', 'FathName', $this->FathName])
            ->andFilterWhere(['like', 'Surname', $this->Surname])
            ->andFilterWhere(['like', 'E-mail', $this->E-mail])
            ->andFilterWhere(['like', 'UserName', $this->UserName])
            ->andFilterWhere(['like', 'Password', $this->Password]);

        return $dataProvider;
    }
}
