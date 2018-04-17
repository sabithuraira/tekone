<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Ekspormenurutbeberapagolongan;

/**
 * Ekspormenurutbeberapagolongansearch represents the model behind the search form about `app\models\Ekspormenurutbeberapagolongan`.
 */
class Ekspormenurutbeberapagolongansearch extends Ekspormenurutbeberapagolongan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_satuan', 'id_tahun', 'id_bulan', 'created_at', 'updated_at'], 'integer'],
            [['bahanbakarmineral', 'migas', 'nonmigas', 'pupuk', 'lemakdanminyakhewaninabatimalamnabati', 'bahankimiaanorganik', 'kayudanbarangdarikayuarangkayu', 'bahankimiaorganik', 'anekaprodukkimia', 'kapalperahudanstrukturterapung', 'reaktornuklirketelmesindanperalatanmekanis', 'ikandankrustaseamoluskasertainvertebrataairlainnya', 'total10golonganbarang', 'lainnya', 'totalekspor'], 'number'],
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
        $query = Ekspormenurutbeberapagolongan::find();

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
            'bahanbakarmineral' => $this->bahanbakarmineral,
            'migas' => $this->migas,
            'nonmigas' => $this->nonmigas,
            'pupuk' => $this->pupuk,
            'lemakdanminyakhewaninabatimalamnabati' => $this->lemakdanminyakhewaninabatimalamnabati,
            'bahankimiaanorganik' => $this->bahankimiaanorganik,
            'kayudanbarangdarikayuarangkayu' => $this->kayudanbarangdarikayuarangkayu,
            'bahankimiaorganik' => $this->bahankimiaorganik,
            'anekaprodukkimia' => $this->anekaprodukkimia,
            'kapalperahudanstrukturterapung' => $this->kapalperahudanstrukturterapung,
            'reaktornuklirketelmesindanperalatanmekanis' => $this->reaktornuklirketelmesindanperalatanmekanis,
            'ikandankrustaseamoluskasertainvertebrataairlainnya' => $this->ikandankrustaseamoluskasertainvertebrataairlainnya,
            'total10golonganbarang' => $this->total10golonganbarang,
            'lainnya' => $this->lainnya,
            'totalekspor' => $this->totalekspor,
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
