<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sayurbuahsetahun;

/**
 * Sayurbuahsetahunsearch represents the model behind the search form about `app\models\Sayurbuahsetahun`.
 */
class Sayurbuahsetahunsearch extends Sayurbuahsetahun
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_wil', 'id_satuan', 'id_tahun', 'created_at', 'updated_at'], 'integer'],
            [['alpukat', 'belimbing', 'duku_langsat', 'durian', 'jambu_biji', 'jambu_air', 'jeruk_siam_keprok', 'jeruk_besar', 'mangga', 'manggis', 'nangka_cempedak', 'nenas', 'pepaya', 'pisang', 'rambutan', 'salak', 'sawo', 'markisa_konyal', 'sirsak', 'sukun', 'melinjo', 'petai', 'jengkol', 'lainnya'], 'number'],
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
        $query = Sayurbuahsetahun::find();

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
            'alpukat' => $this->alpukat,
            'belimbing' => $this->belimbing,
            'duku_langsat' => $this->duku_langsat,
            'durian' => $this->durian,
            'jambu_biji' => $this->jambu_biji,
            'jambu_air' => $this->jambu_air,
            'jeruk_siam_keprok' => $this->jeruk_siam_keprok,
            'jeruk_besar' => $this->jeruk_besar,
            'mangga' => $this->mangga,
            'manggis' => $this->manggis,
            'nangka_cempedak' => $this->nangka_cempedak,
            'nenas' => $this->nenas,
            'pepaya' => $this->pepaya,
            'pisang' => $this->pisang,
            'rambutan' => $this->rambutan,
            'salak' => $this->salak,
            'sawo' => $this->sawo,
            'markisa_konyal' => $this->markisa_konyal,
            'sirsak' => $this->sirsak,
            'sukun' => $this->sukun,
            'melinjo' => $this->melinjo,
            'petai' => $this->petai,
            'jengkol' => $this->jengkol,
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
