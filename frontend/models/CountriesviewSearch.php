<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Countriesview;

/**
 * CountriesviewSearch represents the model behind the search form of `frontend\models\Countriesview`.
 */
class CountriesviewSearch extends Countriesview
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['country', 'name', 'view', 'picture'], 'safe'],
            [['num_id'], 'integer'],
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
        $query = Countriesview::find();

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

        $query->andFilterWhere(['like', 'country', $this->country])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'view', $this->view])
            ->andFilterWhere(['like', 'picture', $this->picture]);

        return $dataProvider;
    }
}
