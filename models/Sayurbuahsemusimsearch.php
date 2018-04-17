<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Sayurbuahsemusim;

/**
 * Sayurbuahsemusimsearch represents the model behind the search form about `app\models\Sayurbuahsemusim`.
 */
class Sayurbuahsemusimsearch extends Sayurbuahsemusim
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_wil', 'id_satuan', 'id_tahun', 'created_at', 'updated_at'], 'integer'],
            [['bawang_merah', 'bawang_putih', 'bawang_daun', 'kentang_', 'kubis', 'kembang_kol', 'petsaisawi', 'wortel', 'lobak', 'kacang_merah', 'kacang_panjang', 'cabe_besar', 'cabe_rawit', 'paprika', 'jamur', 'tomat', 'terung', 'buncis', 'ketimun', 'labu_siam', 'kangkung', 'bayam', 'melon', 'semangka', 'blewah', 'lainnya'], 'number'],
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
        $query = Sayurbuahsemusim::find();

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
            'bawang_merah' => $this->bawang_merah,
            'bawang_putih' => $this->bawang_putih,
            'bawang_daun' => $this->bawang_daun,
            'kentang_' => $this->kentang_,
            'kubis' => $this->kubis,
            'kembang_kol' => $this->kembang_kol,
            'petsaisawi' => $this->petsaisawi,
            'wortel' => $this->wortel,
            'lobak' => $this->lobak,
            'kacang_merah' => $this->kacang_merah,
            'kacang_panjang' => $this->kacang_panjang,
            'cabe_besar' => $this->cabe_besar,
            'cabe_rawit' => $this->cabe_rawit,
            'paprika' => $this->paprika,
            'jamur' => $this->jamur,
            'tomat' => $this->tomat,
            'terung' => $this->terung,
            'buncis' => $this->buncis,
            'ketimun' => $this->ketimun,
            'labu_siam' => $this->labu_siam,
            'kangkung' => $this->kangkung,
            'bayam' => $this->bayam,
            'melon' => $this->melon,
            'semangka' => $this->semangka,
            'blewah' => $this->blewah,
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
