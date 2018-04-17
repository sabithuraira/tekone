<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "akomodasi".
 *
 * @property integer $id
 * @property double $hotel
 * @property double $penginapan
 * @property double $kamar
 * @property double $tempattidur
 * @property string $fenomena
 * @property integer $id_bulan
 * @property integer $id_satuan
 * @property integer $id_wil
 * @property integer $id_tahun
 * @property integer $created_at
 * @property integer $updated_at
 */
class Akomodasi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'akomodasi';
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
            [['hotel', 'penginapan', 'kamar', 'tempattidur'], 'number'],
            [['fenomena'], 'string'],
            [['id_bulan', 'id_satuan', 'id_wil', 'id_tahun'], 'required'],
            [['id_bulan', 'id_satuan', 'id_wil', 'id_tahun', 'created_at', 'updated_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'hotel' => 'Hotel',
            'penginapan' => 'Penginapan',
            'kamar' => 'Kamar',
            'tempattidur' => 'Tempat Tidur',
            'fenomena' => 'Fenomena',
            'id_bulan' => 'Bulan',
            'id_satuan' => 'Satuan',
            'id_wil' => 'Wilayah',
            'id_tahun' => 'Tahun',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
