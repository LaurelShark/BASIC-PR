<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Admin;

/**
 * AdminSearch represents the model behind the search form about `app\models\Admin`.
 */
class AdminSearch extends Admin
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['a_id'], 'integer'],
            [['a_surname', 'a_name', 'a_fathname', 'a_datebirth', 'a_position', 'a_email', 'a_password'], 'safe'],
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
        $query = Admin::find();

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
            'a_id' => $this->a_id,
            'a_datebirth' => $this->a_datebirth,
        ]);

        $query->andFilterWhere(['like', 'a_surname', $this->a_surname])
            ->andFilterWhere(['like', 'a_name', $this->a_name])
            ->andFilterWhere(['like', 'a_fathname', $this->a_fathname])
            ->andFilterWhere(['like', 'a_position', $this->a_position])
            ->andFilterWhere(['like', 'a_email', $this->a_email])
            ->andFilterWhere(['like', 'a_password', $this->a_password]);

        return $dataProvider;
    }
}
