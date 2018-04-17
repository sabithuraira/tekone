<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tanamanbiofarmaka".
 *
 * @property integer $id
 * @property double $jahe
 * @property double $laos_lengkuas
 * @property double $kencur
 * @property double $kunyit
 * @property double $lempuyang
 * @property double $temulawak
 * @property double $temuireng
 * @property double $temukunci
 * @property double $dlingo_dringo
 * @property double $kapulaga
 * @property double $mengkudu_pace
 * @property double $mahkota_dewa
 * @property double $kejibeling
 * @property double $sambiloto
 * @property double $lidah_buaya
 * @property double $biofarmaka_lainnya
 * @property double $lainnya
 * @property string $fenomena
 * @property integer $id_wil
 * @property integer $id_satuan
 * @property integer $id_tahun
 * @property integer $created_at
 * @property integer $updated_at
 */
class Tanamanbiofarmaka extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tanamanbiofarmaka';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['jahe', 'laos_lengkuas', 'kencur', 'kunyit', 'lempuyang', 'temulawak', 'temuireng', 'temukunci', 'dlingo_dringo', 'kapulaga', 'mengkudu_pace', 'mahkota_dewa', 'kejibeling', 'sambiloto', 'lidah_buaya', 'biofarmaka_lainnya', 'lainnya'], 'number'],
            [['fenomena'], 'string'],
            [['id_wil', 'id_satuan', 'id_tahun'], 'required'],
            [['id_wil', 'id_satuan', 'id_tahun', 'created_at', 'updated_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'jahe' => 'Jahe',
            'laos_lengkuas' => 'Laos Lengkuas',
            'kencur' => 'Kencur',
            'kunyit' => 'Kunyit',
            'lempuyang' => 'Lempuyang',
            'temulawak' => 'Temulawak',
            'temuireng' => 'Temuireng',
            'temukunci' => 'Temukunci',
            'dlingo_dringo' => 'Dlingo Dringo',
            'kapulaga' => 'Kapulaga',
            'mengkudu_pace' => 'Mengkudu Pace',
            'mahkota_dewa' => 'Mahkota Dewa',
            'kejibeling' => 'Kejibeling',
            'sambiloto' => 'Sambiloto',
            'lidah_buaya' => 'Lidah Buaya',
            'biofarmaka_lainnya' => 'Biofarmaka Lainnya',
            'lainnya' => 'Lainnya',
            'fenomena' => 'Fenomena',
            'id_wil' => 'Id Wil',
            'id_satuan' => 'Id Satuan',
            'id_tahun' => 'Id Tahun',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
