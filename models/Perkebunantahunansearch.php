<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Perkebunantahunan;

/**
 * Perkebunantahunansearch represents the model behind the search form about `app\models\Perkebunantahunan`.
 */
class Perkebunantahunansearch extends Perkebunantahunan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_wil', 'id_satuan', 'id_tahun', 'created_at', 'updated_at'], 'integer'],
            [['karet', 'kelapa_dalam', 'kelapa_sawit', 'kakao', 'lada', 'kopi', 'cengkeh', 'pala', 'kemiri', 'kayu_manis', 'aren', 'kapok', 'jambu_mete', 'panili', 'nipah', 'pinang', 'sagu_', 'lainnya'], 'number'],
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
        $query = Perkebunantahunan::find();

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
            'karet' => $this->karet,
            'kelapa_dalam' => $this->kelapa_dalam,
            'kelapa_sawit' => $this->kelapa_sawit,
            'kakao' => $this->kakao,
            'lada' => $this->lada,
            'kopi' => $this->kopi,
            'cengkeh' => $this->cengkeh,
            'pala' => $this->pala,
            'kemiri' => $this->kemiri,
            'kayu_manis' => $this->kayu_manis,
            'aren' => $this->aren,
            'kapok' => $this->kapok,
            'jambu_mete' => $this->jambu_mete,
            'panili' => $this->panili,
            'nipah' => $this->nipah,
            'pinang' => $this->pinang,
            'sagu_' => $this->sagu_,
            'lainnya' => $this->lainnya,
            'id_wil' => $this->id_wil,
            'id_satuan' => $this->id_satuan,
            'id_tahun' => $this->id_tahun,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'fenomena', $this->fenomena]);

        return $dataProvider;
    }
}
