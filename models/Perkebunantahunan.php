<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "perkebunantahunan".
 *
 * @property integer $id
 * @property double $karet
 * @property double $kelapa_dalam
 * @property double $kelapa_sawit
 * @property double $kakao
 * @property double $lada
 * @property double $kopi
 * @property double $cengkeh
 * @property double $pala
 * @property double $kemiri
 * @property double $kayu_manis
 * @property double $aren
 * @property double $kapok
 * @property double $jambu_mete
 * @property double $panili
 * @property double $nipah
 * @property double $pinang
 * @property double $sagu_
 * @property double $lainnya
 * @property string $fenomena
 * @property integer $id_wil
 * @property integer $id_satuan
 * @property integer $id_tahun
 * @property integer $created_at
 * @property integer $updated_at
 */
class Perkebunantahunan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'perkebunantahunan';
    }

    public function behaviors()
    {
        return [
            \yii\behaviors\TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['karet', 'kelapa_dalam', 'kelapa_sawit', 'kakao', 'lada', 'kopi', 'cengkeh', 'pala', 'kemiri', 'kayu_manis', 'aren', 'kapok', 'jambu_mete', 'panili', 'nipah', 'pinang', 'sagu_', 'lainnya'], 'number'],
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
            'karet' => 'Karet',
            'kelapa_dalam' => 'Kelapa Dalam',
            'kelapa_sawit' => 'Kelapa Sawit',
            'kakao' => 'Kakao',
            'lada' => 'Lada',
            'kopi' => 'Kopi',
            'cengkeh' => 'Cengkeh',
            'pala' => 'Pala',
            'kemiri' => 'Kemiri',
            'kayu_manis' => 'Kayu Manis',
            'aren' => 'Aren',
            'kapok' => 'Kapok',
            'jambu_mete' => 'Jambu Mete',
            'panili' => 'Panili',
            'nipah' => 'Nipah',
            'pinang' => 'Pinang',
            'sagu_' => 'Sagu',
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
