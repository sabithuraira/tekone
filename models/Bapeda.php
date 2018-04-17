<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bapeda".
 *
 * @property integer $id
 * @property double $belanjapegawai
 * @property double $belanjabarang
 * @property double $belanjamodal
 * @property double $belanjabansos
 * @property string $fenomena
 * @property integer $id_satuan
 * @property integer $id_tahun
 * @property integer $id_tw
 * @property integer $created_at
 * @property integer $updated_at
 */
class Bapeda extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'bapeda';
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
            [['belanjapegawai', 'belanjabarang', 'belanjamodal', 'belanjabansos'], 'number'],
            [['fenomena'], 'string'],
            [['id_satuan', 'id_tahun', 'id_tw'], 'required'],
            [['id_satuan', 'id_tahun', 'id_tw', 'created_at', 'updated_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'belanjapegawai' => 'Belanja Pegawai',
            'belanjabarang' => 'Belanja Barang',
            'belanjamodal' => 'Belanja Modal',
            'belanjabansos' => 'Belanja Bansos',
            'fenomena' => 'Fenomena',
            'id_satuan' => 'Satuan',
            'id_tahun' => 'Tahun',
            'id_tw' => 'Triwulan',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
