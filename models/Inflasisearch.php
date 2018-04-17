<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Inflasi;

/**
 * Inflasisearch represents the model behind the search form about `app\models\Inflasi`.
 */
class Inflasisearch extends Inflasi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_wil', 'id_satuan', 'id_tahun', 'id_bulan', 'created_at', 'updated_at'], 'integer'],
            [['bahanmakanan', 'padipadianumbiumbianhasilnya', 'daginghasilhasilnya', 'ikansegar', 'ikandiawetkan', 'telursusuhasilnya', 'sayursayuran', 'kacangkacangan', 'buahbuahan', 'bumbubumbuan', 'lemakdanminyak', 'bahanmakananlainnya', 'makananjadirokoktembakau', 'makananjadi', 'minumanyangtdkberalkohol', 'tembakaudanminumanberalkohol', 'perumahan', 'biayatempattinggal', 'bahanbakarpeneranganair', 'perlengkapanrumahtangga', 'penyelenggaraanrumahtangga', 'sandang', 'sandanglakilaki', 'sandangwanita', 'sandanganakanak', 'barangpribadisandanglainnya', 'kesehatan', 'jasakesehatan', 'obatobatan', 'jasaperawatanjasmani', 'perawatanjasmanidankosmetik', 'pendidikanrekreasidanolahraga', 'jasapendidikan', 'kursuskursuspelatihan', 'perlengkapanperalatanpendidikan', 'rekreasi', 'olahraga', 'transpordankomunikasi', 'transport', 'komunikasidanpengiriman', 'saranadanpenunjangtranspor', 'jasakeuangan'], 'number'],
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
        $query = Inflasi::find();

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
            'bahanmakanan' => $this->bahanmakanan,
            'padipadianumbiumbianhasilnya' => $this->padipadianumbiumbianhasilnya,
            'daginghasilhasilnya' => $this->daginghasilhasilnya,
            'ikansegar' => $this->ikansegar,
            'ikandiawetkan' => $this->ikandiawetkan,
            'telursusuhasilnya' => $this->telursusuhasilnya,
            'sayursayuran' => $this->sayursayuran,
            'kacangkacangan' => $this->kacangkacangan,
            'buahbuahan' => $this->buahbuahan,
            'bumbubumbuan' => $this->bumbubumbuan,
            'lemakdanminyak' => $this->lemakdanminyak,
            'bahanmakananlainnya' => $this->bahanmakananlainnya,
            'makananjadirokoktembakau' => $this->makananjadirokoktembakau,
            'makananjadi' => $this->makananjadi,
            'minumanyangtdkberalkohol' => $this->minumanyangtdkberalkohol,
            'tembakaudanminumanberalkohol' => $this->tembakaudanminumanberalkohol,
            'perumahan' => $this->perumahan,
            'biayatempattinggal' => $this->biayatempattinggal,
            'bahanbakarpeneranganair' => $this->bahanbakarpeneranganair,
            'perlengkapanrumahtangga' => $this->perlengkapanrumahtangga,
            'penyelenggaraanrumahtangga' => $this->penyelenggaraanrumahtangga,
            'sandang' => $this->sandang,
            'sandanglakilaki' => $this->sandanglakilaki,
            'sandangwanita' => $this->sandangwanita,
            'sandanganakanak' => $this->sandanganakanak,
            'barangpribadisandanglainnya' => $this->barangpribadisandanglainnya,
            'kesehatan' => $this->kesehatan,
            'jasakesehatan' => $this->jasakesehatan,
            'obatobatan' => $this->obatobatan,
            'jasaperawatanjasmani' => $this->jasaperawatanjasmani,
            'perawatanjasmanidankosmetik' => $this->perawatanjasmanidankosmetik,
            'pendidikanrekreasidanolahraga' => $this->pendidikanrekreasidanolahraga,
            'jasapendidikan' => $this->jasapendidikan,
            'kursuskursuspelatihan' => $this->kursuskursuspelatihan,
            'perlengkapanperalatanpendidikan' => $this->perlengkapanperalatanpendidikan,
            'rekreasi' => $this->rekreasi,
            'olahraga' => $this->olahraga,
            'transpordankomunikasi' => $this->transpordankomunikasi,
            'transport' => $this->transport,
            'komunikasidanpengiriman' => $this->komunikasidanpengiriman,
            'saranadanpenunjangtranspor' => $this->saranadanpenunjangtranspor,
            'jasakeuangan' => $this->jasakeuangan,
            'id_wil' => $this->id_wil,
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
