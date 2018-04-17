<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tanamanhias;

/**
 * Tanamanhiassearch represents the model behind the search form about `app\models\Tanamanhias`.
 */
class Tanamanhiassearch extends Tanamanhias
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_wil', 'id_satuan', 'id_tahun', 'created_at', 'updated_at'], 'integer'],
            [['anggrek', 'anthurium_bunga', 'anyelir', 'gerbera_hebras', 'gladiol', 'heliconia_pisang_pisangan', 'krisan', 'mawar', 'sedap_malam', 'dracaena', 'melati', 'palem', 'aglaonema', 'adenium_kamboja_jepang', 'euphorbia', 'phylodendron', 'pakis', 'monstera', 'ixora_soka', 'cordyline', 'diffenbachia', 'sansevieria_pedang_pedangan', 'anthurium_daun', 'caladium'], 'number'],
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
        $query = Tanamanhias::find();

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
            'anggrek' => $this->anggrek,
            'anthurium_bunga' => $this->anthurium_bunga,
            'anyelir' => $this->anyelir,
            'gerbera_hebras' => $this->gerbera_hebras,
            'gladiol' => $this->gladiol,
            'heliconia_pisang_pisangan' => $this->heliconia_pisang_pisangan,
            'krisan' => $this->krisan,
            'mawar' => $this->mawar,
            'sedap_malam' => $this->sedap_malam,
            'dracaena' => $this->dracaena,
            'melati' => $this->melati,
            'palem' => $this->palem,
            'aglaonema' => $this->aglaonema,
            'adenium_kamboja_jepang' => $this->adenium_kamboja_jepang,
            'euphorbia' => $this->euphorbia,
            'phylodendron' => $this->phylodendron,
            'pakis' => $this->pakis,
            'monstera' => $this->monstera,
            'ixora_soka' => $this->ixora_soka,
            'cordyline' => $this->cordyline,
            'diffenbachia' => $this->diffenbachia,
            'sansevieria_pedang_pedangan' => $this->sansevieria_pedang_pedangan,
            'anthurium_daun' => $this->anthurium_daun,
            'caladium' => $this->caladium,
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
