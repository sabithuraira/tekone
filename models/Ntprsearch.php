<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ntpr;

/**
 * Ntprsearch represents the model behind the search form about `app\models\Ntpr`.
 */
class Ntprsearch extends Ntpr
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_bulan', 'id_satuan', 'id_tahun', 'created_at', 'updated_at'], 'integer'],
            [['it', 'ib', 'ntpr'], 'number'],
            [['fenomena'], 'safe'],
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
        $query = Ntpr::find();

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
            'it' => $this->it,
            'ib' => $this->ib,
            'ntpr' => $this->ntpr,
            'id_bulan' => $this->id_bulan,
            'id_satuan' => $this->id_satuan,
            'id_tahun' => $this->id_tahun,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'fenomena', $this->fenomena]);

        return $dataProvider;
    }
}
