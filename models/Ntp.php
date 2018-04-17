<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ntp".
 *
 * @property integer $id
 * @property double $it
 * @property double $ib
 * @property double $ntp
 * @property string $fenomena
 * @property integer $id_bulan
 * @property integer $id_satuan
 * @property integer $id_tahun
 * @property integer $created_at
 * @property integer $updated_at
 */
class Ntp extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ntp';
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
            [['it', 'ib', 'ntp'], 'number'],
            [['fenomena'], 'string'],
            [['id_bulan', 'id_satuan', 'id_tahun'], 'required'],
            [['id_bulan', 'id_satuan', 'id_tahun', 'created_at', 'updated_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'it' => 'It',
            'ib' => 'Ib',
            'ntp' => 'Ntp',
            'fenomena' => 'Fenomena',
            'id_bulan' => 'Bulan',
            'id_satuan' => 'Satuan',
            'id_tahun' => 'Tahun',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
