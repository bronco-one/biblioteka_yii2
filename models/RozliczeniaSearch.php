<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Rozliczenia;

/**
 * RozliczeniaSearch represents the model behind the search form of `app\models\Rozliczenia`.
 */
class RozliczeniaSearch extends Rozliczenia
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_uzytkownika', 'id_ksiazki', 'id_powod'], 'integer'],
            [['data'], 'safe'],
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
        $query = Rozliczenia::find();

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
            'id_uzytkownika' => $this->id_uzytkownika,
            'id_ksiazki' => $this->id_ksiazki,
            'id_powod' => $this->id_powod,
            'data' => $this->data,
        ]);

        return $dataProvider;
    }
}
