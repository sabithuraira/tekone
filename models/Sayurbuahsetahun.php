<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sayurbuahsetahun".
 *
 * @property integer $id
 * @property double $alpukat
 * @property double $belimbing
 * @property double $duku_langsat
 * @property double $durian
 * @property double $jambu_biji
 * @property double $jambu_air
 * @property double $jeruk_siam_keprok
 * @property double $jeruk_besar
 * @property double $mangga
 * @property double $manggis
 * @property double $nangka_cempedak
 * @property double $nenas
 * @property double $pepaya
 * @property double $pisang
 * @property double $rambutan
 * @property double $salak
 * @property double $sawo
 * @property double $markisa_konyal
 * @property double $sirsak
 * @property double $sukun
 * @property double $melinjo
 * @property double $petai
 * @property double $jengkol
 * @property double $lainnya
 * @property string $fenomena
 * @property integer $id_wil
 * @property integer $id_satuan
 * @property integer $id_tahun
 * @property integer $created_at
 * @property integer $updated_at
 */
class Sayurbuahsetahun extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'sayurbuahsetahun';
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
            [['alpukat', 'belimbing', 'duku_langsat', 'durian', 'jambu_biji', 'jambu_air', 'jeruk_siam_keprok', 'jeruk_besar', 'mangga', 'manggis', 'nangka_cempedak', 'nenas', 'pepaya', 'pisang', 'rambutan', 'salak', 'sawo', 'markisa_konyal', 'sirsak', 'sukun', 'melinjo', 'petai', 'jengkol', 'lainnya'], 'number'],
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
            'alpukat' => 'Alpukat',
            'belimbing' => 'Belimbing',
            'duku_langsat' => 'Duku Langsat',
            'durian' => 'Durian',
            'jambu_biji' => 'Jambu Biji',
            'jambu_air' => 'Jambu Air',
            'jeruk_siam_keprok' => 'Jeruk Siam Keprok',
            'jeruk_besar' => 'Jeruk Besar',
            'mangga' => 'Mangga',
            'manggis' => 'Manggis',
            'nangka_cempedak' => 'Nangka Cempedak',
            'nenas' => 'Nenas',
            'pepaya' => 'Pepaya',
            'pisang' => 'Pisang',
            'rambutan' => 'Rambutan',
            'salak' => 'Salak',
            'sawo' => 'Sawo',
            'markisa_konyal' => 'Markisa Konyal',
            'sirsak' => 'Sirsak',
            'sukun' => 'Sukun',
            'melinjo' => 'Melinjo',
            'petai' => 'Petai',
            'jengkol' => 'Jengkol',
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
