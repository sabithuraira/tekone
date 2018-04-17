<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PertumbuhanPdrbPengeluaranTd2010AdhKonstanQtoq;

/**
 * PertumbuhanPdrbPengeluaranTd2010AdhKonstanQtoqsearch represents the model behind the search form about `app\models\PertumbuhanPdrbPengeluaranTd2010AdhKonstanQtoq`.
 */
class PertumbuhanPdrbPengeluaranTd2010AdhKonstanQtoqsearch extends PertumbuhanPdrbPengeluaranTd2010AdhKonstanQtoq
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'triwulan', 'tahun', 'created_at', 'updated_at'], 'integer'],
            [['pengeluaran_konsumsi_rumah_tangga', 'pengeluaran_konsumsi_lnprt', 'pengeluaran_konsumsi_pemerintah', 'pembentukan_modal_tetap_bruto', 'perubahan_inventori', 'ekspor_luar_negeri', 'impor_luar_negeri', 'net_ekspor_antar_daerah', 'pdrb', 'total_sektoral'], 'number'],
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
        $query = PertumbuhanPdrbPengeluaranTd2010AdhKonstanQtoq::find();

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
            'pengeluaran_konsumsi_rumah_tangga' => $this->pengeluaran_konsumsi_rumah_tangga,
            'pengeluaran_konsumsi_lnprt' => $this->pengeluaran_konsumsi_lnprt,
            'pengeluaran_konsumsi_pemerintah' => $this->pengeluaran_konsumsi_pemerintah,
            'pembentukan_modal_tetap_bruto' => $this->pembentukan_modal_tetap_bruto,
            'perubahan_inventori' => $this->perubahan_inventori,
            'ekspor_luar_negeri' => $this->ekspor_luar_negeri,
            'impor_luar_negeri' => $this->impor_luar_negeri,
            'net_ekspor_antar_daerah' => $this->net_ekspor_antar_daerah,
            'pdrb' => $this->pdrb,
            'total_sektoral' => $this->total_sektoral,
            'triwulan' => $this->triwulan,
            'tahun' => $this->tahun,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        return $dataProvider;
    }
}
