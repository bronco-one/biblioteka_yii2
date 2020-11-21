<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Zakupy;

/**
 * ZakupySearch represents the model behind the search form of `app\models\Zakupy`.
 */
class ZakupySearch extends Zakupy
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'id_ksiazki', 'id_firma'], 'integer'],
            [['data_zakupu'], 'safe'],
            [['cena'], 'number'],
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
        $query = Zakupy::find();

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
            'id_ksiazki' => $this->id_ksiazki,
            'data_zakupu' => $this->data_zakupu,
            'id_firma' => $this->id_firma,
            'cena' => $this->cena,
        ]);

        return $dataProvider;
    }
}
