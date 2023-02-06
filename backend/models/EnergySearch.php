<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Energy;

/**
 * EnergySearch represents the model behind the search form of `backend\models\Energy`.
 */
class EnergySearch extends Energy
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['num_id'], 'integer'],
            [['name', 'influence', 'picture', 'picture2', 'picture3'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Energy::find();

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
            'num_id' => $this->num_id,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'influence', $this->influence])
            ->andFilterWhere(['like', 'picture', $this->picture])
            ->andFilterWhere(['like', 'picture2', $this->picture2])
            ->andFilterWhere(['like', 'picture3', $this->picture3]);

        return $dataProvider;
    }
}
