<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\University;

/**
 * UniversitySearch represents the model behind the search form about `app\models\University`.
 */
class UniversitySearch extends University
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['u_id'], 'integer'],
            [['u_name', 'u_street', 'u_buildnum', 'u_city', 'u_postcode', 'u_telephone'], 'safe'],
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
        $query = University::find();

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
            'u_id' => $this->u_id,
        ]);

        $query->andFilterWhere(['like', 'u_name', $this->u_name])
            ->andFilterWhere(['like', 'u_street', $this->u_street])
            ->andFilterWhere(['like', 'u_buildnum', $this->u_buildnum])
            ->andFilterWhere(['like', 'u_city', $this->u_city])
            ->andFilterWhere(['like', 'u_postcode', $this->u_postcode])
            ->andFilterWhere(['like', 'u_telephone', $this->u_telephone]);

        return $dataProvider;
    }
}
