<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "angkutanudara".
 *
 * @property integer $id
 * @property integer $penumpangberangkat
 * @property double $barangmuat
 * @property double $bagasimuat
 * @property double $paketpos
 * @property string $fenomena
 * @property integer $id_bulan
 * @property integer $id_satuan
 * @property integer $id_tahun
 * @property integer $created_at
 * @property integer $updated_at
 */
class Angkutanudara extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'angkutanudara';
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
            [['penumpangberangkat', 'id_bulan', 'id_satuan', 'id_tahun', 'created_at', 'updated_at'], 'integer'],
            [['barangmuat', 'bagasimuat', 'paketpos'], 'number'],
            [['fenomena'], 'string'],
            [['id_bulan', 'id_satuan', 'id_tahun'], 'required'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'penumpangberangkat' => 'Penumpang Berangkat',
            'barangmuat' => 'Barang Muat',
            'bagasimuat' => 'Bagasi Muat',
            'paketpos' => 'Paket Pos',
            'fenomena' => 'Fenomena',
            'id_bulan' => 'Bulan',
            'id_satuan' => 'Satuan',
            'id_tahun' => 'Tahun',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
