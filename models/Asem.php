<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asem".
 *
 * @property integer $id
 * @property double $padisawah
 * @property double $padiladang
 * @property double $padi
 * @property double $jagung
 * @property double $kedelai
 * @property double $kacangtanah
 * @property double $kacanghijau
 * @property double $ubikayu
 * @property double $ubijalar
 * @property string $fenomena
 * @property integer $id_wil
 * @property integer $id_satuan
 * @property integer $id_tahun
 * @property integer $created_at
 * @property integer $updated_at
 */
class Asem extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asem';
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
            [['padisawah', 'padiladang', 'padi', 'jagung', 'kedelai', 'kacangtanah', 'kacanghijau', 'ubikayu', 'ubijalar'], 'number'],
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
            'padisawah' => 'Padi Sawah',
            'padiladang' => 'Padi Ladang',
            'padi' => 'Padi',
            'jagung' => 'Jagung',
            'kedelai' => 'Kedelai',
            'kacangtanah' => 'Kacang Tanah',
            'kacanghijau' => 'Kacang Hijau',
            'ubikayu' => 'Ubi Kayu',
            'ubijalar' => 'Ubi Jalar',
            'fenomena' => 'Fenomena',
            'id_wil' => 'Wilayah',
            'id_satuan' => 'Satuan',
            'id_tahun' => 'Tahun',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
