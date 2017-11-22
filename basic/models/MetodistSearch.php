<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Metodist;

/**
 * MetodistSearch represents the model behind the search form about `app\models\Metodist`.
 */
class MetodistSearch extends Metodist
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['m_id', 'd_id'], 'integer'],
            [['m_surname', 'm_name', 'm_fathname', 'm_email', 'm_password'], 'safe'],
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
        $query = Metodist::find();

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
            'm_id' => $this->m_id,
            'd_id' => $this->d_id,
        ]);

        $query->andFilterWhere(['like', 'm_surname', $this->m_surname])
            ->andFilterWhere(['like', 'm_name', $this->m_name])
            ->andFilterWhere(['like', 'm_fathname', $this->m_fathname])
            ->andFilterWhere(['like', 'm_email', $this->m_email])
            ->andFilterWhere(['like', 'm_password', $this->m_password]);

        return $dataProvider;
    }
}
