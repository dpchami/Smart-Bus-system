<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Bus;

/**
 * BusSearch represents the model behind the search form of `app\models\Bus`.
 */
class BusSearch extends Bus
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['plate_nbr', 'driver_name', 'model'], 'safe'],
            [['scanner', 'route_id', 'owner', 'created_by', 'created_at', 'updated_by', 'updated_at'], 'integer'],
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
        $query = Bus::find();

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
            'scanner' => $this->scanner,
            'route_id' => $this->route_id,
            'owner' => $this->owner,
            'created_by' => $this->created_by,
            'created_at' => $this->created_at,
            'updated_by' => $this->updated_by,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'plate_nbr', $this->plate_nbr])
            ->andFilterWhere(['like', 'driver_name', $this->driver_name])
            ->andFilterWhere(['like', 'model', $this->model]);

        return $dataProvider;
    }
}
