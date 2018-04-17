<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "nilaibongkarkaltim".
 *
 * @property integer $id
 * @property double $bontang
 * @property double $samarinda
 * @property double $balikpapan
 * @property double $tanjungsangata
 * @property double $adangbay
 * @property double $tanjungredeb
 * @property double $senipah
 * @property double $sangkulirang
 * @property double $pasirtanahgrogot
 * @property double $sepingganu
 * @property double $lainnya
 * @property double $jumlahtotal
 * @property string $fenomena
 * @property integer $id_wil
 * @property integer $id_satuan
 * @property integer $id_tahun
 * @property integer $created_at
 * @property integer $updated_at
 */
class Nilaibongkarkaltim extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'nilaibongkarkaltim';
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
            [['bontang', 'samarinda', 'balikpapan', 'tanjungsangata', 'adangbay', 'tanjungredeb', 'senipah', 'sangkulirang', 'pasirtanahgrogot', 'sepingganu', 'lainnya', 'jumlahtotal'], 'number'],
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
            'bontang' => 'Bontang',
            'samarinda' => 'Samarinda',
            'balikpapan' => 'Balikpapan',
            'tanjungsangata' => 'Tanjung sangata',
            'adangbay' => 'Adangbay',
            'tanjungredeb' => 'Tanjung redeb',
            'senipah' => 'Senipah',
            'sangkulirang' => 'Sangkulirang',
            'pasirtanahgrogot' => 'Pasir tanah grogot',
            'sepingganu' => 'Sepinggan(u)',
            'lainnya' => 'Lainnya',
            'jumlahtotal' => 'Jumlahtotal',
            'fenomena' => 'Fenomena',
            'id_wil' => 'Wilayah',
            'id_satuan' => 'Satuan',
            'id_tahun' => 'Tahun',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
