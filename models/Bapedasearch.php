<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Bapeda;

/**
 * Bapedasearch represents the model behind the search form about `app\models\Bapeda`.
 */
class Bapedasearch extends Bapeda
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_satuan', 'id_tahun', 'id_tw', 'created_at', 'updated_at'], 'integer'],
            [['belanjapegawai', 'belanjabarang', 'belanjamodal', 'belanjabansos'], 'number'],
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
        $query = Bapeda::find();

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
            'belanjapegawai' => $this->belanjapegawai,
            'belanjabarang' => $this->belanjabarang,
            'belanjamodal' => $this->belanjamodal,
            'belanjabansos' => $this->belanjabansos,
            'id_satuan' => $this->id_satuan,
            'id_tahun' => $this->id_tahun,
            'id_tw' => $this->id_tw,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'fenomena', $this->fenomena]);

        return $dataProvider;
    }
}
