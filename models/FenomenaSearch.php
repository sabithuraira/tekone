<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Fenomena;

/**
 * FenomenaSearch represents the model behind the search form about `app\models\Fenomena`.
 */
class FenomenaSearch extends Fenomena
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_kab', 'triwulan', 'tahun', 'created_at', 'updated_at'], 'integer'],
            [['pengeluaran_konsumsi_rumah_tangga_qtoq', 'pengeluaran_konsumsi_rumah_tangga_ytoy', 'pengeluaran_konsumsi_rumah_tangga_laju_implisit', 'pengeluaran_konsumsi_lnprt_qtoq', 'pengeluaran_konsumsi_lnprt_ytoy', 'pengeluaran_konsumsi_lnprt_laju_implisit', 'pengeluaran_konsumsi_pemerintah_qtoq', 'pengeluaran_konsumsi_pemerintah_ytoy', 'pengeluaran_konsumsi_pemerintah_laju_implisit', 'pembentukan_modal_tetap_bruto_qtoq', 'pembentukan_modal_tetap_bruto_ytoy', 'pembentukan_modal_tetap_bruto_laju_implisit', 'perubahan_inventori_qtoq', 'perubahan_inventori_ytoy', 'perubahan_inventori_laju_implisit', 'ekspor_luar_negeri_qtoq', 'ekspor_luar_negeri_ytoy', 'ekspor_luar_negeri_laju_implisit', 'impor_luar_negeri_qtoq', 'impor_luar_negeri_ytoy', 'impor_luar_negeri_implisit', 'net_ekspor_antar_daerah_qtoq', 'net_ekspor_antar_daerah_ytoy', 'net_ekspor_antar_daerah_implisit'], 'safe'],
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
        $query = Fenomena::find();

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
            'id_kab' => $this->id_kab,
            'triwulan' => $this->triwulan,
            'tahun' => $this->tahun,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'pengeluaran_konsumsi_rumah_tangga_qtoq', $this->pengeluaran_konsumsi_rumah_tangga_qtoq])
            ->andFilterWhere(['like', 'pengeluaran_konsumsi_rumah_tangga_ytoy', $this->pengeluaran_konsumsi_rumah_tangga_ytoy])
            ->andFilterWhere(['like', 'pengeluaran_konsumsi_rumah_tangga_laju_implisit', $this->pengeluaran_konsumsi_rumah_tangga_laju_implisit])
            ->andFilterWhere(['like', 'pengeluaran_konsumsi_lnprt_qtoq', $this->pengeluaran_konsumsi_lnprt_qtoq])
            ->andFilterWhere(['like', 'pengeluaran_konsumsi_lnprt_ytoy', $this->pengeluaran_konsumsi_lnprt_ytoy])
            ->andFilterWhere(['like', 'pengeluaran_konsumsi_lnprt_laju_implisit', $this->pengeluaran_konsumsi_lnprt_laju_implisit])
            ->andFilterWhere(['like', 'pengeluaran_konsumsi_pemerintah_qtoq', $this->pengeluaran_konsumsi_pemerintah_qtoq])
            ->andFilterWhere(['like', 'pengeluaran_konsumsi_pemerintah_ytoy', $this->pengeluaran_konsumsi_pemerintah_ytoy])
            ->andFilterWhere(['like', 'pengeluaran_konsumsi_pemerintah_laju_implisit', $this->pengeluaran_konsumsi_pemerintah_laju_implisit])
            ->andFilterWhere(['like', 'pembentukan_modal_tetap_bruto_qtoq', $this->pembentukan_modal_tetap_bruto_qtoq])
            ->andFilterWhere(['like', 'pembentukan_modal_tetap_bruto_ytoy', $this->pembentukan_modal_tetap_bruto_ytoy])
            ->andFilterWhere(['like', 'pembentukan_modal_tetap_bruto_laju_implisit', $this->pembentukan_modal_tetap_bruto_laju_implisit])
            ->andFilterWhere(['like', 'perubahan_inventori_qtoq', $this->perubahan_inventori_qtoq])
            ->andFilterWhere(['like', 'perubahan_inventori_ytoy', $this->perubahan_inventori_ytoy])
            ->andFilterWhere(['like', 'perubahan_inventori_laju_implisit', $this->perubahan_inventori_laju_implisit])
            ->andFilterWhere(['like', 'ekspor_luar_negeri_qtoq', $this->ekspor_luar_negeri_qtoq])
            ->andFilterWhere(['like', 'ekspor_luar_negeri_ytoy', $this->ekspor_luar_negeri_ytoy])
            ->andFilterWhere(['like', 'ekspor_luar_negeri_laju_implisit', $this->ekspor_luar_negeri_laju_implisit])
            ->andFilterWhere(['like', 'impor_luar_negeri_qtoq', $this->impor_luar_negeri_qtoq])
            ->andFilterWhere(['like', 'impor_luar_negeri_ytoy', $this->impor_luar_negeri_ytoy])
            ->andFilterWhere(['like', 'impor_luar_negeri_implisit', $this->impor_luar_negeri_implisit])
            ->andFilterWhere(['like', 'net_ekspor_antar_daerah_qtoq', $this->net_ekspor_antar_daerah_qtoq])
            ->andFilterWhere(['like', 'net_ekspor_antar_daerah_ytoy', $this->net_ekspor_antar_daerah_ytoy])
            ->andFilterWhere(['like', 'net_ekspor_antar_daerah_implisit', $this->net_ekspor_antar_daerah_implisit]);

        return $dataProvider;
    }
}
