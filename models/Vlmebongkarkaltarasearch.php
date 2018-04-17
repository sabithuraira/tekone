<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Vlmebongkarkaltara;

/**
 * Vlmebongkarkaltarasearch represents the model behind the search form about `app\models\Vlmebongkarkaltara`.
 */
class Vlmebongkarkaltarasearch extends Vlmebongkarkaltara
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_wil', 'id_satuan', 'id_tahun', 'created_at', 'updated_at'], 'integer'],
            [['lingkastarakan', 'nunukan', 'bunyu', 'tanjungselor', 'tarakanu', 'juatatarakan', 'jumlahtotal'], 'number'],
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
        $query = Vlmebongkarkaltara::find();

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
            'lingkastarakan' => $this->lingkastarakan,
            'nunukan' => $this->nunukan,
            'bunyu' => $this->bunyu,
            'tanjungselor' => $this->tanjungselor,
            'tarakanu' => $this->tarakanu,
            'juatatarakan' => $this->juatatarakan,
            'jumlahtotal' => $this->jumlahtotal,
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
