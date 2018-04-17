<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "klasifikasibintang".
 *
 * @property integer $id
 * @property double $bintang1
 * @property double $bintang2
 * @property double $bintang3
 * @property double $bintang4
 * @property double $bintang5
 * @property string $fenomena
 * @property integer $id_bulan
 * @property integer $id_satuan
 * @property integer $id_wil
 * @property integer $id_tahun
 * @property integer $created_at
 * @property integer $updated_at
 */
class Klasifikasibintang extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'klasifikasibintang';
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
            [['bintang1', 'bintang2', 'bintang3', 'bintang4', 'bintang5'], 'number'],
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
            'bintang1' => 'Bintang 1',
            'bintang2' => 'Bintang 2',
            'bintang3' => 'Bintang 3',
            'bintang4' => 'Bintang 4',
            'bintang5' => 'Bintang 5',
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
