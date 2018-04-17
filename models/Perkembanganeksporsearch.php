<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Perkembanganekspor;

/**
 * Perkembanganeksporsearch represents the model behind the search form about `app\models\Perkembanganekspor`.
 */
class Perkembanganeksporsearch extends Perkembanganekspor
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_satuan', 'id_tahun', 'id_bulan', 'created_at', 'updated_at'], 'integer'],
            [['migas', 'minyakmentah', 'hasilminyak', 'gas', 'nonmigas', 'hs27', 'lainnya', 'total'], 'number'],
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
        $query = Perkembanganekspor::find();

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
            'migas' => $this->migas,
            'minyakmentah' => $this->minyakmentah,
            'hasilminyak' => $this->hasilminyak,
            'gas' => $this->gas,
            'nonmigas' => $this->nonmigas,
            'hs27' => $this->hs27,
            'lainnya' => $this->lainnya,
            'total' => $this->total,
            'id_satuan' => $this->id_satuan,
            'id_tahun' => $this->id_tahun,
            'id_bulan' => $this->id_bulan,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'fenomena', $this->fenomena]);

        return $dataProvider;
    }
}
