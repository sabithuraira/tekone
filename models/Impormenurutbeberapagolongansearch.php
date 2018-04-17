<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Impormenurutbeberapagolongan;

/**
 * Impormenurutbeberapagolongansearch represents the model behind the search form about `app\models\Impormenurutbeberapagolongan`.
 */
class Impormenurutbeberapagolongansearch extends Impormenurutbeberapagolongan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_satuan', 'id_tahun', 'id_bulan', 'created_at', 'updated_at'], 'integer'],
            [['bahanbakarmineral', 'migas', 'nonmigas', 'mesindanperalatanmekanik', 'kendaraanbermotordanbagiannya', 'barangdaribesiataubaja', 'bahanpeledakprodukpiroteknikkorekapi', 'mesindanperalatanlistrik', 'karetdanbarangdaripadanya', 'mutiaraalammutiarabudidayabatumuliaatausemimulia', 'anekaprodukkimia', 'instrumendanaparatusoptisfotografisinematografi', 'total10golonganbarang', 'lainnya', 'totalimpor'], 'number'],
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
        $query = Impormenurutbeberapagolongan::find();

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
            'mesindanperalatanmekanik' => $this->mesindanperalatanmekanik,
            'kendaraanbermotordanbagiannya' => $this->kendaraanbermotordanbagiannya,
            'barangdaribesiataubaja' => $this->barangdaribesiataubaja,
            'bahanpeledakprodukpiroteknikkorekapi' => $this->bahanpeledakprodukpiroteknikkorekapi,
            'mesindanperalatanlistrik' => $this->mesindanperalatanlistrik,
            'karetdanbarangdaripadanya' => $this->karetdanbarangdaripadanya,
            'mutiaraalammutiarabudidayabatumuliaatausemimulia' => $this->mutiaraalammutiarabudidayabatumuliaatausemimulia,
            'anekaprodukkimia' => $this->anekaprodukkimia,
            'instrumendanaparatusoptisfotografisinematografi' => $this->instrumendanaparatusoptisfotografisinematografi,
            'total10golonganbarang' => $this->total10golonganbarang,
            'lainnya' => $this->lainnya,
            'totalimpor' => $this->totalimpor,
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
