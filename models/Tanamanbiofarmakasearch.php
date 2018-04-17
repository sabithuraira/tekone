<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tanamanbiofarmaka;

/**
 * Tanamanbiofarmakasearch represents the model behind the search form about `app\models\Tanamanbiofarmaka`.
 */
class Tanamanbiofarmakasearch extends Tanamanbiofarmaka
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_wil', 'id_satuan', 'id_tahun', 'created_at', 'updated_at'], 'integer'],
            [['jahe', 'laos_lengkuas', 'kencur', 'kunyit', 'lempuyang', 'temulawak', 'temuireng', 'temukunci', 'dlingo_dringo', 'kapulaga', 'mengkudu_pace', 'mahkota_dewa', 'kejibeling', 'sambiloto', 'lidah_buaya', 'biofarmaka_lainnya', 'lainnya'], 'number'],
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
        $query = Tanamanbiofarmaka::find();

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
            'jahe' => $this->jahe,
            'laos_lengkuas' => $this->laos_lengkuas,
            'kencur' => $this->kencur,
            'kunyit' => $this->kunyit,
            'lempuyang' => $this->lempuyang,
            'temulawak' => $this->temulawak,
            'temuireng' => $this->temuireng,
            'temukunci' => $this->temukunci,
            'dlingo_dringo' => $this->dlingo_dringo,
            'kapulaga' => $this->kapulaga,
            'mengkudu_pace' => $this->mengkudu_pace,
            'mahkota_dewa' => $this->mahkota_dewa,
            'kejibeling' => $this->kejibeling,
            'sambiloto' => $this->sambiloto,
            'lidah_buaya' => $this->lidah_buaya,
            'biofarmaka_lainnya' => $this->biofarmaka_lainnya,
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
