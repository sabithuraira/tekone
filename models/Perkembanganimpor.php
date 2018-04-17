<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "perkembanganimpor".
 *
 * @property integer $id
 * @property double $migas
 * @property double $minyakmentah
 * @property double $hasilminyak
 * @property double $gas
 * @property double $nonmigas
 * @property double $hs27
 * @property double $lainnya
 * @property double $total
 * @property string $fenomena
 * @property integer $id_satuan
 * @property integer $id_tahun
 * @property integer $id_bulan
 * @property integer $created_at
 * @property integer $updated_at
 */
class Perkembanganimpor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'perkembanganimpor';
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
            [['migas', 'minyakmentah', 'hasilminyak', 'gas', 'nonmigas', 'hs27', 'lainnya', 'total'], 'number'],
            [['fenomena'], 'string'],
            [['id_satuan', 'id_tahun', 'id_bulan'], 'required'],
            [['id_satuan', 'id_tahun', 'id_bulan', 'created_at', 'updated_at'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'migas' => 'Migas',
            'minyakmentah' => 'Minyakmentah',
            'hasilminyak' => 'Hasil minyak',
            'gas' => 'Gas',
            'nonmigas' => 'Non migas',
            'hs27' => 'Hs27',
            'lainnya' => 'Lainnya',
            'total' => 'Total',
            'fenomena' => 'Fenomena',
            'id_satuan' => 'Satuan',
            'id_tahun' => 'Tahun',
            'id_bulan' => 'Bulan',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
