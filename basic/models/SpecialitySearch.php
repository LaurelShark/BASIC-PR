<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Speciality;

/**
 * SpecialitySearch represents the model behind the search form about `app\models\Speciality`.
 */
class SpecialitySearch extends Speciality
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['speciality_id', 'f_id'], 'integer'],
            [['speciality_name'], 'safe'],
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
        $query = Speciality::find();

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
            'speciality_id' => $this->speciality_id,
            'f_id' => $this->f_id,
        ]);

        $query->andFilterWhere(['like', 'speciality_name', $this->speciality_name]);

        return $dataProvider;
    }
}
