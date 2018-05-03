<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sayurbuahsemusim".
 *
 * @property integer $id
 * @property double $bawang_merah
 * @property double $bawang_putih
 * @property double $bawang_daun
 * @property double $kentang_
 * @property double $kubis
 * @property double $kembang_kol
 * @property double $petsaisawi
 * @property double $wortel
 * @property double $lobak
 * @property double $kacang_merah
 * @property double $kacang_panjang
 * @property double $cabe_besar
 * @property double $cabe_rawit
 * @property double $paprika
 * @property double $jamur
 * @property double $tomat
 * @property double $terung
 * @property double $buncis
 * @property double $ketimun
 * @property double $labu_siam
 * @property double $kangkung
 * @property double $bayam
 * @property double $melon
 * @property double $semangka
 * @property double $blewah
 * @property double $lainnya
 * @property string $fenomena
 * @property integer $id_wil
 * @property integer $id_satuan
 * @property integer $id_tahun
 * @property integer $created_at
 * @property integer $updated_at
 */
class Sayurbuahsemusim extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sayurbuahsemusim';
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
            [['bawang_merah', 'bawang_putih', 'bawang_daun', 'kentang_', 'kubis', 'kembang_kol', 'petsaisawi', 'wortel', 'lobak', 'kacang_merah', 'kacang_panjang', 'cabe_besar', 'cabe_rawit', 'paprika', 'jamur', 'tomat', 'terung', 'buncis', 'ketimun', 'labu_siam', 'kangkung', 'bayam', 'melon', 'semangka', 'blewah', 'lainnya'], 'number'],
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
            'bawang_merah' => 'Bawang Merah',
            'bawang_putih' => 'Bawang Putih',
            'bawang_daun' => 'Bawang Daun',
            'kentang_' => 'Kentang',
            'kubis' => 'Kubis',
            'kembang_kol' => 'Kembang Kol',
            'petsaisawi' => 'Petsaisawi',
            'wortel' => 'Wortel',
            'lobak' => 'Lobak',
            'kacang_merah' => 'Kacang Merah',
            'kacang_panjang' => 'Kacang Panjang',
            'cabe_besar' => 'Cabe Besar',
            'cabe_rawit' => 'Cabe Rawit',
            'paprika' => 'Paprika',
            'jamur' => 'Jamur',
            'tomat' => 'Tomat',
            'terung' => 'Terung',
            'buncis' => 'Buncis',
            'ketimun' => 'Ketimun',
            'labu_siam' => 'Labu Siam',
            'kangkung' => 'Kangkung',
            'bayam' => 'Bayam',
            'melon' => 'Melon',
            'semangka' => 'Semangka',
            'blewah' => 'Blewah',
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
